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
$active ='donate';
 include('head.php') ?>
 <!-- Include Bootstrap & Bootstrap Icons in your <head> if not already -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
  .hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 12px;
  }

  .hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }
</style>

<div class="container py-5">
  <div class="row align-items-center">
    
    <!-- Left Side: Illustration -->
    <div class="col-lg-6 text-center mb-4 mb-lg-0">
      <img src="blo.jpg" alt="Blood Donation Illustration" class="img-fluid" style="max-height: 430px;">
    </div>

    <!-- Right Side: Hoverable Cards -->
    <div class="col-lg-6">
      
      <!-- Eligibility Requirements -->
      <div class="card hover-card mb-4 p-4 shadow-sm">
        <h5 class="fw-bold mb-3">
          <i class="bi bi-heart-fill text-danger me-2"></i> Eligibility Requirements
        </h5>
        <ul class="mb-0">
          <li>Age 17–65 years (16 with parental consent)</li>
          <li>Weight at least 110 pounds</li>
          <li>In good general health</li>
          <li>No recent tattoos/piercings (within 12 months)</li>
          <li>No recent travel to restricted countries</li>
          <li>Not pregnant or nursing</li>
        </ul>
      </div>

      <!-- What to Expect -->
      <div class="card hover-card p-4 shadow-sm">
        <h5 class="fw-bold mb-3">
          <i class="bi bi-heart-fill text-danger me-2"></i> What to Expect
        </h5>
        <ul class="mb-0">
          <li><b>Before Donation:</b> Health screening, registration, mini-physical</li>
          <li><b>During Donation:</b> 8–10 minutes of blood collection</li>
          <li><b>After Donation:</b> Rest and refreshments for 10–15 minutes</li>
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
        <h1 class="mt-4 mb-3">Donate Blood </h1>
      </div>
</div>
<form name="donor" action="savedata.php" method="post">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id</div>
<div><input type="email" name="emailid" class="form-control"></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Age<span style="color:red">*</span></div>
<div><input type="text" name="age" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
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
   <option value="<?php echo trim($row['blood_group']); ?>"><?php echo $row['blood_group']; ?></option>


  <?php } ?>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Address<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div>
<div class="row">
  <div class="col-lg-4 mb-4">
<div>
  <input type="submit" name="submit" class="btn btn-danger text-white" value="Register as a Donur" style="cursor:pointer">
</div>

  </div>
</div>
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
</body>
</html>
