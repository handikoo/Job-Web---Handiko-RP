<?php
/* @var $this TabelUtamaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anggotas',
);

$this->menu=array(
	array('label'=>'Relasi Anggota', 'url'=>array('relasi')),
	array('label'=>'Create Anggota', 'url'=>array('create')),
	array('label'=>'Manage Anggota', 'url'=>array('admin')),
);
?>

<h1>Anggotas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
