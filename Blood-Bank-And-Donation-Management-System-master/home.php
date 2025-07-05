<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blood Bank & Donor Management</title>
 
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
   <style>
body {
  background: linear-gradient(135deg, #b12f28, #ff4d4d);
  min-height: 100vh;
  margin: 0;
}


.hero-section {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: radial-gradient(circle at center, #ff4c4c 0%, #b70000 100%);
  padding: 4rem 1rem;
  color: white;
  position: relative;
  text-align: left;
  overflow: hidden;
}

/* Optional glowing soft effect */
.hero-section::before {
  content: '';
  position: absolute;
  top: -100px;
  left: -100px;
  width: 300px;
  height: 300px;
  background: rgba(255, 0, 0, 0.15);
  filter: blur(100px);
  z-index: 0;
}


.hero-content {
  position: relative;
  z-index: 2;
  max-width: 700px;
}

.hero-section h1 {
  font-size: 4.5rem;
  line-height: 1.2;
  font-weight: 700;
}

.hero-section h1 .highlight {
  color: #ffc2d4; /* Light pink */
}

.hero-section p {
  font-size: 1.25rem;
  margin: 1rem 0 2rem;
}

.hero-buttons .btn {
  margin-right: 1rem;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  border-radius: 8px;
}

.btn-white {
  background-color: #fff;
  color: #b70000;
  border: none;
}

.btn-outline-light-pink {
  border: 2px solid #ffc2d4;
  color: #ffc2d4;
  background: transparent;
}

.btn-outline-light-pink:hover {
  background-color: #ffc2d4;
  color: #b70000;
}


.glass-card {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-radius: 1.5rem;
  width: 100%;
  max-width: 600px;
}

.glass-button {
  background-color: rgba(255, 255, 255, 0.1);
  transition: 0.3s ease;
}

.glass-button:hover {
  background-color: rgba(255, 255, 255, 0.2);
  transform: translateY(-2px);
  cursor: pointer;
}

.custom-side-border {
  border-left: 4px solid transparent; /* Will be overridden by color class */
  border-radius: 10px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
  padding: 24px;
  text-align: center;
  height: 100%;
  transition: transform 0.3s;
}

.custom-side-border:hover {
  transform: translateY(-5px);
}

/* Color overrides for left border */
.custom-side-border.red {
  border-left-color: #dc3545; /* Bootstrap danger */
}

.custom-side-border.blue {
  border-left-color: #0d6efd; /* Bootstrap primary */
}

.custom-side-border.green {
  border-left-color: #198754; /* Bootstrap success */
}

.custom-side-border.purple {
  border-left-color: #6f42c1; /* Bootstrap purple */
}

.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 12px;
}
.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
}


h2.text-center {
  position: relative;
  display: inline-block;
  margin: 0 auto;
  padding-bottom: 10px;
}

h2.text-center::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 60px; /* length of underline */
  height: 3px;
  background-color: #FF0404; /* red */
  border-radius: 2px;
}
.about-heading {
  position: relative;
  display: inline-block;
  margin: 20px auto 30px; /* top, horizontal (auto), bottom */
  text-align: center;
  font-weight: bold;
  padding-bottom: 10px;
  color: #000;
}

/* Red underline */
.about-heading::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background-color: #FF0404;
  border-radius: 2px;
}

.custom-card {
  background: #fff;
  border-radius: 12px;
  padding: 30px 20px;
  text-align: center;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.06);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
}

.custom-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
}

.icon-circle {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 15px;
}

/* Colored background circles */
.bg-pink {
  background-color: #ffe6ea;
}

.bg-lightblue {
  background-color: #e6efff;
}

.bg-lightgreen {
  background-color: #e5f9ec;
}

.bg-lightpurple {
  background-color: #f0e8ff;
}

.bg-orange {
  background-color: #fff2e0;
}

.bg-green {
  background-color: #e6f4ec;
}

