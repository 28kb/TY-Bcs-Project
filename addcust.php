<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tblcust(custname,custcon,carno,carcat,carclr,carcom,pkgid) values ('$txtcustname','$txtcustcon','$txtcarno','$txtcartype','$txtcarclr','$txtcarcom','$cmbpackage')");
			
		}
	?>

	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
		<form method="post">
		<table class="table">
			<tr>
				<td>
					Customer Name
				</td>
				<td>
					<input type="text" name="txtcustname" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					 Contact
				</td>
				<td>
					<input type="text" name="txtcustcon" class="form-control">
				</td>
			</tr>
			
			<tr>
				<td>
					Car No
				</td>
				<td>
					<input type="text" name="txtcarno"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Car Type
				</td>
				<td>
					<input type="text" name="txtcartype"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Car Colour
				</td>
				<td>
					<input type="text" name="txtcarclr"  class="form-control">
				</td>
			</tr>

			<tr>
				<td>
					Car Category
				</td>
				<td>
					<input type="text" name="txtcarcat"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Car Company
				</td>
				<td>
					<input type="text" name="txtcarcom"  class="form-control">
				</td>
			</tr>
				<tr>
					<td>
						Choose Package
					</td>
					<td>
				
					<select name="cmbpackage" class="form-control">
						<?php
					$q=pg_query("select * from tblanulpkg");
					while ($r=pg_fetch_array($q)) {
						?>
							<option value="<?php echo $r['pkgid'];?>"><?php echo $r['pkgname'];?></option>
						<?php
						}	
					?>
					</select>

					
				
			</td>
		</tr>

			<tr>
				<Td colspan=2 align="center">
					<input type="submit" class="btn btn-success" name="btnsave" value="Register">
				</Td>
			</tr>
	</table>
</form>
</div>
</div>



<?php include 'footer.php'?>
</body>
</html>

