<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Hexagon\Service;

use ddziaduch\hexCommonMistakes\DriverReport\Hexagon\Port\Primary\GetDriverReportPort;
use ddziaduch\hexCommonMistakes\DriverReport\Hexagon\Port\Secondary\DriverReportRepositoryPort;

final readonly class GetDriverReportService implements GetDriverReportPort
{
    public function __construct(
        private DriverReportRepositoryPort $repository,
    ) {}

    public function __invoke(int $driverId): array
    {
        return $this->repository->getDriverReport($driverId);
    }
}
