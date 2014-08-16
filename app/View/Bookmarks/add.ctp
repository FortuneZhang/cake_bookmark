<?php $this->html->script('UrlHelper', array('inline' => false))  ?>
<h1> Add Bookmark</h1>

<form method="POST" action="<?php echo $this->html->url('/bookmark/save') ?>">
	<p>
		<?php echo $this->form->input('url', array('size' => '40', 'label' => '网址', 'onblur' => 'finish_input_url_then_update_host(this)')) ?>
	</p>
	<p>
		<?php echo $this->form->input('host', array('size' => '40 ', 'label' => 'Host', 'id' => 'host')) ?>
	</p>
	<p>
		<?php echo $this->form->input('description', array('label' => '描述')) ?>		
	</p>
	<p>
		<?php echo $this->form->submit('提交') ?>
	</p>
</form>

<script type="text/javascript">
	function finish_input_url_then_update_host(me){
		var url = $(me).val();
		var link = Url.build_a(url);
		$('#host').val(link.host); 
	}


</script>