<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Port\Primary;

use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Model\DriverId;

interface ImposePenaltyOnDriverPort
{

    public function __invoke(int $numberOfPoints, DriverId $driverId): void;
}
