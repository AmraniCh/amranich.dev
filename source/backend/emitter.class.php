<?php

class Emitter
{
    private bool $isAjax;

    public const ERROR_STATUS = "error";
    public const SUCCESS_STATUS = "success";

    public function __construct()
    {
        $this->isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === "XMLHttpRequest";
    }


    public function emit(array|string $message, string $status, int $code = 200): void
    {
        http_response_code($code);

        if (!$this->isAjax) {
            header('Content-Type: application/json');
            exit(json_encode([
                'message' => $message,
                'status' => $status
            ]));
        }


        header('Content-Type: text/html');

        $status = strtoupper($status);

        if (is_array($message)) {
            $message = implode("</br>", $message);
        }

        exit("$status: $message");
    }
}
