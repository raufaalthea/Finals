<?php

use yii\helpers\Html;

$this->title = 'Create Appointment';
$this->params['breadcrumbs'][] = ['label' => 'Appointment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Appointment-create">

    <h1><?= Html::encode($this->title) ?></h1>	

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
