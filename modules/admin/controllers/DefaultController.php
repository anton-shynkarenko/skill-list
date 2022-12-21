<?php

namespace app\modules\admin\controllers;

use dmstr\web\AdminLteAsset;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'admin';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('dashboard');
    }
}
