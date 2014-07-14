<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_utama'); ?>
		<?php echo $form->textField($model,'id_utama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_sewa'); ?>
		<?php echo $form->textField($model,'kode_sewa',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_anggota'); ?>
		<?php echo $form->textField($model,'kode_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_film'); ?>
		<?php echo $form->textField($model,'kode_film',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->