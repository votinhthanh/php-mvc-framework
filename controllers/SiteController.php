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
    public function home()
    {
        $params = [
            'name' => 'Vo tinh thanh'
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $requestData = $request->getBody();

        return "Handle Submit data.";
    }
}
