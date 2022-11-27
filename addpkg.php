<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tblanulpkg(pkgname,pkgnos,pkgdesc,pkgprice) values ('$tpkgname','$tpkgnos','$tpkgdesc','$tpkgprice')");
		}
	?>

	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
		<form method="post">
		<table class="table">
			<tr>
				<td>
					Package Name
				</td>
				<td>
					<input type="text" name="tpkgname" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					 No. of service limits
				</td>
				<td>
					<input type="text" name="tpkgnos" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Price
				</td>
				<td>
					<input type="text" name="tpkgprice"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Description
				</td>
				<td>
					<input type="text" name="tpkgdesc"  class="form-control">
				</td>
			</tr>
			


			<tr>
				<Td colspan=2 align="center">
					<input type="submit" class="btn btn-danger" name="btnsave" value="Add Annual package">
				</Td>
			</tr>
	</table>
</form>
</div>
</div>



<?php include 'footer.php'?>
</body>
</html>

