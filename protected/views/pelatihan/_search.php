<?php
/* @var $this PelatihanController */
/* @var $model Pelatihan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pelatihan'); ?>
		<?php echo $form->textField($model,'id_pelatihan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pelatihan'); ?>
		<?php echo $form->textField($model,'nama_pelatihan',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu'); ?>
		<?php echo $form->textField($model,'waktu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif'); ?>
		<?php echo $form->textField($model,'tarif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->