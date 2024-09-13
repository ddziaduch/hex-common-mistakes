<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Port\Secondary;

use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\Driver;
use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\DriverId;

interface DriverRepositoryPort
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
