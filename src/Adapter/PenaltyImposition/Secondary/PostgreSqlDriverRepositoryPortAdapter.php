<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\PenaltyImposition\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Model\Driver;
use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\PenaltyImposition\Port\Secondary\DriverRepositoryPort;
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
