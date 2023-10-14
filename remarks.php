<?php 


include('connection.php');

$id = $_POST['id'];
$remarks = $_POST['remarks'];

$sql = "UPDATE `members` SET `remarks`='$remarks' WHERE `id`='$id'";

$query = mysqli_query($con, $sql);

if ($query == true) {
    $data = array(
        'status' => 'success',
        'message' => 'Remarks updated successfully',
    );
    echo json_encode($data);
} else {
    $data = array(
        'status' => 'failed',
        'message' => 'Error adding Remarks',
    );
    echo json_encode($data);
}

?>