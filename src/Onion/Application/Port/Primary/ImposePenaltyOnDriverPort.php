<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Onion\Application\Port\Primary;

use ddziaduch\hexCommonMistakes\Onion\Domain\DriverId;

interface ImposePenaltyOnDriverPort
{
    public function __invoke(int $numberOfPoints, DriverId $driverId): void;
}
