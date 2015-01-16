<?php
/* @var $this TblStatusPelatihanController */
/* @var $data TblStatusPelatihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelatihan_id')); ?>:</b>
	<?php echo CHtml::encode($data->pelatihan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_daftar')); ?>:</b>
	<?php echo CHtml::encode($data->status_daftar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->status_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_selesai); ?>
	<br />


</div>