<?php 
function bpp_admin_html() { ?>
<div class="wrap">
	<h2>Buffalo Photo Portfolio Options</h2>
	<h3>Social Media</h3>
	<form method="post" action="buffalo-options.php" novalidate="novalidate">
	<table class="wp-list-table widefat fixed">
		<thead>
			<tr>
				<th class="bpp-options-th">Option Name</th>
				<th class="bpp-options-th table-center">Display</th>
				<th class="bpp-options-th table-center">Count</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Images</th>
				<td class="table-center"><input type="checkbox"></td>
				<td class="table-center"><input type="checkbox"></td>
			</tr>
			<tr class="alternate">
				<th>Facebook</th>
				<td class="table-center"><input type="checkbox"></td>
				<td class="table-center"><input type="checkbox"></td>
			</tr>
			<tr>
				<th>Twitter</th>
				<td class="table-center"><input type="checkbox"></td>
				<td class="table-center"><input type="checkbox"></td>
			</tr>
			<tr class="alternate">
				<th>LinkedIn</th>
				<td class="table-center"><input type="checkbox"></td>
				<td class="table-center"><input type="checkbox"></td>
			</tr>
		</tbody>
	</table>
	</form>
</div>
<?php } ?>