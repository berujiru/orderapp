<?php
/* @var $this ItemlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Itemlists',
);

$this->menu=array(
	array('label'=>'Create Itemlist', 'url'=>array('create')),
	array('label'=>'Manage Itemlist', 'url'=>array('admin')),
);
?>

<h1>Itemlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
