<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_film'); ?>
		<?php echo $form->textField($model,'kode_film',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genre_film'); ?>
		<?php echo $form->textField($model,'genre_film',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aktor_film'); ?>
		<?php echo $form->textField($model,'aktor_film',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rating_film'); ?>
		<?php echo $form->textField($model,'rating_film',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_rilis_film'); ?>
		<?php echo $form->textField($model,'tahun_rilis_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'production_house'); ?>
		<?php echo $form->textField($model,'production_house',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->