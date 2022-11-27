<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php
		
		if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tbladmin(adname,ademail,adcon,adgen,adpass) values ('$txtadname','$txtademail','$txtadcon','$txtadgen','$txtadpass')");

		}
	?>
	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="txtadname" pattern="^[a-z]*$" required class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				E-mail
			</td>
			<td>
				<input type="text" name="txtademail" required class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Contact
			</td>
			<td>
				<input type="text" name="txtadcon"  class="form-control">
			</td>
		</tr>
		
		<tr>
			<td>
				Gender
			</td>
			<td>
				<input type="radio" name="txtadgen" checked value="Male">Male
				<input type="radio" name="txtadgen" value="Female">Female
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="txtadpass" class="form-control">
			</td>
		</tr>
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-success" name="btnsave" value="Register Me">
			</Td>
		</tr>
	</table>
</form>
</div>
<div class="col-md-6">
	<img src="proimages/b9.jpg" width="100%">
	</div>
</div>
<?php include 'footer.php'?>
</body>
</html>