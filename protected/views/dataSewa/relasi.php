<?php
/* @var $this TabelUtamaController */
/* @var $model TabelUtama */

$this->breadcrumbs=array(
	'Data Sewa'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Relasi TabelUtama', 'url'=>array('relasi')),
	array('label'=>'List TabelUtama', 'url'=>array('index')),
	array('label'=>'Create TabelUtama', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-sewa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Relasi Tabel Utamas</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-sewa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_utama',
	
		array(
		'name'=>'kode_anggota',
		'type'=>'Raw',
		'header'=>'anggota',
		'value'=>'CHtml::encode(
			$data->anggota->kode_anggota)',
		'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'kode_anggota',
		'type'=>'Raw',
		'header'=>'Nama',
		'value'=>'CHtml::encode(
			$data->anggota->nama_anggota)',
		'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'kode_film',
		'type'=>'Raw',
		'header'=>'film',
		'value'=>'CHtml::encode(
			$data->film->kode_film)',
		'htmlOptions'=>array('width'=>''),
		),
		array(
		'name'=>'kode_film',
		'type'=>'Raw',
		'header'=>'Judul',
		'value'=>'CHtml::encode(
			$data->film->judul_film)',
		'htmlOptions'=>array('width'=>''),
		),
		
		array(
		'name'=>'kode_sewa',
		'type'=>'Raw',
		'header'=>'Kode Sewa',
		'value'=>'CHtml::encode(
			$data->penyewaan->kode_sewa)',
		'htmlOptions'=>array('width'=>''),
		),
		
		array(
		'name'=>'kode_sewa',
		'type'=>'Raw',
		'header'=>'tanggal sewa',
		'value'=>'CHtml::encode(
			$data->penyewaan->tanggal_sewa)',
		'htmlOptions'=>array('width'=>''),
		),
		
		array(
		'name'=>'kode_sewa',
		'type'=>'Raw',
		'header'=>'tanggal sewa',
		'value'=>'CHtml::encode(
			$data->penyewaan->tanggal_kembali)',
		'htmlOptions'=>array('width'=>''),
		),
		
		
		array(
		'name'=>'kode_sewa',
		'type'=>'Raw',
		'header'=>'Total Harga',
		'value'=>'CHtml::encode(
			$data->penyewaan->total_harga)',
		'htmlOptions'=>array('width'=>''),
		),
	),
)); ?>
