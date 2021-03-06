<?php

use \yii\widgets\ListView;

/* @var $featuredProvider yii\data\ActiveDataProvider */
/* @var $newProvider yii\data\ActiveDataProvider */
/* @var $this yii\web\View */
$this->title = Yii::t('project', 'Projects built with Yii');
?>
<div class="project-index">
    <h1><?= Yii::t('project', 'Featured projects') ?></h1>

    <div class="container">
        <?= ListView::widget([
            'dataProvider' => $featuredProvider,
            'layout' => '{items}',
            'itemOptions' => ['class' => 'item'],
            'itemView' => '_card'
        ]) ?>
    </div>

    <h1><?= Yii::t('project', 'New projects') ?></h1>


    <div class="container">
        <?= ListView::widget([
            'dataProvider' => $newProvider,
            'layout' => '{items}',
            'itemOptions' => ['class' => 'item'],
            'itemView' => '_card'
        ]) ?>
    </div>

    <div class="container">
        <?= \yii\bootstrap\Html::a(Yii::t('project', 'More projects'), ['project/list'], ['class' => 'btn btn-default']) ?>
    </div>
</div>