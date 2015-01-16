<?php
/* @var $this PelatihanController */
/* @var $model Pelatihan */

$this->breadcrumbs=array(
	'Pelatihans'=>array('index'),
	$model->id_pelatihan,
);

$this->menu=array(
	array('label'=>'List Pelatihan', 'url'=>array('index')),
	array('label'=>'Create Pelatihan', 'url'=>array('create')),
	array('label'=>'Update Pelatihan', 'url'=>array('update', 'id'=>$model->id_pelatihan)),
	array('label'=>'Delete Pelatihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelatihan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelatihan', 'url'=>array('admin')),
);
?>

<h1>View Pelatihan #<?php echo $model->id_pelatihan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pelatihan',
		'nama',
		'waktu',
		'tarif',
	),
)); ?>
