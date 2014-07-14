<?php
$this->breadcrumbs=array(
	'Kartu Members'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List KartuMember', 'url'=>array('index')),
	array('label'=>'Create KartuMember', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('kartu-member-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kartu Members</h1>

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
	'id'=>'kartu-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_anggota',
		'tgl_aktivasi_anggota',
		'tgl_exp_anggota',
		'perpanjangan_exp',
		'biaya_perpanjangan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
