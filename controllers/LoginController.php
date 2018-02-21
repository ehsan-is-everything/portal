<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Login;
use yii\db\Connection;
use Yii;
class LoginController extends Controller
{
    public function actionIndex()
    {

//        $select = Yii::$app->db->createCommand('SELECT s.name StudentsName, c.name CourseName, sc.fkcrs CourseID
//        FROM students s JOIN stdcrs sc on s.id = sc.fkstd
//        JOIN courses c on c.id = sc.fkstd WHERE s.name = \'ali\'')->queryAll();
        $select = (new \yii\db\Query())
            ->select(['students.name StudentsName','courses.name CourseName','stdcrs.fkcrs CourseID'])
            ->from('students')
            ->join('join','stdcrs','students.id = stdcrs.fkstd')
            ->join('join','courses','courses.id = stdcrs.fkcrs')
            ->where(['students.name' => 'ali'])
            ->limit(10)
            ->all();
        $query = Login::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $logins = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'logins' => $logins,
            'pagination' => $pagination,
            'select'=>$select
        ]);
    }
}