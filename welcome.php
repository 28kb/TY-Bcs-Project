<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>
<div class="row">
	<br>
	<br>
	<br>

<?php

$q=pg_query("select * from tblcustomer");
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-3">
		<div class="card">
  <img src="proimages/a2.jpeg" class="card-img-top" alt="Fissure in Sandstone"/>
  <div class="card-body">
    <h5 class="card-title">Product Details</h5>
    <p class="card-text"><table>
		<Tr>
			<td>
				Product Name
			</td>
			<td>

				<?php
			
	echo $r['pname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				Product Price
			</td>
			<td>
				<strike><?php
	echo $r['pprice'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Product Discount Price
			</td>
			<td>
				<?php
	echo $r['pdprice'];?>
			</td>
		</Tr>



	</table></p>
    <a href="viewdetails.php?id=<?php echo $r['pid'];?>" class="btn btn-primary">View Details</a>
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