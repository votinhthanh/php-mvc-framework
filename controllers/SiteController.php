<?php
/**
 * Class SiteController
 * @package app\controllers
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    /**
     * @return array|bool|string
     */
    public function home(): array|bool|string
    {
        $params = [
            'name' => 'Vo tinh thanh'
        ];
        return $this->render('home', $params);
    }

    /**
     * @return array|false|string|string[]
     */
    public function contact(): array|bool|string
    {
        return $this->render('contact');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function handleContact(Request $request): string
    {
        $requestData = $request->getBody();

        return "Handle Submit data.";
    }
}
