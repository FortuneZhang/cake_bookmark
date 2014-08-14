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
				<?php echo $bookmark.id ?>
			</td>
			<td>
				<?php echo $bookmark.host ?>
			</td>
			<td>
				<?php echo $bookmark.url ?>
			</td>
			<td>
				<?php echo $bookmark.description ?>
			</td>
			<td>
				<?php echo $bookmark.need_login ?>
			</td>
			<td>
				<?php echo $bookmark.like_count ?>
			</td>
			<td>
				<?php echo $bookmark.scan_count ?>
			</td>

		</tr>
	<<?php endforeach ?>	
</table>