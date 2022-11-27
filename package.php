<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>
<a href="addpkg.php">
<input type="button" class="btn btn-warning" name="btnsave" value="Add Category"></a>

<div class="row">
<?php
$q=pg_query("select * from tblanulpkg");
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-3">
		<div class="card">
  <div class="card-body">
    <h5 class="card-title">Annual Packages</h5>
    <p class="card-text"><table>
		<Tr>
			<td>
				 Name
			</td>
			<td>
				<?php
	echo $r['pkgname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				service limit
			</td>
			<td>
				<?php
	echo $r['pkgnos'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Price
			</td>
			<td>
				<?php
	echo $r['pkgprice'];?>
			</td>
		</Tr>


			


	</table></p>
	</div>
</div>
	
</div>
<?php	
}
?>
</div>


<body>



<div class="row">
<?php
$q=pg_query("select * from tblnrmlpkg");
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-3">
		<div class="card">
  <div class="card-body">
    <h5 class="card-title">Normal Packages</h5>
    <p class="card-text"><table>
		<Tr>
			<td>
				 Name
			</td>
			<td>
				<?php
	echo $r['npkgname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				Package Description
			</td>
			<td>
				<?php
	echo $r['npkgdesc'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Price
			</td>
			<td>
				<?php
	echo $r['npkgprice'];?>
			</td>
		</Tr>

	</table></p>
	</div>
</div>
	
</div>
<?php	
}
?>
</div>



<?php include 'footer.php';?>
</body>
</html>