<?php
/* @var $this PelatihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelatihan',
);

$this->menu=array(
	array('label'=>'Create Pelatihan', 'url'=>array('create')),
	array('label'=>'Manage Pelatihan', 'url'=>array('admin')),
);
?>

<h1>Daftar Pelatihan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
