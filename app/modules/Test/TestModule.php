<?php
/**
 * FileName: TestModule.php
 * User: solely
 * DateTime: 2020/9/21 23:16
 * Description:
 */

namespace App\Modules\Test;

use Moon\Component\DI\Container;
use Moon\Framework\ModulesInterface;

class TestModule implements ModulesInterface
{
    public function boot()
    {
        // TODO: Implement boot() method.
    }

    public function shutdown()
    {
        // TODO: Implement shutdown() method.
    }

    public function build(Container $container)
    {
        // TODO: Implement build() method.
    }

    public function getName()
    {
        return 'Test';
    }

    public function getPath(): string
    {
        // TODO: Implement getPath() method.
    }
}