<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'orderid'); ?>
		<?php echo $form->textField($model,'orderid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tablenum'); ?>
		<?php echo $form->textField($model,'tablenum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderqty'); ?>
		<?php echo $form->textField($model,'orderqty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderprice'); ?>
		<?php echo $form->textField($model,'orderprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalprice'); ?>
		<?php echo $form->textField($model,'totalprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderdate'); ?>
		<?php echo $form->textField($model,'orderdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accid'); ?>
		<?php echo $form->textField($model,'accid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderstatus'); ?>
		<?php echo $form->textField($model,'orderstatus',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientid'); ?>
		<?php echo $form->textField($model,'clientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->