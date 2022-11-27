<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title>ok</title>
</head>
<body>


<?php if(isset($_POST["btnsave"]))
		{
			extract($_POST);
			pg_query("insert into tblvendors(vname,vcont,vdesc,vqty) values ('$txtvname','$txtvcont','$txtvdesc','$txtvqty')");
		}
	?>


	<?php include 'menu.php'?>
<center><h1>Vendors</h1></p>

	<div class="row">
		<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="txtvname" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td>
				Contact
			</td>
			<td>
				<input type="text" name="txtvcont" class="form-control">
			</td>
		</tr>
		
	
		<tr>
			<td>
				Description
			</td>
			
			<td>
				<input type="text" name="txtvdesc" class="form-control">
			</td>
			
		</tr>
		
		
		
		<tr>
			<td>
				Quantity
			</td>
			<td>
				<input type="number" name="txtvqty" class="form-control">
			</td>
		</tr>
		
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-primary" name="btnsave" value="Add New Vendor">
			</Td>
		</tr>
		

	</table>
</form>
</div>
</div>

</center>
</body>
</html>

