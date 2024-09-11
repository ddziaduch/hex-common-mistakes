<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Repository;

interface DriverReportRepository
{

    public function getDriverReport(int $driverId): array;
}
