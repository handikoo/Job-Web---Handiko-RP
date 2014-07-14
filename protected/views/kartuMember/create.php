<?php
$this->breadcrumbs=array(
	'Kartu Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KartuMember', 'url'=>array('index')),
	array('label'=>'Manage KartuMember', 'url'=>array('admin')),
);
?>

<h1>Create KartuMember</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>