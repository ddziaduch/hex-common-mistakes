<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Clean\EnterpriseBusinessRules;

final class Driver
{
    private int $numberOfPoints = 0;
    public function imposePenalty(int $numberOfPoints): void
    {
        $this->numberOfPoints += $numberOfPoints;
    }
}
