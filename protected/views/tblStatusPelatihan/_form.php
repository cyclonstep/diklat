<?php
/* @var $this TblStatusPelatihanController */
/* @var $model TblStatusPelatihan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-status-pelatihan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pelatihan_id'); ?>
		<?php echo $form->textField($model,'pelatihan_id'); ?>
		<?php echo $form->error($model,'pelatihan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_daftar'); ?>
		<?php echo $form->dropDownList($model,'status_daftar',tblStatusPelatihan::getStatusDaftar(),
				array('prompt'=>'Pilih Status Daftar','style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'status_daftar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_selesai'); ?>
		<?php echo $form->dropDownList($model,'status_selesai',tblStatusPelatihan::getStatusSelesai(),
				array('prompt'=>'Pilih Status Selesai','style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'status_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'tgl_mulai',
				'htmlOptions' => array(
				'style'=>'width:190px;',         // textField size
				'maxlength' => '20',    // textField maxlength
				),
			));
		?>
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'tgl_selesai',
				'htmlOptions' => array(
				'style'=>'width:190px;',         // textField size
				'maxlength' => '20',    // textField maxlength
				),
			));
		?>
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
