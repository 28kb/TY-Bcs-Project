
<html>
<head>
	<?php require 'head.php';?>	
	<title></title>
</head>
<body>
	
<?php require 'menu.php';?>
<input type="button" onclick="print()" name="" value="Print">
<?php
$q=pg_query("select count(*) as totalcustomers from tblcust");
$r=pg_fetch_array($q);
echo "Total No . Of Users=".$r['totalcustomers'];
?>
<table class="table">
	<Tr>
		<Th>
			customer name
		</Th>
		<th>
			Contact
		</th>
		<th>
			Car number
		</th>
	
	</Tr>

<?php
$q=pg_query("select * from tblcust");
while($r=pg_fetch_array($q)){
?>
<tr>
	<tD><?php echo $r['custname'];?></tD>
	<tD><?php echo $r['custcon'];?></tD>
	<tD><?php echo $r['carno'];?></tD>
</tr>
<?php
}
?>
</table>
<?php require 'footer.php';?>
</body>
</html>