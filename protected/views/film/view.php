<?php
$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->kode_film,
);

$this->menu=array(
	array('label'=>'List Film', 'url'=>array('index')),
	array('label'=>'Create Film', 'url'=>array('create')),
	array('label'=>'Update Film', 'url'=>array('update', 'id'=>$model->kode_film)),
	array('label'=>'Delete Film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_film),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Film', 'url'=>array('admin')),
);
?>

<h1>View Film #<?php echo $model->kode_film; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_film',
		'judul_film',
		'harga_film',
		'durasi_sewa',
		'denda_telat',
		'stock_film',
		'status_film',
	),
)); ?>
