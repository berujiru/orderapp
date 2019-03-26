<?php
/* @var $this TablesController */
/* @var $model Tables */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tableid'); ?>
		<?php echo $form->textField($model,'tableid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tablename'); ?>
		<?php echo $form->textField($model,'tablename',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->