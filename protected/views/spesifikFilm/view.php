<?php
$this->breadcrumbs=array(
	'Spesifik Films'=>array('index'),
	$model->kode_film,
);

$this->menu=array(
	array('label'=>'List SpesifikFilm', 'url'=>array('index')),
	array('label'=>'Create SpesifikFilm', 'url'=>array('create')),
	array('label'=>'Update SpesifikFilm', 'url'=>array('update', 'id'=>$model->kode_film)),
	array('label'=>'Delete SpesifikFilm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_film),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpesifikFilm', 'url'=>array('admin')),
);
?>

<h1>View SpesifikFilm #<?php echo $model->kode_film; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_film',
		'genre_film',
		'aktor_film',
		'rating_film',
		'tahun_rilis_film',
		'production_house',
	),
)); ?>
