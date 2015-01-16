<?php
/* @var $this TblGolController */
/* @var $model TblGol */

$this->breadcrumbs=array(
	'Tbl Gols'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblGol', 'url'=>array('index')),
	array('label'=>'Create TblGol', 'url'=>array('create')),
	array('label'=>'Update TblGol', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblGol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblGol', 'url'=>array('admin')),
);
?>

<h1>View TblGol #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipe_gol',
		'keterangan',
	),
)); ?>
