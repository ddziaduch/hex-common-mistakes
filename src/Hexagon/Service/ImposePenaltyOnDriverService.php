<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Service;

use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Primary\ImposePenaltyOnDriverPort;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary\DriverRepositoryPort;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary\PullCurrentNumberOfPointsPort;
use Override;


final readonly class ImposePenaltyOnDriverService implements ImposePenaltyOnDriverPort
{
    public function __construct(
        private DriverRepositoryPort $repository,
        private PullCurrentNumberOfPointsPort $pullPoints,
    ) {}

    #[Override]
    public function __invoke(int $numberOfPoints, DriverId $driverId): void
    {
        $driver = $this->repository->get($driverId);
        $currentNumberOfPoints = $this->pullPoints->pull($driverId);
        $driver->imposePenalty($currentNumberOfPoints, $numberOfPoints);
        $this->repository->save($driver);

    }
}
