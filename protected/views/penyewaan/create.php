<?php
$this->breadcrumbs=array(
	'Penyewaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penyewaan', 'url'=>array('index')),
	array('label'=>'Manage Penyewaan', 'url'=>array('admin')),
);
?>

<h1>Create Penyewaan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>