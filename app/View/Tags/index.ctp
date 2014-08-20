<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
	</tr>

<?php foreach($tags as $tag):?>
	<tr>
		<td><?php echo $tag['Tag']['id'] ?></td>
		<td><?php echo $tag['Tag']['name'] ?></td>
	</tr>
<?php endforeach; ?>
</table>

<?php echo $this->Html->link('Add', array('controller' => 'Tags', 'action' => 'add')) ?>