<?php

declare(strict_types=1);

namespace App\Message;

final class LowMessage
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