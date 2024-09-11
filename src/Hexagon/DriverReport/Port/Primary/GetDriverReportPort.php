<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\DriverReport\Port\Primary;

interface GetDriverReportPort
{
    public function __invoke(int $driverId): array;
}
