<!DOCTYPE html>
<html>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>


<center><a href="addemp.php">
<input type="button" class="btn btn-warning" name="btnsave" value="New Employee"></a></center>


<?php
$q=pg_query("select * from tblemp;");
while ($r=pg_fetch_array($q)) {
	?>
	




	<!-- <table class="table" cellpadding="2" border="3" style="width:100%">
		

		<tr>

			<td>
				 Name
			</td>
			<td><?php	echo $r['ename'];?></td>

			<td>
				 contact
			</td>

			<td><?php	echo $r['econ'];?></td>
			<td>
				 emp join date
			</td>

			<td><?php	echo $r['ejoindt'];?></td>
			<td>
				 emp sal
			</td>

			<td><?php	echo $r['esal'];?></td>
			

		</tr>
	

			</table> -->



			<!-- this  -->

			<table>
  <tr>
    <th>emp name</th>
    <th>emp con no</th>
    <th>emp address</th>
    <th>emp salary</th>
  </tr>
  <tr>
    <td><?php	echo $r['ename'];?></td>
    <td><?php	echo $r['econ'];?></td>
    <td><?php	echo $r['ejoindt'];?></td>
    <td><?php	echo $r['esal'];?></td>
  </tr>
  
</table>
			<!--  to this -->

<?php	
}
?>





</body>
</html>