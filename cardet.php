<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>



	<?php include 'menu.php'?>
<center><h1>Vehicle Registration</h1>

	<div class="row">
		<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<td>
				Number 
			</td>
			<td>
				<input type="text" name="vehno" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td>
				Type
			</td>
			<td>
				<input type="text" name="cartype" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Colour
			</td>
			<td>
				<input type="text" name="carcolor"  class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Company
			</td>
			<td>
				<input type="text" name="empaddr" class="form-control">
			</td>
		</tr>
		
		
		<tr>
			<td>
				Modification Category
			</td>
			<td>
				<input type="radio" name="modcat" checked value="mod">Modification
				<input type="radio" name="mocat" value="serv">Servicing
			</td>
		</tr>
		
		
		
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-danger" name="btnsave" value="Add My Car">
			</Td>
		</tr>
		

	</table>
</form>
</div>
</div>

</center>
</body>
</html>

