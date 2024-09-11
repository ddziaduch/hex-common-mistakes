<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Port\Secondary;

use ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Model\Driver;
use ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Model\DriverId;

interface DriverRepositoryPort
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
