<?php

namespace Helldar\LaravelLangPublisher\Console;

class Remove extends Base
{
    protected $signature = 'lang:rm'
    . ' {locales?* : Space-separated list of, eg: de tk it}';

    protected $description = 'Remove localizations.';
}
