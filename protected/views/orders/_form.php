<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orderid'); ?>
		<?php echo $form->textField($model,'orderid'); ?>
		<?php echo $form->error($model,'orderid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tablenum'); ?>
		<?php echo $form->textField($model,'tablenum'); ?>
		<?php echo $form->error($model,'tablenum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderqty'); ?>
		<?php echo $form->textField($model,'orderqty'); ?>
		<?php echo $form->error($model,'orderqty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderprice'); ?>
		<?php echo $form->textField($model,'orderprice'); ?>
		<?php echo $form->error($model,'orderprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalprice'); ?>
		<?php echo $form->textField($model,'totalprice'); ?>
		<?php echo $form->error($model,'totalprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderdate'); ?>
		<?php echo $form->textField($model,'orderdate'); ?>
		<?php echo $form->error($model,'orderdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accid'); ?>
		<?php echo $form->textField($model,'accid'); ?>
		<?php echo $form->error($model,'accid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderstatus'); ?>
		<?php echo $form->textField($model,'orderstatus',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'orderstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientid'); ?>
		<?php echo $form->textField($model,'clientid'); ?>
		<?php echo $form->error($model,'clientid'); ?>
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