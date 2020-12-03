<?php
/**
 * FileName: test.php
 * User: solely
 * DateTime: 2020/9/21 22:55
 * Description:
 */

include '../vendor/autoload.php';

use Moon\Component\Http\Message\ServerRequest;
use App\Bootstrap;

$response = (new Bootstrap())->handle(ServerRequest::create());
$response->send();