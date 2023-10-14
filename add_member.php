<?php 

include('connection.php');

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$type = $_POST['type'];

$sql = "INSERT INTO `members`(`firstname`,`lastname`,`email`,`sex`,`type`) VALUES('$firstname', '$lastname', '$email','$sex','$type')";
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