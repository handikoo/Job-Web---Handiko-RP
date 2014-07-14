<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - COMPLAINT';
$this->breadcrumbs=array(
	'Contact',
);
?>
<center><h1>CONTACT</h1></center>
 <center><p style="font-size:14px;">
                    Jangli Tlawah VI / 87D Semarang<br/>
                    (024) 8444-119<br/>
                    Handistro@gmail.com<br/>                
                </p></center>
<br /><br />
<center><h1>COMPLAINT</h1></center>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<center>
<p>
Tulis keluhan anda ketika memesan HANDISTRO disini
</p>
</center>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<center><p class="note">Fields with <span class="required">*</span> are required.</p></center>
    <br /><br />

	<?php echo $form->errorSummary($model); ?>

	<center><div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
</center>

	<center><div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div></center>

	<center><div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div></center>

<center>
	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
<br /><br />

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
    </center>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>