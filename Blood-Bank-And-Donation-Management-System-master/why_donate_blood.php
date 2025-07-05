<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Why Donate Blood?</title>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- FontAwesome CDN -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- Bootstrap Icons CSS (Add this) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Icons (this was missing) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- FontAwesome (already included) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
    }

    .hero {
      background: linear-gradient(135deg, #ff4d4d, #b12f28);
      color: white;
      text-align: center;
    
       padding: 80px 0 60px;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .hero p {
      font-size: 1.2rem;
      margin-top: 10px;
    }

    .benefits {
      padding: 60px 20px;
     
    }

    .benefit-card {
      background: white;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 9px 10px rgba(0,0,0,0.05);
      text-align: center;
      transition: transform 0.2s;
      height: 100%;
    }

    .benefit-card:hover {
      transform: translateY(-5px);
    }

    .benefit-card i {
      font-size: 40px;
      color: #c0392b;
      margin-bottom: 15px;
    }

    .benefit-card h5 {
      font-weight: 600;
      margin-bottom: 15px;
    }

    .glass-section {
      background: url('your-background-image.jpg') center/cover no-repeat;
      padding: 60px 20px;
    }

    .glass-container {

      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 30px;
      max-width: 1000px;
      margin: auto;
      box-shadow: 0 8px 32px rgba(0,0,0,0.1);
      color: white;
      text-align: center;
    }

    .glass-container h2 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    .glass-container p {
      font-size: 1.1rem;
      margin: 8px 0;
    }
    .did-you-know-section {
  padding: 60px 20px;
  background-color: #f2f2f2;
}

.icon-style {
  font-size: 1.5rem;
  color: #dc3545;
}

.shift-text {
  padding-left: 90px; /* or margin-left */
}


  </style>
</head>

<body>
  <?php 
    $active = 'about';
    include('head.php'); 
  ?>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Why Donate Blood?</h1>
    <p>Your donation is a gift of life that makes a real difference in your community</p>
  </div>

  <!-- Benefits Section -->
  <section class="benefits container">
    <h2 class="text-center mb-5 font-weight-bold">Benefits of Blood Donation</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card">
          <i class="bi bi-heart text-danger"></i>

          <h5>Save Lives</h5>
          <p>One donation can save up to 3 lives. Your blood can help accident victims, surgical patients, and those with chronic illnesses.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card">
          <i class="bi bi-shield-plus text-danger fs-1"></i>

          <h5>Health Benefits</h5>
          <p>Regular donation helps reduce iron levels, may lower cancer risk, and provides free health screening.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card">
          <i class="bi bi-people text-danger fs-1"></i>

          <h5>Community Impact</h5>
          <p>Help maintain adequate blood supply in your community and support local hospitals and patients.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card">
          <i class="bi bi-stopwatch text-danger fs-1"></i>

          <h5>Quick Process</h5>
          <p>The entire donation process takes only 45–60 minutes, with the actual blood draw taking just 8–10 minutes.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card">
          <i class="bi bi-trophy text-danger fs-1"></i>

          <h5>Recognition</h5>
          <p>Join our community of heroes and receive recognition for your life-saving contributions.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card">
          <i class="bi bi-bar-chart-line text-danger fs-1"></i>

          <h5>Regular Monitoring</h5>
          <p>Free health check-ups including blood pressure, temperature, pulse, and hemoglobin testing.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Did You Know Section -->
<section class="did-you-know-section">
  <div class="container">
    <h2 class="mb-4 font-weight-bold text-start">Did You Know?</h2>
    <div class="row">
      <div class="col-12 mb-3 d-flex align-items-center">
      
        <p class="mb-0">Every 2 seconds, someone in the US needs blood.</p>
      </div>
      <div class="col-12 mb-3 d-flex align-items-center">
        
        <p class="mb-0">Only 3% of the age-eligible population donates blood yearly.</p>
      </div>
      <div class="col-12 mb-3 d-flex align-items-center">
       
        <p class="mb-0">One car accident victim can require up to 100 units of blood.</p>
      </div>
      <div class="col-12 mb-3 d-flex align-items-center">
    
        <p class="mb-0">Blood cannot be manufactured — it can only come from donors.</p>
      </div>
      <div class="col-12 mb-3 d-flex align-items-center">
       
        <p class="mb-0">Donated blood has a shelf life of only 42 days.</p>
      </div>
    </div>
  </div>
</section>




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
