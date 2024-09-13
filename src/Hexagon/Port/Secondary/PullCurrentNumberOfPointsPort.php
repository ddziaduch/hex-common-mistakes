<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\Model\UnableToPullCurrentNumberOfPointsException;

interface PullCurrentNumberOfPointsPort
{
    /** @throws UnableToPullCurrentNumberOfPointsException */
    public function pull(DriverId $driverId): int;
}
