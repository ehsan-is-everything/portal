<?php
/**
 * Created by PhpStorm.
 * User: admin4
 * Date: 2/21/2018
 * Time: 9:27 AM
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}