<?php

declare(strict_types=1);

namespace App\Controller;

use App\Message\HighMessage;
use App\Message\LowMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
final class MessengerController extends AbstractController
{
    #[Route('/')]
    public function index()
    {
        return new Response(
            '<html><body>Hello</body></html>'
        );
    }

    #[Route('/high')]
    public function high(MessageBusInterface $bus)
    {
        $bus->dispatch(new HighMessage("High Message"));
        return new Response(
            '<html><body>High triggered</body></html>'
        );
    }

    #[Route('/low')]
    public function low(MessageBusInterface $bus)
    {
        $bus->dispatch(new LowMessage("Low Message"));
        return new Response(
            '<html><body>Low triggered</body></html>'
        );
    }

}