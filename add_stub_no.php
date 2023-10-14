<?php 

include('connection.php');

$id = $_POST['id'];
$stubno = $_POST['stubNumber'];


$sql = "UPDATE `members` SET `stub_number`='$stubno' WHERE `id`='$id'";

$query = mysqli_query($con, $sql);

if($query == true) 
{
    $data = array(
        'status' => 'success',
        'message' => 'Control number updated successfully',
    );
    echo json_encode($data);
}

else 
{
    $data = array(
        'status' => 'failed',
        'message' => 'Error adding control number',
    );
    echo json_encode($data);
}

?>