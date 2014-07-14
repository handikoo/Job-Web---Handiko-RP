<?php
$this->breadcrumbs=array(
	'Anggotas'=>array('index'),
	$model->kode_anggota=>array('view','id'=>$model->kode_anggota),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anggota', 'url'=>array('index')),
	array('label'=>'Create Anggota', 'url'=>array('create')),
	array('label'=>'View Anggota', 'url'=>array('view', 'id'=>$model->kode_anggota)),
	array('label'=>'Manage Anggota', 'url'=>array('admin')),
);
?>

<h1>Update Anggota <?php echo $model->kode_anggota; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>