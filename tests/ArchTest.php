<?php

declare(strict_types = 1);

arch('it will not use debugging functions')
    ->expect(['dd', 'dump', 'ray', 'ds', 'var_dump'])
    ->each->not->toBeUsed();
