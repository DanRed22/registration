<?php 

include('connection.php');

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$alt_email = $_POST['alt_email'];
$type = $_POST['type'];
$stub_number = $_POST['stub_number'];
$remarks = $_POST['remarks'];

$sql = "INSERT INTO `members`(`firstname`,`lastname`,`email`,`alt_email`,`sex`,`type`, `stub_number`, `remarks`) VALUES('$firstname', '$lastname', '$email','$alt_email','$sex','$type', '$stub_number', '$remarks')";
$query = mysqli_query($con, $sql);
if($query == true) 
{
    $data = array(
        'status' => 'success',
        'message' => 'Member added successfully',
    );
    echo json_encode($data);
}

else 
{
    $data = array(
        'status' => 'failed',
        'message' => 'Error adding member',
    );
    echo json_encode($data);
}

?>