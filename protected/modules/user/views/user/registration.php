<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registrasi");
$this->breadcrumbs=array(
	UserModule::t("Registrasi"),
);
?>

<h1><?php echo UserModule::t("Registrasi"); ?></h1>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>

<div class="form">
<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->textField($model,'username'); ?>
	<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordField($model,'verifyPassword'); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'email'); ?>
	<?php echo $form->textField($model,'email'); ?>
	<?php echo $form->error($model,'email'); ?>
	</div>
	</br>
	</br>
	<div class="row">
	<h2>Informasi Personal</h2>	
	</div>
	
<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {

			foreach($profileFields as $field) {
				if($field->position < 7) {
			?>
	<div class="row">
		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($field->widgetEdit($profile)) {
			echo $field->widgetEdit($profile);
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range),
				array('prompt'=>'= Pilih '.$field->title.' ='));
		} elseif ($field->field_type=="TEXT") {
			echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		 }
			?>
	
	<div class="row">
		<?php 
			echo $form->labelEX($profile,'gol');
			echo $form->dropDownList($profile,'gol',CHtml::ListData(TblGol::model()->findAll(),'tipe_gol','keterangan'),
				array('prompt'=>'= Pilih Pangkat/Golongan =','style'=>'width:200px;'));
			echo $form->error($profile,'gol');
		?>
	</div>
	
	<br>		
	<div class="row">	
		<h2>Informasi Pendidikan dan Instansi</h2>
	</div>
	
	<div class="row">
		<?php
			echo $form->labelEX($profile,'pendidikan');
			echo $form->dropDownList($profile,'pendidikan',CHtml::ListData(TblPend::model()->findAll(),'tingkat','tingkat'),
				array('prompt'=>'= Pilih Pendidikan Terakhir =','style'=>'width:200px;'));
			echo $form->error($profile,'pendidikan');
		?>
	</div>
			
		<?php 
		}
			foreach($profileFields as $field) {
				if($field->position > 8) {
			?>
	<div class="row">
		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($field->widgetEdit($profile)) {
			echo $field->widgetEdit($profile);
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range),
				array('prompt'=>'= Pilih '.$field->varname.' ='));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		 }
?>
	

	<?php if (UserModule::doCaptcha('registration')): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>
		
		<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
		<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
	</div>
	<?php endif; ?>
	
	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Register")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<?php endif; ?>
