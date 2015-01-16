<?php
/* @var $this TblStatusPelatihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Status Pelatihans',
);

$this->menu=array(
	array('label'=>'Create TblStatusPelatihan', 'url'=>array('create')),
	array('label'=>'Manage TblStatusPelatihan', 'url'=>array('admin')),
);
?>

<h1>Tbl Status Pelatihans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
