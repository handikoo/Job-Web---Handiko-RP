<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-sewa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_sewa'); ?>
		<?php echo $form->textField($model,'kode_sewa',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kode_sewa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_anggota'); ?>
		<?php echo $form->textField($model,'kode_anggota'); ?>
		<?php echo $form->error($model,'kode_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_film'); ?>
		<?php echo $form->textField($model,'kode_film',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kode_film'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->