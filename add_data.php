<?php
$conn = mysqli_connect("localhost", "root", "", "simple_agri");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$crop = "Tomato";
$season = "Summer";

$sql = "INSERT INTO crops (crop_name, season) VALUES ('$crop', '$season')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
