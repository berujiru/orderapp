<?php
/* @var $this ItemlistController */
/* @var $model Itemlist */

$this->breadcrumbs=array(
	'Itemlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Itemlist', 'url'=>array('index')),
	array('label'=>'Manage Itemlist', 'url'=>array('admin')),
);
?>

<h1>Create Itemlist</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>