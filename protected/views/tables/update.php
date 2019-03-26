<?php
/* @var $this TablesController */
/* @var $model Tables */

$this->breadcrumbs=array(
	'Tables'=>array('index'),
	$model->tableid=>array('view','id'=>$model->tableid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tables', 'url'=>array('index')),
	array('label'=>'Create Tables', 'url'=>array('create')),
	array('label'=>'View Tables', 'url'=>array('view', 'id'=>$model->tableid)),
	array('label'=>'Manage Tables', 'url'=>array('admin')),
);
?>

<h1>Update Tables <?php echo $model->tableid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>