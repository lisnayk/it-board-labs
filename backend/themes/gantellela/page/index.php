<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="x_panel">
    <div class="x_title">
        <h2><?= Html::encode($this->title) ?></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>



    <p>
        <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="x_content">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'title:ntext',
                'header:ntext',
                // 'content:ntext',
                 'creaded',
                // 'updated',
                // 'uid',
                // 'keywords:ntext',
                // 'description:ntext',
                // 'status',
                // 'comment:ntext',
                // 'type',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>

</div>

