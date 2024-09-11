<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Service;

use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Port\Primary\ImposePenaltyOnDriverPort;
use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Port\Secondary\DriverRepositoryPort;
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
