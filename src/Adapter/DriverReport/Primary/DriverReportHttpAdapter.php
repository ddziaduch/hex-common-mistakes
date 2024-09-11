<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\DriverReport\Primary;

use ddziaduch\hexCommonMistakes\Hexagon\DriverReport\Port\Primary\GetDriverReportPort;
use Symfony\Component\HttpFoundation\JsonResponse;

final class DriverReportHttpAdapter
{
    public function __construct(
        private GetDriverReportPort $getDriverReport,
    ) {}

    public function __invoke(
        int $driverId
    ): JsonResponse {
        return new JsonResponse(($this->getDriverReport)($driverId));
    }
}
