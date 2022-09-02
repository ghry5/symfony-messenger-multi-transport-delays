<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\HighMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

#[AsMessageHandler]
final class HighMessageHandler implements MessageHandlerInterface
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    public function __invoke(HighMessage $message)
    {
        $this->logger->info($message->getMessage());
    }
}