<?php
/* @var $this PelatihanController */
/* @var $model Pelatihan */

$this->breadcrumbs=array(
	'Pelatihans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelatihan', 'url'=>array('index')),
	array('label'=>'Manage Pelatihan', 'url'=>array('admin')),
);
?>

<h1>Create Pelatihan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>