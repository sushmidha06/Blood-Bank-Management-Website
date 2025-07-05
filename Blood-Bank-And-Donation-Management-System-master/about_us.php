<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us - Blood Bank</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    .gradient-header {
       background: linear-gradient(135deg, #ff4d4d, #b12f28);
      color: white;
      padding: 80px 0 60px;
      text-align: center;
    }

    .gradient-header h2 {
    
       font-size: 3rem;
      font-weight: bold;
    }


  .icon-card {
  border-left: 5px solid #dc3545; /* This sets the left border and its color */
  border-radius: 10px;            /* Rounds all corners */
  background-color: #fff;
  transition: 0.3s ease;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

  .icon-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }

  .icon-card i {
    font-size: 2rem;
    color: #dc3545;
    transition: transform 0.3s ease;
  }

  .icon-card:hover i {
    transform: scale(1.2);
    color: #c0392b;
  }

  .icon-card h4 {
    margin-top: 10px;
    font-weight: bold;
  }

  .icon-card p {
    margin-bottom: 0;
    color: #555;
  }


  </style>
</head>
<body>

  <!-- Include your navigation -->
  <?php 
    $active = 'about';
    include('head.php'); 
  ?>

  <!-- Gradient Header Section -->
  <section class="gradient-header">
    <div class="container">
      <h2>About Our Mission</h2>
      <p class="lead">Dedicated to saving lives through efficient blood donation management</p>
    </div>
  </section>
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4 text-center">

      <div class="col-md-3">
        <div class="card border-0 shadow-sm icon-card h-100">
          <div class="card-body">
            <i class="bi bi-people"></i>
            <h4>10,000+</h4>
            <p>Registered Donors</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm icon-card h-100">
          <div class="card-body">
            <i class="bi bi-heart"></i>
            <h4>25,000+</h4>
            <p>Lives Saved</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm icon-card h-100">
          <div class="card-body">
            <i class="bi bi-shield-check"></i>
            <h4>100%</h4>
            <p>Safety Record</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm icon-card h-100">
          <div class="card-body">
            <i class="bi bi-award"></i>
            <h4>15+</h4>
            <p>Years Experience</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Bootstrap JS and dependencies -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
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

</html>
