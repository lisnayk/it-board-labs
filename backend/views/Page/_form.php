<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'header')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'teaser')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'creaded')->textInput() ?>

    <?= $form->field($model, 'updated')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
