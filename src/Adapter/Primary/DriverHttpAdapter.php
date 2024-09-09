<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\Primary;

use ddziaduch\hexCommonMistakes\Hexagon\Command\ImposePenaltyOnDriver;
use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\Port\CommandBus;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
final readonly class DriverHttpAdapter
{
    public function __construct(
        private CommandBus $commandBus,
    ) {}

    public function __invoke(
        int $numberOfPoints,
        DriverId $driverId,
    ): Response {
        $command = new ImposePenaltyOnDriver($numberOfPoints, $driverId);

        $this->commandBus->execute($command);

        return new Response();
    }
}
