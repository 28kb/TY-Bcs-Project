<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>
</head>
<body>
	<?php if(isset($_POST["btnsave"]))
		{
			extract($_POST);
			pg_query("insert into tblemp(ename,econ,eemail,eaddr,egen,ejoindt,esal,eage) values ('$tename','$tecon','$teemail','$teaddr','$tegen','$tejoindt','$tesal','$teage')");
		}
	?>


	<?php include 'menu.php'?>
<center><h1>Employee Registration</h1></p>

	<div class="row">
		<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="tename" class="form-control">
			</td>
		</tr>
		
		<tr>
			<td>
				Contact
			</td>
			<td>
				<input type="text" name="tecon" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				E-mail
			</td>
			<td>
				<input type="text" name="teemail"  class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Address
			</td>
			<td>
				<input type="text" name="teaddr" class="form-control">
			</td>
		</tr>
		
		
		<tr>
			<td>
				Gender
			</td>
			<td>
				<input type="radio" name="tegen" checked value="Male">Male
				<input type="radio" name="tegen" value="Female">Female
			</td>
		</tr>
		<tr>
			<td>
				Joining Date
			</td>
			<td>
				<input type="date" name="tejoindt" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Salary
			</td>
			<td>
				<input type="text" name="tesal" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Age
			</td>
			<td>
				<input type="number" name="teage" class="form-control">
			</td>
		</tr>
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-success" name="btnsave" value="Register Employee">
			</Td>
		</tr>
		

	</table>
</form>
</div>
</div>

</center>
</body>

<body>





<form method="post" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td>
				Choose Category
			</td>
			<td>
				
					<select name="cmbcat" class="form-control">
						<?php
					$q=pg_query("select * from tblcategory");
					while ($r=pg_fetch_array($q)) {
						?>
							<option value="<?php echo $r['cid'];?>"><?php echo $r['catname'];?></option>
						<?php
						}	
					?>
					</select>

					
				
			</td>
		</tr>
		<tr>
			<td>
				Product Name
			</td>
			<td>
				<input type="text" name="txtpname" class="form-control">
			</td>
		</tr>

	
<?php include 'footer.php'?>

</html>

