<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\Command\Command;
use ddziaduch\hexCommonMistakes\Hexagon\Port\CommandBus;
use Symfony\Component\Messenger\MessageBus;

final readonly class SymfonyCommandBus implements CommandBus
{
    public function __construct(private MessageBus $messageBus) {}

    public function execute(Command $command): void
    {
        $this->messageBus->dispatch($command);
    }
}
