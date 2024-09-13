<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Service;

use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Port\Primary\ImposePenaltyOnDriverPort;
use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Port\Secondary\DriverRepositoryPort;
use Override;

final readonly class ImposePenaltyOnDriverService implements ImposePenaltyOnDriverPort
{
    public function __construct(
        private DriverRepositoryPort $repository,
    ) {}

    #[Override]
    public function __invoke(int $numberOfPoints, DriverId $driverId): void
    {
        $driver = $this->repository->get($driverId);
        $driver->imposePenalty($numberOfPoints);
        $this->repository->save($driver);
    }
}
