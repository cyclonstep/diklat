<?php
/* @var $this PelatihanController */
/* @var $model Pelatihan */

$this->breadcrumbs=array(
	'Pelatihans'=>array('index'),
	$model->id_pelatihan=>array('view','id'=>$model->id_pelatihan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pelatihan', 'url'=>array('index')),
	array('label'=>'Create Pelatihan', 'url'=>array('create')),
	array('label'=>'View Pelatihan', 'url'=>array('view', 'id'=>$model->id_pelatihan)),
	array('label'=>'Manage Pelatihan', 'url'=>array('admin')),
);
?>

<h1>Update Pelatihan <?php echo $model->id_pelatihan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>