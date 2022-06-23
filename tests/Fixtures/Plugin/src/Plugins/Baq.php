<?php

namespace Tests\Fixtures\Plugin\src\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Baq extends Plugin
{
    public function vendor(): ?string
    {
        return 'orchestra/testbench';
    }

    public function version(): string
    {
        return '^7.4';
    }

    public function files(): array
    {
        return [
            'baq.json' => 'vendor/{locale}.json',
        ];
    }
}
