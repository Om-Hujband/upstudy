<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
</head>
<body>
	<table id="customerTable" class="display" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Email Id</th>
				<th>Username</th>
				<th>User Password</th>
			</tr>
		</thead>
	</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#customerTable').dataTable({
			"processing":true,
			"ajax": "fetch_registration.php",
			"columns":[
					{data:'email_id'},
					{data:'username'},
					{data: 'user_pass'}
				]			
		})
	})
</script>
</body>
</html>