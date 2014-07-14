<?php
$this->breadcrumbs=array(
	'Penyewaans'=>array('index'),
	$model->kode_sewa,
);

$this->menu=array(
	array('label'=>'List Penyewaan', 'url'=>array('index')),
	array('label'=>'Create Penyewaan', 'url'=>array('create')),
	array('label'=>'Update Penyewaan', 'url'=>array('update', 'id'=>$model->kode_sewa)),
	array('label'=>'Delete Penyewaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_sewa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penyewaan', 'url'=>array('admin')),
);
?>

<h1>View Penyewaan #<?php echo $model->kode_sewa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_sewa',
		'kode_anggota',
		'kode_film',
		'tanggal_sewa',
		'tanggal_kembali',
		'total_harga',
		'diskon',
	),
)); ?>
