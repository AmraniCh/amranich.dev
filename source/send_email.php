<?php

require __DIR__ . '/vendor/autoload.php';

use Rakit\Validation\Validator;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\SendmailTransport;

$sender = new Emitter();

const DEV_BASE_URL = 'http://localhost:3000';
const PROD_BASE_URL = 'https://amranich.dev';

try {
    if (!function_exists('getUrlDomain')) {
        function getUrlDomain(string $url)
        {
            return str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));
        }
    }

    $baseUrl = '';
    $fullUrl = sprintf("%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']  === 'on' ? 'https' : 'http', $_SERVER['HTTP_HOST']);

    if (getUrlDomain($fullUrl) === getUrlDomain(PROD_BASE_URL)) {
        $baseUrl = PROD_BASE_URL;
    } elseif (getUrlDomain($fullUrl) === getUrlDomain(DEV_BASE_URL)) {
        $baseUrl = DEV_BASE_URL;
    } else {
        throw new \LogicException("Cannot decide the base URL.");
    }

    //header('Access-Control-Allow-Origin: ' . $baseUrl);

    header('Access-Control-Allow-Origin: *');

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        $sender->emit(message: '', status: Emitter::ERROR_STATUS, code: 500);
    }

    header('Content-Type: application/json');

    // validate required parameters
    $validator = new Validator;
    $validation = $validator->make($_POST, [
        'fullname' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
        'email'    => 'required|email',
        'message'    => 'required|min:30|max:500',
    ]);

    $validation->validate();

    if ($validation->fails()) {
        $sender->emit(message: $validation->errors()->all(), status: Emitter::ERROR_STATUS, code: 400);
    }

    $transport = new SendmailTransport();
    $mailer = new Mailer($transport);

    $email = (new Email())
        ->from(Address::create(sprintf("%s <%s>", $_POST['fullname'], $_POST['email'])))
        ->to('contact@amranich.dev')
        ->subject(substr($_POST['message'], 60) ?: $_POST['message'])
        ->text($_POST['message']);

    $mailer->send($email);

    $sender->emit(
        message: "Thank you for reaching out, I'll respond at my earliest convenience.",
        status: Emitter::SUCCESS_STATUS,
        code: 200
    );
} catch (\Throwable $ex) {
    error_log("Caught $ex");

    $sender->emit(
        message: "Internal Server Error, Please contact me using my email address.",
        status: Emitter::ERROR_STATUS,
        code: 500
    );
}
