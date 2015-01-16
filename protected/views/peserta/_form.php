<?php
/* @var $this PesertaController */
/* @var $model Peserta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peserta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pangkat'); ?>
		<?php echo $form->textField($model,'pangkat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pangkat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instansi'); ?>
		<?php echo $form->textField($model,'instansi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'instansi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institusi'); ?>
		<?php echo $form->textField($model,'institusi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'institusi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->textField($model,'agama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'agama'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->