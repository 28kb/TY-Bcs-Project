<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tblvendors(vname,vdesc,vqty,vcont) values ('$txtname','$txtdesc','$txtqty','$txtcont)");
			
		}
	?>

	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
		<form method="post">
		<table class="table">
			<tr>
				<td>
					vendor Name
				</td>
				<td>
					<input type="text" name="txtname" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					 Description
				</td>
				<td>
					<input type="text" name="txtdesc" class="form-control">
				</td>
			</tr>
			
			<tr>
				<td>
					Quantity
				</td>
				<td>
					<input type="text" name="txtqty"  class="form-control">
				</td>
			</tr>
			
		

			<tr>
				<Td colspan=2 align="center">
					<input type="submit" class="btn btn-success" name="btnsave" value="Submit">
				</Td>
			</tr>
	</table>
</form>
</div>
</div>



<?php include 'footer.php'?>
</body>
</html>

