<?php
/**
 * FileName: routes.php
 * User: solely
 * DateTime: 2020/9/22 0:06
 * Description:
 */

use Moon\Component\Router\Router;

return function (Router $router) {
  $router->get('/', 'App\modules\Test\Controller\DemoController::home');
};