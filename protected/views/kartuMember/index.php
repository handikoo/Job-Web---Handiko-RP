<?php
$this->breadcrumbs=array(
	'Kartu Members',
);

$this->menu=array(
	array('label'=>'Create KartuMember', 'url'=>array('create')),
	array('label'=>'Manage KartuMember', 'url'=>array('admin')),
);
?>

<h1>Kartu Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
