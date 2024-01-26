<?php

use Rakit\Validation\Validator;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\SendmailTransport;

const DEV_BASE_URL = 'http://localhost:3000';
const PROD_BASE_URL = 'https://amranich.dev';

try {
    if (!function_exists('getDomainFromUrl')) {
        function getDomainFromUrl(string $url) {
            return str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));
        }
    }

    $baseUrl = '';
    $fullUrl = sprintf("%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']  === 'on' ? 'https': 'http', $_SERVER['HTTP_HOST']);

    if (getDomainFromUrl($fullUrl) === getDomainFromUrl(PROD_BASE_URL)) {
        $baseUrl = PROD_BASE_URL;
    } elseif (getDomainFromUrl($fullUrl) === getDomainFromUrl(DEV_BASE_URL)) {
        $baseUrl = DEV_BASE_URL;
    } else {
        throw new \LogicException("Cannot decide the base URL.");
    }

    header('Access-Control-Allow-Origin: ' . $baseUrl);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(400);
        exit(json_encode([
            'message' => '',
            'status' => 'error'
        ]));
    }

    require __DIR__ . '/vendor/autoload.php';
    
    header('Content-Type: application/json');

    $validator = new Validator;
    $validation = $validator->make($_POST, [
        'fullname' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
        'email'    => 'required|email',
        'message'    => 'required|min:30|max:500',
    ]);

    $validation->validate();

    if ($validation->fails()) {
        exit(json_encode([
            'message' => $validation->errors()->all(),
            'status' => 'error'
        ]));
    } 

    $transport = new SendmailTransport();
    $mailer = new Mailer($transport);

    $email = (new Email())
        ->from(Address::create(sprintf("%s <%s>", $_POST['fullname'], $_POST['email'])))
        ->to('contact@amranich.dev')
        ->subject(substr($_POST['message'], 60) ?: $_POST['message'])
        ->text($_POST['message']);

    $mailer->send($email);

    exit(json_encode([
        'message' => "Thank you for reaching out, I'll respond at my earliest convenience.",
        'status' => 'success'
    ]));

} catch(\Throwable $ex) {
    error_log("Caught $ex");
    http_response_code(500);
    exit(json_encode([
        'message' => 'Internal Server Error, Please contact me using my email address.',
        'status' => 'error'
    ]));
}