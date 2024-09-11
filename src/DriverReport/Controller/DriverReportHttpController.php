<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\DriverReport\Controller;

use ddziaduch\hexCommonMistakes\DriverReport\Repository\DriverReportRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

final class DriverReportHttpController
{
    public function __construct(
        private DriverReportRepository $driverReportRepository,
    ) {}

    public function __invoke(
        int $driverId
    ): JsonResponse {
        return new JsonResponse($this->driverReportRepository->getDriverReport($driverId));
    }
}
