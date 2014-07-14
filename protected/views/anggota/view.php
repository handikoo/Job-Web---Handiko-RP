<?php
$this->breadcrumbs=array(
	'Anggotas'=>array('index'),
	$model->kode_anggota,
);

$this->menu=array(
	array('label'=>'List Anggota', 'url'=>array('index')),
	array('label'=>'Create Anggota', 'url'=>array('create')),
	array('label'=>'Update Anggota', 'url'=>array('update', 'id'=>$model->kode_anggota)),
	array('label'=>'Delete Anggota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_anggota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anggota', 'url'=>array('admin')),
);
?>

<h1>View Anggota #<?php echo $model->kode_anggota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_anggota',
		'nama_anggota',
		'alamat_anggota',
		'ttl_anggota',
		'no_telp',
		'identitas_anggota',
		'status_anggota',
		'email_anggota',
	),
)); ?>
