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
	<?php print_r($bookmarks) ?>
	<?php foreach ($bookmarks as $bookmark): ?>
		<tr>
			<td>
				<?php echo $bookmark['Bookmark']['id'] ?>
			</td>
			<td>
				<?php echo $bookmark['Bookmark']['host'] ?>
			</td>
			<td>
				<?php echo $bookmark['Bookmark']['url'] ?>
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
	<<?php endforeach ?>	
</table>