<?php
$this->breadcrumbs=array(
	'Data Sewas',
);

$this->menu=array(
array('label'=>'Relasi DataSewa', 'url'=>array('relasi')),
	array('label'=>'Create DataSewa', 'url'=>array('create')),
	array('label'=>'Manage DataSewa', 'url'=>array('admin')),
);
?>

<h1>Data Sewas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
