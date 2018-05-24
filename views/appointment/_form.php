<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>



    
    <?= $form->field($model, 'customer_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pet_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_appointment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_of_appointment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
