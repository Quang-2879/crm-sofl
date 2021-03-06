<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h3 class="text-center marginbottom20"> Báo cáo tỷ lệ theo từng tiếng và sale từ ngày <?php echo date('d-m-Y', $startDate); ?> đến hết ngày <?php echo date('d-m-Y', $endDate); ?></h3>
	</div
</div>

<form action="#" method="GET" id="action_contact" class="form-inline">
	<?php $this->load->view('common/content/filter'); ?>
</form>

<?php foreach ($report as $key => $item) { ?>
	<div class="table-responsive">
		<table class="table table-bordered table-striped view_report">
			<thead>
				<tr>
					<th style="background-color: #2b669a"><?php echo $key?></th>

					<?php foreach ($item as $key_1 => $value_1) { ?>
						<th style="background-color: #1e5f24"><?php echo $key_1?></th>
					<?php } ?>
				</tr>
			</thead>

			<tbody>
				<?php
				$report_2 = array('L1', 'L2', 'L3', 'L5', 'L8', 'RE');
				foreach ($report_2 as $item_2) { ?>
					<tr>
						<td style="background-color: #43bcdf96"><?php echo $item_2 ?></td>
						<?php foreach ($item as $value_2) { ?>
							<td>
								<?php
									if ($item_2 == 'RE') {
										echo h_number_format($value_2[$item_2]);
									} else {
										echo $value_2[$item_2];
									}
								?>
							</td>
						<?php } ?>
					</tr>
				<?php }	?>

				<?php
				$report_3 = array(
					array('L5/L1', 'L5', 'L1', 30),
				);

				foreach ($report_3 as $values) {
					list($name, $tu_so, $mau_so, $limit) = $values;
					?>
					<tr>
						<td style="background-color: #279a9d;"> <?php echo $name; ?> </td>
						<?php foreach ($item as $value_3) { ?>
							<td <?php
							if ($value_3[$mau_so] != 0 && round(($value_3[$tu_so] / $value_3[$mau_so]) * 100) < $limit && $limit > 0) {
								echo 'style="background-color: #a71717;color: #fff;"';
							} else if ($value_3[$mau_so] != 0 && round(($value_3[$tu_so] / $value_3[$mau_so]) * 100) >= $limit && $limit > 0) {
								echo 'style="background-color: #0C812D;color: #fff;"';
							}
							?>>
								<?php
								echo ($value_3[$mau_so] != 0) ? round(($value_3[$tu_so] / $value_3[$mau_so]) * 100, 2) . '%' : 'NAN';
								?>
							</td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php } ?>
