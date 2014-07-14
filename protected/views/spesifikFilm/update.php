<?php
$this->breadcrumbs=array(
	'Spesifik Films'=>array('index'),
	$model->kode_film=>array('view','id'=>$model->kode_film),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpesifikFilm', 'url'=>array('index')),
	array('label'=>'Create SpesifikFilm', 'url'=>array('create')),
	array('label'=>'View SpesifikFilm', 'url'=>array('view', 'id'=>$model->kode_film)),
	array('label'=>'Manage SpesifikFilm', 'url'=>array('admin')),
);
?>

<h1>Update SpesifikFilm <?php echo $model->kode_film; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>