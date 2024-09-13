<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Model;

final class Driver
{
    private int $numberOfPoints = 0;

    public function imposePenalty(int $currentNumberOfPoints, int $numberOfPoints): void
    {
        $this->numberOfPoints = $currentNumberOfPoints + $numberOfPoints;
    }
}
