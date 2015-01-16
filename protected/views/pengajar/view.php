<?php
/* @var $this PengajarController */
/* @var $model Pengajar */

$this->breadcrumbs=array(
	'Pengajars'=>array('index'),
	$model->id_pengajar,
);

$this->menu=array(
	array('label'=>'List Pengajar', 'url'=>array('index')),
	array('label'=>'Create Pengajar', 'url'=>array('create')),
	array('label'=>'Update Pengajar', 'url'=>array('update', 'id'=>$model->id_pengajar)),
	array('label'=>'Delete Pengajar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengajar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengajar', 'url'=>array('admin')),
);
?>

<h1>View Pengajar #<?php echo $model->id_pengajar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengajar',
		'nama',
		'nip',
		'pangkat',
		'tgl_lahir',
		'instansi',
		'institusi',
		'agama',
	),
)); ?>
