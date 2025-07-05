<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php 
  $active ='need';
  include('head.php') ?>
  <!-- Bootstrap CSS & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
  .info-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 20px 18px;
    box-shadow: 0 0 10px rgba(0,0,0,0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    min-height: 250px;
  }

  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.1);
  }

  .info-icon {
    font-size: 2rem;
    color: #dc3545;
    margin-bottom: 10px;
  }

  .info-card h5 {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 12px;
  }

  .info-card p,
  .info-card li {
    font-size: 0.95rem;
    margin-bottom: 6px;
  }

  .info-card ul {
    padding-left: 18px;
  }
</style>

<div class="container py-4">
  <div class="row g-3">

    <!-- Card 1: Emergency Contacts -->
    <div class="col-md-4">
      <div class="info-card text-center">
        <i class="bi bi-telephone-forward info-icon"></i>
        <h5>Emergency Contacts</h5>
        <p><strong>Blood Bank:</strong><br>+1 (555) 911-BLOOD</p>
        <p><strong>City Hospital:</strong><br>+1 (555) 123-4567</p>
        <p><strong>Regional Center:</strong><br>+1 (555) 987-6543</p>
      </div>
    </div>

    <!-- Card 2: Processing Times -->
    <div class="col-md-4">
      <div class="info-card text-center">
        <i class="bi bi-stopwatch-fill info-icon"></i>
        <h5>Processing Times</h5>
        <p><strong>Emergency:</strong> 0–2 hrs</p>
        <p><strong>Urgent:</strong> 2–24 hrs</p>
        <p><strong>Routine:</strong> 1–7 days</p>
      </div>
    </div>

    <!-- Card 3: Important Notes -->
    <div class="col-md-4">
      <div class="info-card text-start">
        <div class="text-center">
          <i class="bi bi-exclamation-circle-fill info-icon"></i>
          <h5>Important Notes</h5>
        </div>
        <ul class="mb-0">
          <li>Requests are verified with hospitals</li>
          <li>Emergency cases get top priority</li>
          <li>You'll get phone/email updates</li>
          <li>Compatibility checked before match</li>
        </ul>
      </div>
    </div>

  </div>
</div>

  

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">

  <div class="row">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">Need Blood</h1>

        </div>
  </div>
  <form name="needblood" action="" method="post">
  <div class="row">
  <div class="col-lg-4 mb-4">
  <div class="font-italic">Blood Group<span style="color:red">*</span></div>
  <div><select name="blood" class="form-control" required>
    <option value=""selected disabled>Select</option>
    <?php
      include 'conn.php';
      $sql= "select * from blood";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    while($row=mysqli_fetch_assoc($result)){
     ?>
     <option value="<?php echo $row['blood_group']; ?>"><?php echo $row['blood_group']; ?></option>

    <?php } ?>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Reason, why do you need blood?<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
  <div>
    <input type="submit" name="search" class="btn btn-danger text-white" value="Search" style="cursor:pointer">
  </div>
</div>


</div><div class="row">
<?php if(isset($_POST['search'])){

$bg = trim($_POST['blood']);
$sql = "SELECT * FROM donor_details WHERE blood = '$bg'";



  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    if(mysqli_num_rows($result)>0)   {
    while($row = mysqli_fetch_assoc($result)) {
      ?>

      <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
      <div class="card" style="width:300px">
          <img class="card-img-top" src="i3.png" alt="Card image" style="width:100%;height:300px">
          <div class="card-body">
     <h3 class="card-title"><?php echo $row['fullname']; ?></h3>
<p class="card-text">

  <b>Blood Group : </b> <b><?php echo $row['blood']; ?></b><br>


  <b>Mobile No. : </b> <?php echo $row['mobileno']; ?><br>
  <b>Gender : </b> <?php echo $row['gender']; ?><br>
  <b>Age : </b> <?php echo $row['age']; ?><br>
  <b>Address : </b> <?php echo $row['address']; ?><br>
</p>


          </div>
        </div>
  </div>

  <?php
    }
  }
    else
    {

        echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';

    }
} ?>
</div>
</div>
</div>
 <footer class="footer bg-dark text-white pt-5 pb-4">
  <div class="container">
    <div class="row text-md-start text-center">
      
      <!-- Column 1: Logo + About -->
      <div class="col-md-3 mb-4">
        <h5 class="fw-bold">
          <i class="bi bi-heart text-danger me-1"></i> Blood Bank
        </h5>
        <p class="small">Saving lives through efficient blood donation management and connecting donors with those in need.</p>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Quick Links</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">About Us</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Donate Blood</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Request Blood</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block">Contact</a></li>
        </ul>
      </div>

      <!-- Column 3: Services -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Services</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Donor Management</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Blood Inventory</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Statistics</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block">Request Tracking</a></li>
        </ul>
      </div>

      <!-- Column 4: Contact Info -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Contact Info</h6>
        <ul class="list-unstyled small">
          <li class="mb-2"><i class="bi bi-telephone text-danger me-2"></i> +91 6389076788</li>
          <li class="mb-2"><i class="bi bi-envelope text-danger me-2"></i> Bloodbank@gmail.com</li>
          <li><i class="bi bi-geo-alt text-danger me-2"></i> 12, New Medical Center, Pondy</li>
        </ul>
      </div>
      
    </div>

    <!-- Footer Bottom Line -->
    <hr class="border-light">
    <div class="text-center small">
      COPYRIGHT © 2025 Blood Bank & Donation Management - ALL RIGHTS RESERVED
    </div>
  </div>
</footer>
</div>
</body>

</html>
