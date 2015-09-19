<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>

        <div id="login" class="animate form">
            <section class="login_content">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <h1>Авторизация</h1>
                <div>
                    <?= Html::activeTextInput($model, 'username', ['class' => "form-control", 'placeholder' => "Имя пользователя"]) ?>
                </div>
                <div>
                    <?= Html::activePasswordInput($model, 'password', ['class' => "form-control", 'placeholder' => "Пароль"]) ?>

                </div>

                <div>
                    <a class="btn btn-default submit" href="" onclick="$('#login-form').submit();
                                    return false;">Log in</a>
                    <a class="reset_pass" href="#">Забыли пароль?</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">

                    <p class="change_link">Впервые на сайте?
                        <a href="#toregister" class="to_register"> Создвть аккаунт </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />

                </div>
                <?php ActiveForm::end(); ?>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
        <div id="register" class="animate form">
            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <p class="change_link">Already a member ?
                            <a href="#tologin" class="to_register"> Log in </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                            <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
   

