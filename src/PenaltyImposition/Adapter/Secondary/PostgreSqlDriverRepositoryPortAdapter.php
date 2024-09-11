<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\PenaltyImposition\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Model\Driver;
use ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\PenaltyImposition\Hexagon\Port\Secondary\DriverRepositoryPort;
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
