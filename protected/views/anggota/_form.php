<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anggota-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_anggota'); ?>
		<?php echo $form->textField($model,'kode_anggota'); ?>
		<?php echo $form->error($model,'kode_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_anggota'); ?>
		<?php echo $form->textField($model,'nama_anggota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_anggota'); ?>
		<?php echo $form->textField($model,'alamat_anggota',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alamat_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ttl_anggota'); ?>
		<?php echo $form->textField($model,'ttl_anggota'); ?>
		<?php echo $form->error($model,'ttl_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp'); ?>
		<?php echo $form->error($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identitas_anggota'); ?>
		<?php echo $form->textField($model,'identitas_anggota',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'identitas_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_anggota'); ?>
		<?php echo $form->textField($model,'status_anggota',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'status_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_anggota'); ?>
		<?php echo $form->textField($model,'email_anggota',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'email_anggota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->