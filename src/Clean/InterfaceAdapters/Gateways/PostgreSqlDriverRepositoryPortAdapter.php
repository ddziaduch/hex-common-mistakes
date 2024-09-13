<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Clean\InterfaceAdapters\Gateways;

use ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\Ports\Output\DriverRepositoryOutputPort;
use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\Driver;
use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\DriverId;
use Override;

final class PostgreSqlDriverRepositoryPortAdapter implements DriverRepositoryOutputPort
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
