<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tblservice(sname,stype,sdesc,sprice) values ('$tsname','$tstype','$tsdesc','$tsprice')");
		}
	?>

	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
		<form method="post">
		<table class="table">
			<tr>
				<td>
					Service Name
				</td>
				<td>
					<input type="text" name="tsname" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Service Type
				</td>
				<td>
					<input type="text" name="tstype" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Description
				</td>
				<td>
					<input type="text" name="tsdesc"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Price
				</td>
				<td>
					<input type="text" name="tsprice"  class="form-control">
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

