<?php
/* @var $this ItemlistController */
/* @var $model Itemlist */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'itemlistid'); ?>
		<?php echo $form->textField($model,'itemlistid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemno'); ?>
		<?php echo $form->textField($model,'itemno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemname'); ?>
		<?php echo $form->textField($model,'itemname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retailprice'); ?>
		<?php echo $form->textField($model,'retailprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
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