<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pid',
            'title:ntext',
            'header:ntext',
            'teaser:ntext',
            // 'content:ntext',
            // 'creaded',
            // 'updated',
            // 'uid',
            // 'keywords:ntext',
            // 'description:ntext',
            // 'status',
            // 'comment:ntext',
            // 'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
