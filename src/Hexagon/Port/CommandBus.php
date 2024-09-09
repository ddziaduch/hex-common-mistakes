<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Hexagon\Port;

use ddziaduch\hexCommonMistakes\Hexagon\Command\Command;

interface CommandBus
{
    public function execute(Command $command): void;
}
