<?php
include('../common/basepath.php');
include('../common/db.php');

$n = $_POST["name"];
$e = $_POST["email"];
$p = $_POST["phone"];
$c = $_POST["cnic"];
$dob = $_POST["dob"];
$bg = $_POST["blood-group"];
$ld = $_POST["last-donation"];
$co = $_POST["country"];
$pr = $_POST["province"];
$ci = $_POST["city"];
$ad = $_POST["address"];

$sql = "INSERT INTO donors (name, email, phone, cnic, dob, blood_group, last_do_date, country, province, city, address) VALUES ('$n', '$e', '$p', '$c', '$dob', '$bg', '$ld', '$co', '$pr', '$ci', '$ad')";

if ($conn->query($sql) === TRUE) {  
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();

header("Location:../model/find_donor.php");


?>