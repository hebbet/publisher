<?php

namespace Helldar\LaravelLangPublisher\Facades;

use Helldar\LaravelLangPublisher\Support\Config as ConfigSupport;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string getVendorPath()
 * @method static string getLocale()
 * @method static string getFallbackLocale()
 * @method static bool isAlignment()
 * @method static array getExclude(string $key, array $default = [])
 * @method static int getCase()
 */
final class Config extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ConfigSupport::class;
    }
}
