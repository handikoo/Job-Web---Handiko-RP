<?php
/* @var $this TabelUtamaController */
/* @var $model TabelUtama */

$this->breadcrumbs=array(
	'Film'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Relasi Film', 'url'=>array('relasi')),
	array('label'=>'List Film', 'url'=>array('index')),
	array('label'=>'Create Film', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#film-grid').yiiGridView('update', {
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
	'id'=>'film-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_film',
		array(
		'name'=>'genre',
		'type'=>'Raw',
		'header'=>'genre',
		'value'=>'CHtml::encode(
			$data->spesifik_film->genre_film)',
		'htmlOptions'=>array('width'=>''),
		),
		
	),
)); ?>
