<?php

namespace backend\controllers;

use Yii;
use backend\models\Trousers;
use backend\models\TrousersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Phoenix;
/**
 * TrousersController implements the CRUD actions for Trousers model.
 */
class TrousersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Trousers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrousersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Trousers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Trousers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Trousers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_trousers]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Trousers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_trousers]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Trousers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Trousers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Trousers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Trousers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionImport(){
        //$part = Yii::getAlias('@app').'/web/';
        $inputFile = 'uploads/phoenix.xlsx';
        try {
            $inputFileType = \PHPExcel_IOFactory::identify($inputFile);
            $objectReader = \PHPExcel_IOFactory::createReader($inputFileType);
            $objectPHPExcel = $objectReader->load($inputFile);
        } catch (Exception $e) {
            die('Error');
        }
        $sheet = $objectPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        for($row = 1 ; $row<= $highestRow; $row++){
            $rowData = $sheet
            ->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);
            if($row == 1){
                continue;
            }
            $phoenix = new Phoenix();
            $phoenix->id_trousers = $rowData[0][0];
            $phoenix->name_phoenix = $rowData[0][1];
            $phoenix->status = $rowData[0][2];
            $phoenix->created_at = $rowData[0][3];
            $phoenix->updated_at = $rowData[0][4];
            //$phoenix->save();
            /*print_r($rowData[0][0]);
            print_r($rowData[0][1]);
            print_r($rowData[0][2]);
            print_r($rowData[0][3]);
            print_r($rowData[0][4]);
            print_r($phoenix->getErrors());*/
            $phoenix->save();
            
        }
        
        //return $this->goHome();
    }
}
