<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Adapter\Primary;

use ddziaduch\hexCommonMistakes\DriverReport\Hexagon\Port\Primary\GetDriverReportPort;
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
