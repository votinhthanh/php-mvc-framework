<?php
/**
 * Class AuthController
 * @package app\controllers
 * @author Tinh Thanh Vo <tinhthanh.vo@nfq.asia>
 */

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return array|bool|string
     */
    public function login(Request $request): array|bool|string
    {
        $this->setLayout('auth');
        if ($request->isPost()) {
            return 'Handle login data.';
        }
        return $this->render('login');
    }

    /**
     * @param Request $request
     * @return array|bool|string
     */
    public function register(Request $request): array|bool|string
    {
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }

            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}
