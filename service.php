<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>

<align="right">
<a href="addservice.php">
<input type="button" class="btn btn-warning" name="btnsave" value="New Service"></a></align>

<div class="row">
<?php
$q=pg_query("select * from tblservice");
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-3">
		<div class="card">
  <div class="card-body">
    <h5 class="card-title">Services</h5>
    <p class="card-text">
    	<table class="table" cellpadding="2" border="3" style="width:100%">
		<Tr>


<!-- this to  -->



<!-- this -->

			<td>
				 Name
			</td>
			<td>
				<?php
	echo $r['sname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				Description
			</td>
			<td>
				<?php
	echo $r['sdesc'];?></strike>
			</td>
		</Tr>
		<Tr>
			</Tr>
		<Tr>
			<td>
				Type
			</td>
			<td>
				<?php
	echo $r['stype'];?></strike>
			</td>
		</Tr>
			<td>
				Price
			</td>
			<td>
				<?php
	echo $r['sprice'];?>
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







<?php include 'footer.php';?>
</body>
</html>