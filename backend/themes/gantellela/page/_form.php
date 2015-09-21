<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="x_panel">
    <div class="x_content">
        <?php $form = ActiveForm::begin(); ?>

        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Содержимое</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Meta</a>
                </li>

            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <?= Html::activeHiddenInput($model, 'pid'); ?>
                    <?= $form->field($model, 'header')->textInput(['rows' => 6]) ?>
                    <?= $form->field($model, 'teaser')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'content')->textarea(['rows' => 6, "class"=>"ck-editor form-control"]) ?>
                    <div class="row">
                         <div class="col-lg-4">
                            <?= $form->field($model, 'status')->dropDownList([1=>"Опубликована",0=>"Не опубдикованна"]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'creaded')->textInput(["class"=>"date-picker form-control active", /* "type"=>"date" */]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'updated')->textInput() ?>
                        </div>
                        
                    </div>
                  
                    
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>  
                </div>

            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
