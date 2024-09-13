<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Onion\Application\Service;

use ddziaduch\hexCommonMistakes\Onion\Application\Port\Primary\ImposePenaltyOnDriverPort;
use ddziaduch\hexCommonMistakes\Onion\Application\Port\Secondary\DriverRepositoryPort;
use ddziaduch\hexCommonMistakes\Onion\Domain\DriverId;
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
