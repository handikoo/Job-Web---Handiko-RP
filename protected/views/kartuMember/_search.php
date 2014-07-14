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
		<?php echo $form->label($model,'tgl_aktivasi_anggota'); ?>
		<?php echo $form->textField($model,'tgl_aktivasi_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_exp_anggota'); ?>
		<?php echo $form->textField($model,'tgl_exp_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perpanjangan_exp'); ?>
		<?php echo $form->textField($model,'perpanjangan_exp',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_perpanjangan'); ?>
		<?php echo $form->textField($model,'biaya_perpanjangan',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->