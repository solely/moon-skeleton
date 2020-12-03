<?php
/**
 * FileName: DemoController.php
 * User: solely
 * DateTime: 2020/9/21 0:08
 * Description:
 */

namespace App\Modules\Test\Controller;

use Moon\Component\Http\Message\HtmlResponse;
use Moon\Component\Http\Message\ServerRequest;
use Moon\Framework\Controller\AbstractController;

class DemoController extends AbstractController
{

    public function home(ServerRequest $request)
    {
        return new HtmlResponse('<h2 style="text-align: center">hello world</h2>');
    }
}