/* Custom purple color for icons */
.text-purple {
  color: #6f42c1;
}
.footer a {
  color: white !important;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer a:hover {
  color: #dc3545 !important; /* Red on hover */
}




   </style>

</head>

<body>
  <?php $active = "home"; include('head.php'); ?>


 <!-- Hero Section -->
  <section class="hero-section d-flex align-items-center text-white">
    
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-5">
      <div class="hero-text w-100">
        <h1 class="display-4 fw-bold" style="font-size: 4.5rem;">Save Lives<br>Through <br><span style="color:rgb(255, 212, 229);">Blood Donation</span></h1>
        <p class="bold" style="font-size: 1.30rem;">Your donation can save up to three lives. Join our<br> community of heroes and make a difference in someone's<br> life today.</p>
       <div class="bold" style="font-size: 1.89rem;">
  <a href="donate_blood.php" class="btn btn-light btn-lg text-danger fw-bold fs-7">Donate Now</a>
  <a href="request_blood.php" class="btn btn-light btn-lg text-danger fw-bold fs-7">Request Blood</a>
</div>

      </div>

      <!-- Glass Panel -->
      <div class="glass-card text-white px-4 py-5 rounded-4 shadow">
        <div class="text-center mb-4">
          <i class="bi bi-heart fs-1 text-white"></i>
          <h4 class="fw-bold mt-2">Online Blood Donation</h4>
          <p class="text-white-50">Management System</p>
        </div>
        <div class="row g-3">
          <div class="col-6">
            <div class="glass-button text-center p-3 rounded-3">
              <i class="bi bi-person fs-3"></i>
              <div class="fw-bold mt-2">Donor Management</div>
            </div>
          </div>
          <div class="col-6">
            <div class="glass-button text-center p-3 rounded-3">
              <i class="bi bi-activity fs-3"></i>
              <div class="fw-bold mt-2">Blood Tracking</div>
            </div>
          </div>
          <div class="col-6">
            <div class="glass-button text-center p-3 rounded-3">
              <i class="bi bi-heart fs-3"></i>
              <div class="fw-bold mt-2">Request System</div>
            </div>
          </div>
          <div class="col-6">
            <div class="glass-button text-center p-3 rounded-3">
              <i class="bi bi-award fs-3"></i>
              <div class="fw-bold mt-2">Donor Statistics</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light">
  <div class="container">
    <div style="text-align: center;">
  <h2 class="about-heading">About Us</h2>
</div>


    <div class="row">
      <!-- Text content on the left -->
      <div class="col-lg-6" style="font-size: 1.16rem;">
        <p>A blood bank is a place where blood bags collected from blood donation events are stored in one place. The term "blood bank" refers to a division of a hospital laboratory where the storage of blood products occurs and where proper testing is performed to reduce the risk.</p>
        <p>The process of managing the blood bags received from blood donation events needs proper and systematic management. The blood bags must be handled with care and treated thoroughly as they are related to someone's life.</p>
        <p>The development of our Web-based Blood Bank And Donation Management System (BBDMS) is designed to provide a management solution to blood banks in order to handle blood bags and to make entries of individuals who want to donate blood and who are in need.</p>
      </div>

 <div class="col-lg-6">
  <div class="row g-4">
    <div class="col-md-6">
      <div class="card custom-side-border red">
        <i class="bi bi-heart fs-1 text-danger mb-2"></i>
        <h5 class="fw-bold">Safe Storage</h5>
        <p class="small text-muted">Proper blood storage with temperature control and safety protocols</p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card custom-side-border blue">
        <i class="bi bi-shield-check fs-1 text-primary mb-2"></i>
        <h5 class="fw-bold">Quality Testing</h5>
        <p class="small text-muted">Comprehensive testing to ensure blood safety and compatibility</p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card custom-side-border green">
        <i class="bi bi-people fs-1 text-success mb-2"></i>
        <h5 class="fw-bold">Donor Care</h5>
        <p class="small text-muted">Complete donor registration and health screening process</p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card custom-side-border purple">
        <i class="bi bi-graph-up-arrow fs-1 mb-2" style="color: #6f42c1;"></i>

        <h5 class="fw-bold">Real-time Tracking</h5>
        <p class="small text-muted">Live inventory management and blood request processing</p>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Donor Cards -->
  <section class="py-5 bg-light">
    <div class="container">
        <div style="text-align: center;">
  <h2 class="about-heading">Our Services</h2>
</div>
<div class="container py-5">
  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="custom-card">
        <div class="icon-circle bg-pink">
          <i class="bi bi-person-plus text-danger fs-3"></i>
        </div>
        <h5 class="fw-bold mt-3">Donor Registration</h5>
        <p class="text-muted small">Easy online registration for new blood donors with health screening</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="custom-card">
        <div class="icon-circle bg-lightblue">
          <i class="bi bi-search text-primary fs-3"></i>
        </div>
        <h5 class="fw-bold mt-3">Blood Request</h5>
        <p class="text-muted small">Quick blood search and request system for hospitals and patients</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="custom-card">
        <div class="icon-circle bg-lightgreen">
          <i class="bi bi-bar-chart-line text-success fs-3"></i>
        </div>
        <h5 class="fw-bold mt-3">Donor Statistics</h5>
        <p class="text-muted small">Comprehensive analytics and reporting for blood bank management</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-4">
      <div class="custom-card">
        <div class="icon-circle bg-lightpurple">
          <i class="bi bi-file-earmark-text text-purple fs-3"></i>
        </div>
        <h5 class="fw-bold mt-3">Blood Group Management</h5>
        <p class="text-muted small">Efficient management of different blood types and compatibility</p>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-4">
      <div class="custom-card">
        <div class="icon-circle bg-orange">
          <i class="bi bi-people text-warning fs-3"></i>
        </div>
        <h5 class="fw-bold mt-3">Donor Management</h5>
        <p class="text-muted small">Complete donor database with contact and donation history</p>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col-md-4">
      <div class="custom-card">
        <div class="icon-circle bg-green">
           <i class="bi bi-calendar3 fs-3 text-teal"></i>
        </div>
        <h5 class="fw-bold mt-3">Request Statistics</h5>
        <p class="text-muted small">Track blood requests, fulfillment rates, and emergency responses</p>
      </div>
    </div>
  </div>
</div>
<div class="text-center mb-4">
  <h2 class="fw-bold">Available Blood Donors</h2>
  <div style="width: 80px; height: 3px; background-color: #dc3545; margin: 8px auto 0 auto; border-radius: 5px;"></div>
</div>


      <div class="row g-4">
        <?php
        include 'conn.php';
     $sql = "SELECT * FROM donor_details JOIN blood ON donor_details.blood = blood.blood_group ORDER BY id DESC LIMIT 6";


        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-4">
              <div class="card h-100 shadow" style="padding: 10px;">
<img src="i3.png" class="card-img-top" style="height: 130px; object-fit: contain;" />

  <div class="card-body p-2">
    <h6 class="card-title mb-2"><?php echo $row['fullname']; ?></h6>
    <p class="card-text small mb-1">
      <b>Blood Group:</b> <?php echo $row['blood_group']; ?><br>
      <b>Mobile:</b> <?php echo $row['mobileno']; ?><br>
      <b>Gender:</b> <?php echo $row['gender']; ?><br>
      <b>Age:</b> <?php echo $row['age']; ?><br>
      <b>Address:</b> <?php echo $row['address']; ?>
    </p>
  </div>
</div>

            </div>
        <?php }
        } ?>
      </div>
    </div>
  </section>

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
