<?php
/* @var $this TblStatusPelatihanController */
/* @var $model TblStatusPelatihan */

$this->breadcrumbs=array(
	'Tbl Status Pelatihans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblStatusPelatihan', 'url'=>array('index')),
	array('label'=>'Create TblStatusPelatihan', 'url'=>array('create')),
	array('label'=>'Update TblStatusPelatihan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblStatusPelatihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblStatusPelatihan', 'url'=>array('admin')),
);
?>

<h1>View TblStatusPelatihan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pelatihan_id',
		'nama',
		'status_daftar',
		'status_selesai',
		'tgl_mulai',
		'tgl_selesai',
	),
)); ?>
