<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Hexagon\Port\Primary;

interface GetDriverReportPort
{
    public function __invoke(int $driverId): array;
}
