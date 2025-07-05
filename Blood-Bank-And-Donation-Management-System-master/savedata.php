<?php
$conn = mysqli_connect("localhost", "root", "root123", "blood_donation");

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

$fullname = $_POST['fullname'];
$mobileno = $_POST['mobileno'];
$emailid = $_POST['emailid'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$blood = $_POST['blood'];
$address = $_POST['address'];

$sql = "INSERT INTO donor_details (fullname, mobileno, emailid, age, gender, blood, address)
        VALUES ('$fullname', '$mobileno', '$emailid', '$age', '$gender', '$blood', '$address')";

if (mysqli_query($conn, $sql)) {
    // ✅ Show alert then redirect using JavaScript
    echo "<script>
            alert('Your details have been submitted successfully!');
            window.location.href = 'home.php';
          </script>";
    exit();
} else {
    echo "❌ Error saving data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
