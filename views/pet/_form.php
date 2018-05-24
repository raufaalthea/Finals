<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pet-form">

    <?php $form = ActiveForm::begin(); ?>



    

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_conditions')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>