<?php
$this->breadcrumbs=array(
	'Penyewaans',
);

$this->menu=array(
	array('label'=>'Create Penyewaan', 'url'=>array('create')),
	array('label'=>'Manage Penyewaan', 'url'=>array('admin')),
);
?>

<h1>Penyewaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
