<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary;

use ddziaduch\hexCommonMistakes\Adapter\Secondary\HttpPullPointsAdapter;
use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use Psr\Http\Message\ResponseInterface;

interface PullPointsPort
{
    public function pull(DriverId $driverId): ResponseInterface;
}
