<?php
/* @var $this TblStatusPelatihanController */
/* @var $model TblStatusPelatihan */

$this->breadcrumbs=array(
	'Tbl Status Pelatihans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblStatusPelatihan', 'url'=>array('index')),
	array('label'=>'Manage TblStatusPelatihan', 'url'=>array('admin')),
);
?>

<h1>Create TblStatusPelatihan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>