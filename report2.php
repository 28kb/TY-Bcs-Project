
<html>
<head>
	<?php require 'head.php';?>	
	<title></title>
</head>
<body>
	
<?php require 'menu.php';?>
<input type="button" onclick="print()" name="" value="Print">
<?php
$q=pg_query("select count(*) as totalvendors from tblvendors");
$r=pg_fetch_array($q);
echo "Total No . Of vendors=".$r['totalvendors'];
?>
<table class="table">
	<Tr>
		<Th>
			Vendor name
		</Th>
		<th>
			Contact
		</th>
		<th>
			Quantity
		</th>
	
	</Tr>

<?php
$q=pg_query("select * from tblvendors");
while($r=pg_fetch_array($q)){
?>
<tr>
	<tD><?php echo $r['vname'];?></tD>
	<tD><?php echo $r['vcont'];?></tD>
	<tD><?php echo $r['vqty'];?></tD>
</tr>
<?php
}
?>
</table>
<?php require 'footer.php';?>
</body>
</html>