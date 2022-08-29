<?php
/**
 * Class AuthController
 * @package app\controllers
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');
        if ($request->isPost()) {
            return 'Handle login data.';
        }
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Handle register data.';
        }
        return $this->render('register');
    }
}
