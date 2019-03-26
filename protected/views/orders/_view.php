<?php
/* @var $this OrdersController */
/* @var $data Orders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orderid), array('view', 'id'=>$data->orderid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tablenum')); ?>:</b>
	<?php echo CHtml::encode($data->tablenum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderqty')); ?>:</b>
	<?php echo CHtml::encode($data->orderqty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderprice')); ?>:</b>
	<?php echo CHtml::encode($data->orderprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalprice')); ?>:</b>
	<?php echo CHtml::encode($data->totalprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderdate')); ?>:</b>
	<?php echo CHtml::encode($data->orderdate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('accid')); ?>:</b>
	<?php echo CHtml::encode($data->accid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderstatus')); ?>:</b>
	<?php echo CHtml::encode($data->orderstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientid')); ?>:</b>
	<?php echo CHtml::encode($data->clientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	*/ ?>

</div>