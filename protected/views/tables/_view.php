<?php
/* @var $this TablesController */
/* @var $data Tables */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tableid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tableid), array('view', 'id'=>$data->tableid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tablename')); ?>:</b>
	<?php echo CHtml::encode($data->tablename); ?>
	<br />


</div>