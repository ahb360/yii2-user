<?php

namespace app\controllers;

class BackendController extends \yii\web\Controller
{
    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionList()
    {
        return $this->render('list');
    }

    public function actionResetPassword()
    {
        return $this->render('reset-password');
    }

    public function actionSuspend()
    {
        return $this->render('suspend');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
