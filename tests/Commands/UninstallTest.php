<?php

namespace Tests\Commands;

use function compact;
use Helldar\LaravelLangPublisher\Facades\Path;
use Symfony\Component\Console\Exception\RuntimeException;
use Tests\TestCase;

class UninstallTest extends TestCase
{
    public function testWithoutLanguageAttribute()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Not enough arguments (missing: "locales")');

        $this->artisan('lang:uninstall');
    }

    public function testUninstall()
    {
        $locales = ['be', 'da', 'gl', 'is'];

        $this->artisan('lang:uninstall', compact('locales'))->assertExitCode(0);

        foreach ($locales as $locale) {
            $this->assertDirectoryNotExists(
                Path::target($locale)
            );
        }
    }
}
