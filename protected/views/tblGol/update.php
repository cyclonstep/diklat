<?php
/* @var $this TblGolController */
/* @var $model TblGol */

$this->breadcrumbs=array(
	'Tbl Gols'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblGol', 'url'=>array('index')),
	array('label'=>'Create TblGol', 'url'=>array('create')),
	array('label'=>'View TblGol', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblGol', 'url'=>array('admin')),
);
?>

<h1>Update TblGol <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>