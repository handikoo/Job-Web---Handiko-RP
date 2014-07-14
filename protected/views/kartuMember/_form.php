<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kartu-member-form',
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
		<?php echo $form->labelEx($model,'tgl_aktivasi_anggota'); ?>
		<?php echo $form->textField($model,'tgl_aktivasi_anggota'); ?>
		<?php echo $form->error($model,'tgl_aktivasi_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_exp_anggota'); ?>
		<?php echo $form->textField($model,'tgl_exp_anggota'); ?>
		<?php echo $form->error($model,'tgl_exp_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perpanjangan_exp'); ?>
		<?php echo $form->textField($model,'perpanjangan_exp',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'perpanjangan_exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biaya_perpanjangan'); ?>
		<?php echo $form->textField($model,'biaya_perpanjangan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'biaya_perpanjangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->