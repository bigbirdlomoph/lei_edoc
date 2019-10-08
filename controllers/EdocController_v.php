<?php

namespace app\controllers;

use Yii;
use app\models\Edoc;
use app\models\EdocSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ArrayDataProvider;
use yii\filters\VerbFilter;

/**
 * EdocController implements the CRUD actions for Edoc model.
 */
class EdocController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Edoc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EdocSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Edoc model.
     * @param integer $id
     * @param string $serial_doc
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $serial_doc)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $serial_doc),
        ]);
    }

    /**
     * Creates a new Edoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //      $model = new Edoc();

    //     // if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //     //     return $this->redirect(['view', 'id' => $model->id, 'serial_doc' => $model->serial_doc]);
    //     // }

    //     $serial_doc = new serial_doc();

    //     $request = Yii::$app->getRequest();
    //         if($request->isPost && $request->post('ajax') !== null) {
    //             $serial_doc->load(Yii::$app->request->post());
    //             Yii::$app->response->format = Response::FORMAT_JASON;
    //             $result = ActiveForm::validate($serial_doc);
    //             return $result;
    //         }
    //     if($serial_doc->load(Yii::$app->request->post()))
    //     {
    //         $serial_doc->save();
    //     }

    //     return $this->render('create', [
    //         'serial_doc' => $serial_doc,
    //     ]);
    // }
    
    public function actionCreate()
    {
        $model = new Edoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(
                [
                    'view', 'id' => $model->id, 
                    'serial_doc' => $model->serial_doc
                    ]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Edoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $serial_doc
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $serial_doc)
    {
        $model = $this->findModel($id, $serial_doc);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'serial_doc' => $model->serial_doc]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionEdocument($serial_doc)
    {
        $sql=   "SELECT d.serial_doc, d.date_doc, d.document_name, d.from_gov, d.to_gov, d.note, s.status_name, ds.dep_name
                FROM e_doc d 
                LEFT JOIN status_edoc s on s.status_id = d.`status`
                LEFT JOIN dep_status_edoc ds on ds.dep_id = d.dep_status
                WHERE d.serial_doc='$serial_doc' ";
        
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes' => ['serial_doc','date_doc','document_name','status_name','dep_name']
            ],
        ]);

        return $this->render('edocument',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
            //'serial_doc' => $serial_doc,
        ]);
    }

    /**
     * Deletes an existing Edoc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $serial_doc
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $serial_doc)
    {
        $this->findModel($id, $serial_doc)->delete();

        return $this->redirect(['index']);
    }

    

    /**
     * Finds the Edoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $serial_doc
     * @return Edoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $serial_doc)
    {
        if (($model = Edoc::findOne(['id' => $id, 'serial_doc' => $serial_doc])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
