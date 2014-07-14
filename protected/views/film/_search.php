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
		<?php echo $form->label($model,'judul_film'); ?>
		<?php echo $form->textField($model,'judul_film',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga_film'); ?>
		<?php echo $form->textField($model,'harga_film',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'durasi_sewa'); ?>
		<?php echo $form->textField($model,'durasi_sewa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'denda_telat'); ?>
		<?php echo $form->textField($model,'denda_telat',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_film'); ?>
		<?php echo $form->textField($model,'stock_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_film'); ?>
		<?php echo $form->textField($model,'status_film',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->