<?php
/* @var $this PelatihanController */
/* @var $data Pelatihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelatihan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pelatihan), array('view', 'id'=>$data->id_pelatihan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pelatihan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pelatihan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?>:</b>
	<?php echo CHtml::encode($data->waktu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif')); ?>:</b>
	<?php echo CHtml::encode($data->tarif); ?>
	<br />


</div>