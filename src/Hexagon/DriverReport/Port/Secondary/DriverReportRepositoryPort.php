<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\DriverReport\Port\Secondary;

interface DriverReportRepositoryPort
{

    public function getDriverReport(int $driverId): array;
}
