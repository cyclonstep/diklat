<?php
/* @var $this PengajarController */
/* @var $model Pengajar */

$this->breadcrumbs=array(
	'Pengajars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengajar', 'url'=>array('index')),
	array('label'=>'Manage Pengajar', 'url'=>array('admin')),
);
?>

<h1>Create Pengajar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>