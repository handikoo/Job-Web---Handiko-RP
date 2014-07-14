<?php
$this->breadcrumbs=array(
	'Data Sewas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataSewa', 'url'=>array('index')),
	array('label'=>'Manage DataSewa', 'url'=>array('admin')),
);
?>

<h1>Create DataSewa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>