<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PortsAndAdapters\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\Driver;
use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\PortsAndAdapters\Hexagon\Port\Secondary\DriverRepositoryPort;
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
