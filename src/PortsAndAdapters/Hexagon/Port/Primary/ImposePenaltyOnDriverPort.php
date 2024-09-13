<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Port\Primary;

use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\DriverId;

interface ImposePenaltyOnDriverPort
{

    public function __invoke(int $numberOfPoints, DriverId $driverId): void;
}
