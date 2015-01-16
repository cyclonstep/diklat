<?php
/* @var $this TblGolController */
/* @var $model TblGol */

$this->breadcrumbs=array(
	'Tbl Gols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblGol', 'url'=>array('index')),
	array('label'=>'Manage TblGol', 'url'=>array('admin')),
);
?>

<h1>Create TblGol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>