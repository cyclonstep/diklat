<ul class="actions">
<?php 
if(UserModule::isAdmin()) {
?>
<li><?php echo CHtml::link(UserModule::t('Manage User'),array('/user/admin')); ?></li>
<li><?php echo CHtml::link('Manage Pelatihan',array('/pelatihan/admin'));?></li>
<li><?php echo CHtml::link('Manage Pelatihan yang berjalan',array('/tblStatusPelatihan/admin'));?></li>
<li><?php echo CHtml::link('Manage Hak Akses',array('/rights/'));?></li>
<?php 
} else {
?>
<li><?php echo CHtml::link(UserModule::t('List User'),array('/user')); ?></li>
<?php
}
?>
<li><?php echo CHtml::link(UserModule::t('Profile'),array('/user/profile')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Edit'),array('edit')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Change password'),array('changepassword')); ?></li>
<li><?php echo CHtml::link(UserModule::t('Logout'),array('/user/logout')); ?></li>
</ul>