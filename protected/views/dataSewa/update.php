<?php
$this->breadcrumbs=array(
	'Data Sewas'=>array('index'),
	$model->id_utama=>array('view','id'=>$model->id_utama),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataSewa', 'url'=>array('index')),
	array('label'=>'Create DataSewa', 'url'=>array('create')),
	array('label'=>'View DataSewa', 'url'=>array('view', 'id'=>$model->id_utama)),
	array('label'=>'Manage DataSewa', 'url'=>array('admin')),
);
?>

<h1>Update DataSewa <?php echo $model->id_utama; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>