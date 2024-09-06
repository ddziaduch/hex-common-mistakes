<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Presentation;

use ddziaduch\hexCommonMistakes\Application\DriverService;
use ddziaduch\hexCommonMistakes\Domain\DriverId;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
final readonly class DriverController
{
    public function __construct(
        private DriverService $driverService,
    ) {}

    public function __invoke(
        int $numberOfPoints,
        DriverId $driverId,
    ): Response {
        $this->driverService->imposePenalty($numberOfPoints, $driverId);

        return new Response();
    }
}
