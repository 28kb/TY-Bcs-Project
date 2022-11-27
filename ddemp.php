<!DOCTYPE html>
<html>
<head>
  <?php include 'head.php';?>
  <title></title>
</head>
<body>
<?php include 'menu.php';?>


<center><a href="addemp.php">
<input type="button" class="btn btn-warning" name="btnsave" value="New Employee"></a></center>
<table>
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
</table>
<?php
$q=pg_query("select * from tblemp;");
while ($r=pg_fetch_array($q)) {
  ?>
  


<table class="table">
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $r['ename'];?></th>
      <td><?php echo $r['econ'];?></td>
      <td><?php echo $r['ejoindt'];?></td>
      <td><?php echo $r['esal'];?></td>
    </tr>
    
  </tbody>
</table>
<?php } ?>
</body>
</html>

