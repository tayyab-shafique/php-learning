<?php
	require_once('system/file.php');
	$query = "select * from users";
	$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>fetch data from database</title>
</head>
<body class="bg-dark text-white">
	<div class="container mt-5">
		<div class="row mt-5">
			<div class="col card p-4">
				<table class="table table-bordered">
					<tr class="bg-dark text-light">
						<td>ID</td>
						<td>Name</td>
						<td>Email</td>
						<td>Password</td>
						<td>Phone No.</td>
					</tr>
					<tr class="bg-light">
						<?php
							while($data = mysqli_fetch_assoc($result))
							{
								?>
						<td><?php echo $data['id'] ?></td>
						<td><?php echo $data['name'] ?></td>
						<td><?php echo $data['email'] ?></td>
						<td><?php echo $data['password'] ?></td>
						<td><?php echo $data['phone'] ?></td>
					</tr>
								<?php
							}
						?>
					
				</table>
			</div>
		</div>
	</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>