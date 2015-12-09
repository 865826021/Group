<?php

namespace core\Group\Config\Tests;

use Test;
use Config;

class ConfigTest extends Test
{
    public function testGet()
    {
        $environment = Config::get('app::environment');
        $this -> assertEquals('prod', $environment);

        //也可以重新设置ests
        Config::set('app', 'environment', 'dev');
        $environment = Config::get('app::environment');
        $this -> assertEquals('dev', $environment);
    }
}
