<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblOferente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-oferente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ap_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ap_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'repeat_password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
