<?php
/* @var $this TabelUtamaController */
/* @var $model TabelUtama */

$this->breadcrumbs=array(
	'Anggota'=>array('index'),
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
	$('#anggota-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Relasi Anggota</h1>

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
		
		array(
		'name'=>'kartu',
		'type'=>'Raw',
		'header'=>'Total Harga',
		'value'=>'CHtml::encode(
			$data->kartu_member->tgl_exp_anggota)',
		'htmlOptions'=>array('width'=>''),
		),
	
				
	),
)); ?>
