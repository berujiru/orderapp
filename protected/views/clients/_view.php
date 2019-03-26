<?php
/* @var $this ClientsController */
/* @var $data Clients */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->clientid), array('view', 'id'=>$data->clientid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientname')); ?>:</b>
	<?php echo CHtml::encode($data->clientname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientaddress')); ?>:</b>
	<?php echo CHtml::encode($data->clientaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactnumber')); ?>:</b>
	<?php echo CHtml::encode($data->contactnumber); ?>
	<br />


</div>