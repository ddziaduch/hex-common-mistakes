<?php declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\Ports\Output;


use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\Driver;
use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\DriverId;

interface DriverRepositoryOutputPort
{
    public function get(DriverId $driverId): Driver;

    public function save(Driver $driver): void;
}
