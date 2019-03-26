<?php
/* @var $this ItemlistController */
/* @var $data Itemlist */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemlistid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->itemlistid), array('view', 'id'=>$data->itemlistid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemno')); ?>:</b>
	<?php echo CHtml::encode($data->itemno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemname')); ?>:</b>
	<?php echo CHtml::encode($data->itemname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retailprice')); ?>:</b>
	<?php echo CHtml::encode($data->retailprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />


</div>