<tr>
	<td class="text-right">  Trạng thái gọi </td>
	<td>
		<?php
		foreach ($customer_call_status as $key => $value) {
			if ($value['id'] == $rows['customer_care_call_id']) {
				echo $value['name'];
				break;
			}
		}
		?>
	</td>
</tr>
