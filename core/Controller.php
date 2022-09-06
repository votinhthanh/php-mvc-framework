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

    /**
     * @param $layout
     * @return void
     */
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    /**
     * @param $view
     * @param array $params
     * @return array|false|string|string[]
     */
    public function render($view, array $params = []): array|bool|string
    {
        return Application::$app->router->renderView($view, $params);
    }
}
