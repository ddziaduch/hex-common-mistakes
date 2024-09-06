<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Application;

use ddziaduch\hexCommonMistakes\Domain\DriverId;
use ddziaduch\hexCommonMistakes\Domain\Port\DriverRepository;

final readonly class DriverService
{
    public function __construct(
        private DriverRepository $repository,
    ) {}

    public function imposePenalty(int $numberOfPoints, DriverId $driverId): void
    {
        $driver = $this->repository->get($driverId);
        $driver->imposePenalty($numberOfPoints);
        $this->repository->save($driver);
    }
}
