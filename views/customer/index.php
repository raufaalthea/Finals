<?php 

use yii\helpers\Html;


$this->title = "Customer";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Id</th>
        <th>Title</th>
        <th>Surname</th>
        <th>Street</th>
        <th>Town</th>
        <th>Phone Number</th>

 </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/customer/view', 'id'=>$model->id]); ?>
        </td>  
        
        <td><?= $model->title ?></td>
         <td><?= $model->surname ?></td>
          <td><?= $model->street ?></td>
           <td><?= $model->town ?></td>
           <td><?= $model->phone_number ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
