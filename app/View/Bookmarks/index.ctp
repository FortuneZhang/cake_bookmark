<table>
	<thead>
		<th>id</th>
		<th>host</th>
		<th>url</th>
		<th>description</th>
		<th>need_login</th>
		<th>like_count</th>
		<th>scan_count</th>
	</thead>

	<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<?php echo $bookmark['Bookmark']['id'] ?>
			</td>
			<td>
				<?php echo $this->Html->link($bookmark['Bookmark']['host'], $bookmark['Bookmark']['host'], array('target' => '_blank', )) ?>
			</td>
			<td>
				<?php echo $this->Html->link($this->Text->truncate($bookmark['Bookmark']['url'], 64), $bookmark['Bookmark']['url'], array('target' => '_blank') ) ?>
			</td>
			<td>
				<?php echo $bookmark['Bookmark']['description'] ?>
			</td>
			<td>
				<?php echo $bookmark['Bookmark']['need_auth'] ?>
			</td>
			<td>
				<?php echo $bookmark['Bookmark']['like_count'] ?>
			</td>
			<td>
				<?php echo $bookmark['Bookmark']['scan_count'] ?>
			</td>

		</tr>
	<?php endforeach ?>	
</table>
<?php echo $this->Html->link('add', array('action' => 'add' ), array('class' => 'button')) ?>
<?php echo ' total:' . $count . ' ' ?>
