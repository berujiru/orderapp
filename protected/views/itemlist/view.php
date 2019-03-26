<?php
/* @var $this ItemlistController */
/* @var $model Itemlist */

$this->breadcrumbs=array(
	'Itemlists'=>array('index'),
	$model->itemlistid,
);

$this->menu=array(
	array('label'=>'List Itemlist', 'url'=>array('index')),
	array('label'=>'Create Itemlist', 'url'=>array('create')),
	array('label'=>'Update Itemlist', 'url'=>array('update', 'id'=>$model->itemlistid)),
	array('label'=>'Delete Itemlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->itemlistid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Itemlist', 'url'=>array('admin')),
);
?>

<h1>View Itemlist #<?php echo $model->itemlistid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'itemlistid',
		'itemno',
		'itemname',
		'retailprice',
		'qty',
		'type',
	),
)); ?>
