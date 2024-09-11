<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Infrastructure;

use ddziaduch\hexCommonMistakes\DriverReport\Repository\DriverReportRepository;

final class PostgreSqlDriverReportRepositoryAdapter implements DriverReportRepository
{
    public function getDriverReport(int $driverId): array
    {
        throw new \LogicException('Not implemented');
    }
}
