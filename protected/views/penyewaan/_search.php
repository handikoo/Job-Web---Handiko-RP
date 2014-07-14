<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

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

	<div class="row">
		<?php echo $form->label($model,'tanggal_sewa'); ?>
		<?php echo $form->textField($model,'tanggal_sewa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_kembali'); ?>
		<?php echo $form->textField($model,'tanggal_kembali'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_harga'); ?>
		<?php echo $form->textField($model,'total_harga',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diskon'); ?>
		<?php echo $form->textField($model,'diskon',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->