<?php
$this->breadcrumbs=array(
	'Data Sewas'=>array('index'),
	$model->id_utama,
);

$this->menu=array(
	array('label'=>'List DataSewa', 'url'=>array('index')),
	array('label'=>'Create DataSewa', 'url'=>array('create')),
	array('label'=>'Update DataSewa', 'url'=>array('update', 'id'=>$model->id_utama)),
	array('label'=>'Delete DataSewa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_utama),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataSewa', 'url'=>array('admin')),
);
?>

<h1>View DataSewa #<?php echo $model->id_utama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_utama',
		'kode_sewa',
		'kode_anggota',
		'kode_film',
	),
)); ?>
