<?php
include('connection.php');

$id = $_POST['id'];
$email = $_POST['email'];
$altEmail = $_POST['alt_email'];

$sql = "UPDATE members SET email='$email', alt_email='$altEmail' WHERE id='$id'";

if (mysqli_query($con, $sql)) {
    echo 'success';
} else {
    echo 'error';
}
?>