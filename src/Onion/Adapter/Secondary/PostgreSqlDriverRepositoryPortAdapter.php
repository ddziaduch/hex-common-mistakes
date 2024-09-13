<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Onion\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\Onion\Application\Port\Secondary\DriverRepositoryPort;
use ddziaduch\hexCommonMistakes\Onion\Domain\Driver;
use ddziaduch\hexCommonMistakes\Onion\Domain\DriverId;
use Override;

final class PostgreSqlDriverRepositoryPortAdapter implements DriverRepositoryPort
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
