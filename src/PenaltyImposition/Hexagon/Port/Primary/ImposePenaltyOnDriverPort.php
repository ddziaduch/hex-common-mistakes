<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Port\Primary;

use ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Model\DriverId;

interface ImposePenaltyOnDriverPort
{

    public function __invoke(int $numberOfPoints, DriverId $driverId): void;
}
