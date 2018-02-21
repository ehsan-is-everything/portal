<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>logins</h1>
    <ul>
        <?php foreach ($logins as $login): ?>
            <li>
                <?= Html::encode("{$login->id} ({$login->name})") ?>:
                <?= $login->username ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
<?php var_dump($select) ?>
<?= LinkPager::widget(['pagination' => $pagination]) ?>