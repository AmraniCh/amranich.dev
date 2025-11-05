<?php

require __DIR__ . '/vendor/autoload.php';

use Rakit\Validation\Validator;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;

$origins = [
    'http://localhost:3000',
    'https://amranich.dev',
];

$requestOrigin = $_SERVER['HTTP_ORIGIN'] ?? '';

if (in_array($requestOrigin, $origins)) {
    header('Access-Control-Allow-Origin: ' . $requestOrigin);
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

try {
    $sender = new Emitter();

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        $sender->emit(message: '', status: Emitter::ERROR_STATUS, code: 500);
    }

    verifyRecaptcha();

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

    $transport = new EsmtpTransport($_ENV['SMTP_HOST'], $_ENV['SMTP_PORT'], null);
    $transport->setUsername($_ENV['SMTP_USERNAME']);
    $transport->setPassword($_ENV['SMTP_PASSWORD']);
    $mailer = new Mailer($transport);

    $email = (new Email())
        ->from($_ENV['SMTP_FROM_ADDRESS'])
        ->to($_ENV['SMTP_TO_ADDRESS'])
        ->replyTo($_POST['email'])
        ->subject('Contact Form: ' . substr($_POST['message'], 0, 50))
        ->text(sprintf(
            "Name: %s\nEmail: %s\n\nMessage:\n%s",
            $_POST['fullname'],
            $_POST['email'],
            $_POST['message']
        ));

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


/**
 * verify recaptcha
 * 
 * https://developers.google.com/recaptcha/docs/verify
 */
function verifyRecaptcha()
{
    global $sender;

    if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        $sender->emit(message: "reCAPTCHA verification required.", status: Emitter::ERROR_STATUS, code: 400);
    }

    $token = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $_ENV['RECAPTCHA_SECRET'],
        'response' => $token
    );

    $options = array(
        'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);

    if (!$response->success) {
        error_log("reCAPTCHA verification failed: " . json_encode($response));
        $sender->emit(message: "reCAPTCHA verification failed.", status: Emitter::ERROR_STATUS, code: 400);
    }

    if ($response->score < 0.5) {
        error_log(sprintf(
            "Bot detected: IP=%s, Score=%.2f, Email=%s",
            $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            $response->score,
            $_POST['email'] ?? 'unknown'
        ));

        $sender->emit(message: "Your request appears automated.", status: Emitter::ERROR_STATUS, code: 400);
    }
}
