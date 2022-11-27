<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>
<a href="addmodify.php">
<input type="button" class="btn btn-warning" name="btnsave" value="Add"></a>

<div class="row">
<?php
$q=pg_query("select * from tblmodfy;");
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-3">
		<div class="card">
  <div class="card-body">
    
    <p class="card-text"><table>
		<Tr>
			<td>
				 Name
			</td>
			<td>
				<?php
	echo $r['mname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				Category
			</td>
			<td>
				<?php
	echo $r['mcat'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Description
			</td>
			<td>
				<?php
	echo $r['mdesc'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Charges
			</td>
			<td>
				<?php
	echo $r['mprice'];?>
			</td>
		</Tr>


			<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-success" name="btnsave" value="Add">
			</Td>
		</tr>


	</table></p>
	</div>
</div>
	
</div>
<?php	
}
?>
</div>


<body>







<?php include 'footer.php';?>
</body>
</html>