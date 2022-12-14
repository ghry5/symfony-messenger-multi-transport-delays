<?php

declare(strict_types=1);

namespace App\Message;

final class HighMessage
{
    public function __construct(
        private string $message,
    ) {
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}