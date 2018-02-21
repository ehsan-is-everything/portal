<?php

/**
 * Created by PhpStorm.
 * User: admin4
 * Date: 2/21/2018
 * Time: 9:41 AM
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <?php print $model->name.', your email address is: '.$model->email;?>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>