<?php
/* @var $this TblStatusPelatihanController */
/* @var $model TblStatusPelatihan */

$this->breadcrumbs=array(
	'Tbl Status Pelatihans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblStatusPelatihan', 'url'=>array('index')),
	array('label'=>'Create TblStatusPelatihan', 'url'=>array('create')),
	array('label'=>'View TblStatusPelatihan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblStatusPelatihan', 'url'=>array('admin')),
);
?>

<h1>Update TblStatusPelatihan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>