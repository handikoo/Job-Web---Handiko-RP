<?php
$this->breadcrumbs=array(
	'Penyewaans'=>array('index'),
	$model->kode_sewa=>array('view','id'=>$model->kode_sewa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penyewaan', 'url'=>array('index')),
	array('label'=>'Create Penyewaan', 'url'=>array('create')),
	array('label'=>'View Penyewaan', 'url'=>array('view', 'id'=>$model->kode_sewa)),
	array('label'=>'Manage Penyewaan', 'url'=>array('admin')),
);
?>

<h1>Update Penyewaan <?php echo $model->kode_sewa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>