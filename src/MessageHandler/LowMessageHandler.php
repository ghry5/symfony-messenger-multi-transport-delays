<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\LowMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

#[AsMessageHandler]
final class LowMessageHandler implements MessageHandlerInterface
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    public function __invoke(LowMessage $message)
    {
        $this->logger->info($message->getMessage());
    }
}