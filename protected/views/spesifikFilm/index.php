<?php
$this->breadcrumbs=array(
	'Spesifik Films',
);

$this->menu=array(
	array('label'=>'Create SpesifikFilm', 'url'=>array('create')),
	array('label'=>'Manage SpesifikFilm', 'url'=>array('admin')),
);
?>

<h1>Spesifik Films</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
