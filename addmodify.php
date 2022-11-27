<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tblmodfy(mname,mcat,mdesc,mprice) values ('$tmname','$tmcat','$tmdesc','$tmprice')");
		}
	?>

	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
		<form method="post">
		<table class="table">
			<tr>
				<td>
					Modification Name
				</td>
				<td>
					<input type="text" name="tmname" class="form-control">
				</td>
			</tr>
			
			<tr>
				<td>
					Catagory
				</td>
				<td>
					<input type="text" name="tmcat"  class="form-control">
				</td>
			</tr>
			<tr>
			<tr>
				<td>
					Description
				</td>
				<td>
					<input type="text" name="tmdesc"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Price
				</td>
				<td>
					<input type="text" name="tmprice"  class="form-control">
				</td>
			</tr>
		
			<tr>
				<Td colspan=2 align="center">
					<input type="submit" class="btn btn-danger" name="btnsave" value="Add modification ">
				</Td>
			</tr>
	</table>
</form>
</div>
</div>



<?php include 'footer.php'?>
</body>
</html>

