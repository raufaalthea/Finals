<?php

namespace app\controllers;

use yii;
use app\models\Appointment;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule;

class AppointmentController extends \yii\web\Controller
{
     public function behaviors()
     {
            return [
                'access' => [
                    'class' => AccessControl::className(),
                    'ruleConfig' => [
                        'class' => AccessRule::className(),
                    ],
                    'only' => ['create','update','delete'],
                    'rules'=>[
                        [
                            'actions'=>['create','update'],
                            'allow' => true,
                            'roles' => ['@']
                        ],
                        [
                            'actions' => ['delete'],
                            'allow' => true,
                            'roles' => [100]
                        ]
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],


            ];
        }

      public function actionCreate()
        {
            $model = new Appointment();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]); 
            }
            
            return $this->render('create', compact('model'));
        
        }
        public function actionDelete($id)
        {
            Appointment::findOne($id)->delete();
            return $this->redirect(['/appointment/index']);
        }

        public function actionIndex()
        {
            $model = Appointment::find()->orderBy('id')->all();;

            return $this->render('index',compact('model'));
        }

        public function actionUpdate($id)
        {
            $model = Appointment::findOne($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->render('update', compact('model')); 
        }

        public function actionView($id)
        {
            $model = Appointment::findOne($id);
            return $this->render('view', compact('model'));
        }

    }
