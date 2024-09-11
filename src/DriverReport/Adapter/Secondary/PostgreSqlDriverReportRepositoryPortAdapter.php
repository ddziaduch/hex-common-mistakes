<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\DriverReport\Hexagon\Port\Secondary\DriverReportRepositoryPort;

final class PostgreSqlDriverReportRepositoryPortAdapter implements DriverReportRepositoryPort
{
    public function getDriverReport(int $driverId): array
    {
        throw new \LogicException('Not implemented');
    }
}
