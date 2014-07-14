<?php
$this->breadcrumbs=array(
	'Kartu Members'=>array('index'),
	$model->kode_anggota=>array('view','id'=>$model->kode_anggota),
	'Update',
);

$this->menu=array(
	array('label'=>'List KartuMember', 'url'=>array('index')),
	array('label'=>'Create KartuMember', 'url'=>array('create')),
	array('label'=>'View KartuMember', 'url'=>array('view', 'id'=>$model->kode_anggota)),
	array('label'=>'Manage KartuMember', 'url'=>array('admin')),
);
?>

<h1>Update KartuMember <?php echo $model->kode_anggota; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>