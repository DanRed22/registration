<?php 

include('connection.php');

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$school_id = $_POST['school_id'];
$mi = $_POST['mi']? $_POST['mi']: NULL;
$email = $_POST['email'];
$alt_email = isset($_POST['alt_email']) ? $_POST['alt_email'] : NULL;
$type = $_POST['type'];
$status = $_POST['status']?  $_POST['status'] : NULL;
$stub_number = isset($_POST['stub_number']) ? $_POST['stub_number'] : NULL;
$remarks = isset($_POST['remarks']) ? $_POST['remarks'] : NULL;

$sql = "INSERT INTO `members`(`firstname`,`lastname`,`mi`, `email`,`alt_email`,`school_id`, `status`, `type`, `stub_number`, `remarks`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = mysqli_prepare($con, $sql)) {
    mysqli_stmt_bind_param($stmt, "ssssssssss", $firstname, $lastname, $mi, $email, $alt_email, $school_id, $status, $type, $stub_number, $remarks);

    if (mysqli_stmt_execute($stmt)) {
        $data = array(
            'status' => 'success',
            'message' => 'Member added successfully',
        );
        echo json_encode($data);
    } else {
        $data = array(
            'status' => 'failed',
            'message' => 'Error adding member',
        );
        echo json_encode($data);
    }

    mysqli_stmt_close($stmt);
} else {
    $data = array(
        'status' => 'failed',
        'message' => 'Error preparing the SQL statement',
    );
    echo json_encode($data);
}

?>