<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>
<input type="button" onclick="print()" value="Print">



<form method="post">
<table class="table">
	<tr>
		
					<td>
						Choose Customer
					</td>
					<td>
				
					<select name="cmbpackage" class="form-control">
						<?php
					$q=pg_query("select * from tblcust");
					while ($r=pg_fetch_array($q)) {
						?>
							<option value="<?php echo $r['custid'];?>"><?php echo $r['custname'];?></option>
						<?php
						}	
					?>
					</select>

					
				
			</td>
		</tr>
		<tr>
			<Td>
				Additional Charges
			</Td>
			<td>
				<input type="text" name="txtcharges">
			</td>
		</tr>

		<tr>
			<Td>
				Description
			</Td>
			<td>
				<textarea name="txtdesc"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btnadd" value="Add">
			</td>
		</tr>

</table>
</form>

<?php
if(isset($_POST['btnadd'])){
	extract($_POST);
	pg_query("insert into tblbill(cid,ac,pdesc)values('$cmbpackage','$txtcharges','$txtdesc')");
	
	}


?>
<?php include 'footer.php';?>
</body>
</html>