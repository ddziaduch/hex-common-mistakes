<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Command;

use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;

final readonly class ImposePenaltyOnDriver implements Command
{
    public function __construct(
        public int $numberOfPoints,
        public DriverId $driverId,
    ) {}
}
