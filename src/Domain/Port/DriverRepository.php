<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Domain\Port;

use ddziaduch\hexCommonMistakes\Domain\Driver;
use ddziaduch\hexCommonMistakes\Domain\DriverId;

interface DriverRepository
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
