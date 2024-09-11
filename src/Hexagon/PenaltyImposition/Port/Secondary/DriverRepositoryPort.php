<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Port\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Model\Driver;
use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Model\DriverId;

interface DriverRepositoryPort
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
