<?php
$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->kode_film=>array('view','id'=>$model->kode_film),
	'Update',
);

$this->menu=array(
	array('label'=>'List Film', 'url'=>array('index')),
	array('label'=>'Create Film', 'url'=>array('create')),
	array('label'=>'View Film', 'url'=>array('view', 'id'=>$model->kode_film)),
	array('label'=>'Manage Film', 'url'=>array('admin')),
);
?>

<h1>Update Film <?php echo $model->kode_film; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>