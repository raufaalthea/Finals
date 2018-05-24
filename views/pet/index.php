<?php 

use yii\helpers\Html;


$this->title = "Pet";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Pet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Id</th>
        <th>Type</th>
        <th>Date of Birth</th>
        <th>Medical Conditions</th>

 </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/pet/view', 'id'=>$model->id]); ?>
        </td>  
        
        <td><?= $model->type ?></td>
          <td><?= $model->date_of_birth ?></td>
           <td><?= $model->medical_conditions ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
