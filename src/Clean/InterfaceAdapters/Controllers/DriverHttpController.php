<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Clean\InterfaceAdapters\Controllers;

use ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\Ports\Input\ImposePenaltyOnDriverPortUseCaseInputPort;
use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\DriverId;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
final readonly class DriverHttpController
{
    public function __construct(
        private ImposePenaltyOnDriverPortUseCaseInputPort $imposePenaltyOnDriver,
    ) {}

    public function __invoke(
        int $numberOfPoints,
        DriverId $driverId,
    ): Response {
        ($this->imposePenaltyOnDriver)($numberOfPoints, $driverId);

        return new Response();
    }
}
