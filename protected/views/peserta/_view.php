<?php
/* @var $this PesertaController */
/* @var $data Peserta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_peserta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_peserta), array('view', 'id'=>$data->id_peserta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pangkat')); ?>:</b>
	<?php echo CHtml::encode($data->pangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instansi')); ?>:</b>
	<?php echo CHtml::encode($data->instansi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institusi')); ?>:</b>
	<?php echo CHtml::encode($data->institusi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('agama')); ?>:</b>
	<?php echo CHtml::encode($data->agama); ?>
	<br />

	*/ ?>

</div>