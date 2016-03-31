<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Log table</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
	$('#LogTable').DataTable();
} );
</script>

<table id="LogTable" class="display" cellspacing="0" width="100%" align="center">
		<thead>
			<tr>
				<th>Время</th>
				<th>Соц. сеть</th>
				<th>ссылка на профиль</th>
				<th>Имя</th>
				<th>Фамилия</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Время</th>
				<th>Соц. сеть</th>
				<th>ссылка на профиль</th>
				<th>Имя</th>
				<th>Фамилия</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>2011/01/25 - 15:23</td>
				<td>facebook</td>
				<td><a href="https://www.facebook.com/app_scoped_user_id/154971951508380/" target="_blank">ссылка</a></td>
				<td>Айти</td>
				<td>Трейд</td>
			</tr>
		</tbody>
	</table>
</body>
</html>