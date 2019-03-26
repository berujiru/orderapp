<?php
/* @var $this ClientsController */
/* @var $model Clients */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clients-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clientname'); ?>
		<?php echo $form->textField($model,'clientname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'clientname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientaddress'); ?>
		<?php echo $form->textField($model,'clientaddress',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'clientaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactnumber'); ?>
		<?php echo $form->textField($model,'contactnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactnumber'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->