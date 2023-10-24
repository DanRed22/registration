<?php include('connection.php');

$sql = "SELECT COUNT(*), type from `members` WHERE timeIn IS NOT NULL GROUP BY type";
$query = $con->query($sql);
$count_all_rows = mysqli_num_rows($query);
$countData = array();
$type = array();
$count = array();
if ($query->num_rows > 0){
    $dataArray =array();
    while ($row = $query->fetch_assoc()){
        $dataArray[] = $row;

    }
}

echo json_encode($dataArray);
?>