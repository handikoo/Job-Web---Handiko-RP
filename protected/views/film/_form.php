<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'film-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_film'); ?>
		<?php echo $form->textField($model,'kode_film',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kode_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul_film'); ?>
		<?php echo $form->textField($model,'judul_film',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'judul_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_film'); ?>
		<?php echo $form->textField($model,'harga_film',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'harga_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'durasi_sewa'); ?>
		<?php echo $form->textField($model,'durasi_sewa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'durasi_sewa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'denda_telat'); ?>
		<?php echo $form->textField($model,'denda_telat',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'denda_telat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_film'); ?>
		<?php echo $form->textField($model,'stock_film'); ?>
		<?php echo $form->error($model,'stock_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_film'); ?>
		<?php echo $form->textField($model,'status_film',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'status_film'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->