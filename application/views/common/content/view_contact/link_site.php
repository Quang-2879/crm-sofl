<tr>
	<td class="text-right">Link website</td>
	<td>
		<?php
			foreach ($link_site as $key => $value) {
				if ($value['id'] == $rows['link_id']) {
					echo '<a style="color:#0d6078" target="_blank" href="'.$value['url'].'">link landingpage</a>';
					break;
				}
			}
		?>
	</td>
</tr>
