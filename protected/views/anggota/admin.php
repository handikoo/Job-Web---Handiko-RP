<?php
/* @var $this TabelUtamaController */
/* @var $model TabelUtama */

$this->breadcrumbs=array(
	'Anggotas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Relasi Anggota', 'url'=>array('relasi')),
	array('label'=>'List Anggota', 'url'=>array('index')),
	array('label'=>'Create Anggota', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#anggota-grid').yiiListView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Anggotas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'anggota-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_anggota',
		'nama_anggota',
		'alamat_anggota',
		'ttl_anggota',
		'no_telp',
		'identitas_anggota',
		/*
		'status_anggota',
		'email_anggota',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
