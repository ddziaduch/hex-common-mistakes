<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\DriverReport\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\DriverReport\Port\Secondary\DriverReportRepositoryPort;

final class PostgreSqlDriverReportRepositoryPortAdapter implements DriverReportRepositoryPort
{
    public function getDriverReport(int $driverId): array
    {
        throw new \LogicException('Not implemented');
    }
}
