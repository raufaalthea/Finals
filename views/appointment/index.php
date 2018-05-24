<?php 

use yii\helpers\Html;


$this->title = "Appointment";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Appointment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Id</th>
        <th>Customer Id</th>
        <th>Pet Id</th>
        <th>Date of Appointment</th>
        <th>Time of Appointment</th>

 </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/appointment/view', 'id'=>$model->id]); ?>
        </td>  
        
        <td><?= $model->customer_id ?></td>
         <td><?= $model->pet_id ?></td>
          <td><?= $model->date_of_appointment ?></td>
           <td><?= $model->time_of_appointment ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
