<?php

namespace app\controllers;

use yii;
use app\models\Pet;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule;

class PetController extends \yii\web\Controller
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
                            'roles' => [User::ROLE_ADMIN]
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
            $model = new Pet();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]); 
            }
            
            return $this->render('create', compact('model'));
        
        }
        public function actionDelete($id)
        {
            Pet::findOne($id)->delete();
            return $this->redirect(['/pet/index']);
        }

        public function actionIndex()
        {
            $model = Pet::find()->orderBy('id')->all();;

            return $this->render('index',compact('model'));
        }

        public function actionUpdate($id)
        {
            $model = Pet::findOne($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->render('update', compact('model')); 
        }

        public function actionView($id)
        {
            $model = Pet::findOne($id);
            return $this->render('view', compact('model'));
        }

    }