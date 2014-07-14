<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_anggota'); ?>
		<?php echo $form->textField($model,'kode_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_anggota'); ?>
		<?php echo $form->textField($model,'nama_anggota',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_anggota'); ?>
		<?php echo $form->textField($model,'alamat_anggota',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ttl_anggota'); ?>
		<?php echo $form->textField($model,'ttl_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identitas_anggota'); ?>
		<?php echo $form->textField($model,'identitas_anggota',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_anggota'); ?>
		<?php echo $form->textField($model,'status_anggota',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_anggota'); ?>
		<?php echo $form->textField($model,'email_anggota',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->