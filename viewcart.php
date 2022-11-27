<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>

	<table class="table">
		<Tr>
			<Td>
				Product Name
			</Td>
			<td>
				Product Price
			</td>
			<td>
				Quantity
			</td>
			<td>
				Total
			</td>
		</Tr>

<?php

$q=pg_query("select * from tblcart,tblproduct where tblproduct.pid=tblcart.pid and tblcart.uid='".$_SESSION['uid']."'");
while ($r=pg_fetch_array($q)) {
	?>
	<Tr>
			<Td>
				<?php
			
	echo $r['pname'];?>
			</Td>
			<td>
				<?php
	echo $r['pdprice'];?>
			</td>
			<td>
				<?php
	echo $r['qty'];?>
			</td>
			<td>
				<?php $total=$r['pdprice']*$r['qty']; $ftotal+=$total;
				echo $total;?>
			</td>
		
			<Td>
				<a href="cancel.php?cartid=<?php echo $r['cartid'];?>"> Cancel</a>
			</Td>
		</tr>
	
<?php	
}
?>
<tR>
	<td>
Final Total=₹<?php echo $ftotal;?>/-
</td>
</tR>
</table>
<?php include 'footer.php';?>
</body>
</html>