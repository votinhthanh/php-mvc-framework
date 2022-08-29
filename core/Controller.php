<?php
/**
 * Class Controller
 * @package app\core
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\core;

class Controller
{
    public string $layout = 'main';

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
