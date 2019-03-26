<?php
/* @var $this ItemlistController */
/* @var $model Itemlist */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'itemlist-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'itemno'); ?>
		<?php echo $form->textField($model,'itemno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'itemno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemname'); ?>
		<?php echo $form->textField($model,'itemname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'itemname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retailprice'); ?>
		<?php echo $form->textField($model,'retailprice'); ?>
		<?php echo $form->error($model,'retailprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->