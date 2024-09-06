<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Infrastructure;

use ddziaduch\hexCommonMistakes\Domain\Driver;
use ddziaduch\hexCommonMistakes\Domain\DriverId;
use ddziaduch\hexCommonMistakes\Domain\Port\DriverRepository;
use Override;

final class PostgreSqlDriverRepository implements DriverRepository
{
    #[Override]
    public function get(DriverId $driverId): Driver
    {
        throw new \LogicException('not implemented');
    }

    #[Override]
    public function save(Driver $driver): void
    {
        throw new \LogicException('not implemented');
    }
}
