<?php
$this->breadcrumbs=array(
	'Kartu Members'=>array('index'),
	$model->kode_anggota,
);

$this->menu=array(
	array('label'=>'List KartuMember', 'url'=>array('index')),
	array('label'=>'Create KartuMember', 'url'=>array('create')),
	array('label'=>'Update KartuMember', 'url'=>array('update', 'id'=>$model->kode_anggota)),
	array('label'=>'Delete KartuMember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_anggota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KartuMember', 'url'=>array('admin')),
);
?>

<h1>View KartuMember #<?php echo $model->kode_anggota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_anggota',
		'tgl_aktivasi_anggota',
		'tgl_exp_anggota',
		'perpanjangan_exp',
		'biaya_perpanjangan',
	),
)); ?>
