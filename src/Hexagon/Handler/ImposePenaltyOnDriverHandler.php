<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Handler;

use ddziaduch\hexCommonMistakes\Hexagon\Command\ImposePenaltyOnDriver;
use ddziaduch\hexCommonMistakes\Hexagon\Port\DriverRepositoryPort;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

final readonly class ImposePenaltyOnDriverHandler
{
    public function __construct(
        private DriverRepositoryPort $repository,
    ) {}

    #[AsMessageHandler]
    public function __invoke(ImposePenaltyOnDriver $command): void
    {
        $driver = $this->repository->get($command->driverId);
        $driver->imposePenalty($command->numberOfPoints);
        $this->repository->save($driver);
    }
}
