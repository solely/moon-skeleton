<?php
/**
 * FileName: Bootstrap.php
 * User: solely
 * DateTime: 2020/9/21 23:07
 * Description:
 */

namespace App;

use Moon\Framework\Bootstrap as BaseBootstrap;

class Bootstrap extends BaseBootstrap
{
    public function getConfigDir()
    {
        return $this->getProjectDir().'/config/'.$this->getEnviron();
    }

    public function getLogDir()
    {
        return $this->getProjectDir().'/app/log';
    }

    public function getRoutesFile()
    {
        return $this->getProjectDir().'/app/routes.php';
    }

    public function getProjectDir()
    {
        return \dirname(__DIR__);
    }

    public function registerModules()
    {
        $contents = require 'modules.php';
        foreach ($contents as $content) {
            yield new $content();
        }
    }
}