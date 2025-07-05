<?php
$con = mysqli_connect("localhost", "root", "root123", "blood_donation");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "✅ Connected successfully!";
?>
