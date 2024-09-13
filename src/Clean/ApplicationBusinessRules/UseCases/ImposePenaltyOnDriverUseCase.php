<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\UseCases;

use ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\Ports\Input\ImposePenaltyOnDriverPortUseCaseInputPort;
use ddziaduch\hexCommonMistakes\Clean\ApplicationBusinessRules\Ports\Output\DriverRepositoryOutputPort;
use ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules\DriverId;
use Override;

final readonly class ImposePenaltyOnDriverUseCase implements ImposePenaltyOnDriverPortUseCaseInputPort
{
    public function __construct(
        private DriverRepositoryOutputPort $repository,
    ) {}

    #[Override]
    public function __invoke(int $numberOfPoints, DriverId $driverId): void
    {
        $driver = $this->repository->get($driverId);
        $driver->imposePenalty($numberOfPoints);
        $this->repository->save($driver);
    }
}
