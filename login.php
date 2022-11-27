<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<div class="col-md-6">
	
</div>
	<title></title>
</head>
<body>
	
		<?php	
		if(isset($_POST["btnlogin"])){
			extract($_POST);
			$q=pg_query("select * from tbladmin where ademail='$txtemail' and adpass='$txtpass'");
			if(pg_num_rows($q)>0)
			{
				$_SESSION['email']=$txtemail;
				$q1=pg_query("select * from tbladmin where ademail='".$_SESSION['email']."'");

				$r1=pg_fetch_array($q1);
				$_SESSION['adid']=$r1['adid'];
				
				header("location:welcome.php");
			}
			else{
				?>
				<script type="text/javascript">
					alert("Invalid Credentials");
				</script>
				<?php
			}

		}
	?>
	<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<td>
				Login Id
			</td>
			<td>
				<input type="text" required  pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" name="txtemail" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" required name="txtpass"  class="form-control">
			</td>
		</tr>
		
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-success" name="btnlogin" value="Sign In">
			</Td>
		</tr>
	</table>
</form>
</div>
<div class="col-md-6">
	<img src="proimages/a1.jpeg" width="100%">
	</div>
</div>
<?php include 'footer.php'?>
</body>
</html>