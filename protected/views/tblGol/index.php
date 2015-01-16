<?php
/* @var $this TblGolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Gols',
);

$this->menu=array(
	array('label'=>'Create TblGol', 'url'=>array('create')),
	array('label'=>'Manage TblGol', 'url'=>array('admin')),
);
?>

<h1>Tbl Gols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
