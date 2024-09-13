<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Onion\Application\Port\Secondary;

use ddziaduch\hexCommonMistakes\Onion\Domain\Driver;
use ddziaduch\hexCommonMistakes\Onion\Domain\DriverId;

interface DriverRepositoryPort
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
