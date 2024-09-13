<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Service;

use ddziaduch\hexCommonMistakes\Adapter\Secondary\HttpPullPointsAdapter;
use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Primary\ImposePenaltyOnDriverPort;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary\DriverRepositoryPort;
use Override;
use RuntimeException;


final readonly class ImposePenaltyOnDriverService implements ImposePenaltyOnDriverPort
{
    public function __construct(
        private DriverRepositoryPort $repository,
        private HttpPullPointsAdapter $pullPoints,
    ) {}

    #[Override]
    public function __invoke(int $numberOfPoints, DriverId $driverId): void
    {
        $driver = $this->repository->get($driverId);
        $pulledPointsResponse = $this->pullPoints->pull($driverId);

        if ($pulledPointsResponse->getStatusCode() !== 200) {
            throw new RuntimeException('Unable to impose penalty points - unable to pull current points');
        }

        try {
            $currentNumberOfPoints = (int) json_decode((string) $pulledPointsResponse->getBody(), flags: JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            throw new RuntimeException('Unable to impose penalty points - unable to pull current points');
        }

        $driver->imposePenalty($currentNumberOfPoints, $numberOfPoints);
        $this->repository->save($driver);

    }
}
