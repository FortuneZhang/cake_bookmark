<?php 
	echo $this->Form->create('Tag'); 
	echo $this->Form->input('name', array('label' => 'Name'));
	echo $this->Form->end('提交');
?>