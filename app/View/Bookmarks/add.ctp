<?php $this->html->script('UrlHelper', array('inline' => false))  ?>
<h1> Add Bookmark</h1>

<?php 
	echo $this->Form->create('Bookmark');
	echo $this->form->input('url', array('label' => '网址', 'onblur' => 'finish_input_url_then_update_host(this)'));
	echo $this->form->input('host', array('id' => 'host'));
	echo $this->form->input('description', array('label' => '描述'));
	echo $this->form->end('提交')

 ?>


<script type="text/javascript">
	function finish_input_url_then_update_host(me){
		var url = $(me).val();
		var link = Url.build_a(url);
		$('#host').val(link.host); 
	}


</script>