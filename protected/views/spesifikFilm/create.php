<?php
$this->breadcrumbs=array(
	'Spesifik Films'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpesifikFilm', 'url'=>array('index')),
	array('label'=>'Manage SpesifikFilm', 'url'=>array('admin')),
);
?>

<h1>Create SpesifikFilm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>