<?php

namespace app\modules\portal\controllers;

use dmstr\web\AdminLteAsset;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'portal';
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
