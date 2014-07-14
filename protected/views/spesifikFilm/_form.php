<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'spesifik-film-form',
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
		<?php echo $form->labelEx($model,'genre_film'); ?>
		<?php echo $form->textField($model,'genre_film',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'genre_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aktor_film'); ?>
		<?php echo $form->textField($model,'aktor_film',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'aktor_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating_film'); ?>
		<?php echo $form->textField($model,'rating_film',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rating_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_rilis_film'); ?>
		<?php echo $form->textField($model,'tahun_rilis_film'); ?>
		<?php echo $form->error($model,'tahun_rilis_film'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'production_house'); ?>
		<?php echo $form->textField($model,'production_house',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'production_house'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->