<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\Model\Driver;
use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;

interface DriverRepositoryPort
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
