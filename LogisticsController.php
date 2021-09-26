<?php

namespace app\controllers;

use app\models\Logistics;
use app\models\LogisticsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
/**
 * LogisticsController implements the CRUD actions for Logistics model.
 */
class LogisticsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Logistics models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LogisticsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Logistics model.
     * @param int $SrNO Serial No
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SrNO)
    {
        return $this->render('view', [
            'model' => $this->findModel($SrNO),
        ]);
    }

    /**
     * Creates a new Logistics model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Logistics();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SrNO' => $model->SrNO]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Logistics model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SrNO Serial No
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SrNO)
    {
        $model = $this->findModel($SrNO);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SrNO' => $model->SrNO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Logistics model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SrNO Serial No
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SrNO)
    {
        $this->findModel($SrNO)->delete();

        return $this->redirect(['index']);
    }
    
    public function actionViewa(){


    }
    public function actionViewb(){

    }
    public 
   

    






    /**
     * Finds the Logistics model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SrNO Serial No
     * @return Logistics the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SrNO)
    {
        if (($model = Logistics::findOne($SrNO)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }



}
