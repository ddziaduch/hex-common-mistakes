<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PortsAndAdapters\Adapter\Primary;

use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Port\Primary\ImposePenaltyOnDriverPort;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
final readonly class DriverHttpAdapter
{
    public function __construct(
        private ImposePenaltyOnDriverPort $imposePenaltyOnDriver,
    ) {}

    public function __invoke(
        int $numberOfPoints,
        DriverId $driverId,
    ): Response {
        ($this->imposePenaltyOnDriver)($numberOfPoints, $driverId);

        return new Response();
    }
}
