<?php

namespace app\controllers;

class FrontendController extends \yii\web\Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionLogout()
    {
        return $this->render('logout');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionRequestPasswordReset()
    {
        return $this->render('request-password-reset');
    }

    public function actionResetPassword()
    {
        return $this->render('reset-password');
    }

    public function actionSignup()
    {
        return $this->render('signup');
    }

}
