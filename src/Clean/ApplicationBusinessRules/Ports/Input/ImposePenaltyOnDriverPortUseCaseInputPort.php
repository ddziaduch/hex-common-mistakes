<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\Ports\Input;

use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\DriverId;

interface ImposePenaltyOnDriverPortUseCaseInputPort
{

    public function __invoke(int $numberOfPoints, DriverId $driverId): void;
}
