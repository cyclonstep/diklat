<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'Hello',
);
?>
<h1>Hello World!</h1>
<h3><?php echo $time;?></h3>
<p><?php echo CHtml::link('Goodbye',array('message/goodbye')); ?></p> 