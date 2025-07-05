<html>

<head>


<style>
/* Logo image styling */
.logo-img {
  height: 60px;
  vertical-align: middle;
  margin-right: 8px;

}

/* Optional: special styling if logo is active (home page) */
#active-logo {
  color: #e60000; /* darker red or whatever fits your theme */
}

.header {
  overflow:hidden;
  background-color: white;
  top: 40;
  width:100%;
  padding: 4px 6px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color:rgb(61, 58, 58);
  text-align: center;
   padding: 16px 12px 8px 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}




/* Float the link section to the right */
.header-right {
  float: right;
   padding: 16px 12px 8px 12px;

}
.header-right a {
  padding: 10px 15px;
  color: black;
  text-decoration: none;
  transition: background-color 0.3s ease, border-radius 0.3s ease;
  border-radius: 4px; /* Small corners */
}

.header-right a:hover {
  background-color: rgba(255, 255, 255, 0.2); /* light hover */
  border-radius: 6px; /* Adjust corner size on hover */
}

/* Active tab */
.header-right a.act {
  background-color: #fff;
  color:rgb(0, 0, 0);
  border-radius: 6px;
  font-weight: bold;
}


/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo" <?php if($active=='home') echo "id='active-logo'"; ?>>
  <img src="i3.png" alt="Logo" class="logo-img">
  Blood Bank & Donation
</a>

    <div class="header-right">
      <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>


</body>
</html>
