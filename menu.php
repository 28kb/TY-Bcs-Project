<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SK Garage</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <?php
        
        if($_SESSION['adid']==null){
          ?>
        <a class="nav-link" href="register.php">New Admin</a>
        <a class="nav-link" href="login.php">Admin-Login</a>
        <?php
        }
        else{

        ?>
       
         <a class="nav-link" href="addcust.php">Add Customer</a>
        <a class="nav-link" href="employee.php">Team</a>
        <a class="nav-link" href="modification.php">Modification</a>
        <a class="nav-link" href="service.php">Services</a>
        <a class="nav-link" href="bill.php">Accounting</a>
        <a class="nav-link" href="vendor.php">Vendors</a>
        <a class="nav-link" href="package.php">Package</a>
        
        <a align="right" class="nav-link" href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>


      </div>

        <?php
      }
      ?>
       
       
      </div>
    </div>
  </div>
</nav>
