<?php
/* @var $this ItemlistController */
/* @var $model Itemlist */

$this->breadcrumbs=array(
	'Itemlists'=>array('index'),
	$model->itemlistid=>array('view','id'=>$model->itemlistid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Itemlist', 'url'=>array('index')),
	array('label'=>'Create Itemlist', 'url'=>array('create')),
	array('label'=>'View Itemlist', 'url'=>array('view', 'id'=>$model->itemlistid)),
	array('label'=>'Manage Itemlist', 'url'=>array('admin')),
);
?>

<h1>Update Itemlist <?php echo $model->itemlistid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>