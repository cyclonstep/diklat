<?php
/* @var $this PengajarController */
/* @var $model Pengajar */

$this->breadcrumbs=array(
	'Pengajars'=>array('index'),
	$model->id_pengajar=>array('view','id'=>$model->id_pengajar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengajar', 'url'=>array('index')),
	array('label'=>'Create Pengajar', 'url'=>array('create')),
	array('label'=>'View Pengajar', 'url'=>array('view', 'id'=>$model->id_pengajar)),
	array('label'=>'Manage Pengajar', 'url'=>array('admin')),
);
?>

<h1>Update Pengajar <?php echo $model->id_pengajar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>