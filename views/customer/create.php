<?php

use yii\helpers\Html;

$this->title = 'Create Customer';
$this->params['breadcrumbs'][] = ['label' => 'Customer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Customer-create">

    <h1><?= Html::encode($this->title) ?></h1>	

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
