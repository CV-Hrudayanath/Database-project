 <?php
$link = "localhost";
$username = "root";
$password = "hru";
$dbname = "pro";
$id = $_POST['id'];
$ty = $_POST['job_type'];
// Create connection
$conn = mysqli_connect($link, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
echo "hruday"."<br>";
echo $ty;
echo $id;
// sql to delete a record
//$sql = "DELETE FROM staff WHERE id_no = $id";

//$sql1 = "DELETE FROM $ty 
  //       WHERE id_no=$id";
//$w1 = "SET foreign_key_checks = 0"; 

$sql = "DELETE FROM staff 
         WHERE id_no=$id ";
//$w2 = "SET foreign_key_checks = 1";

 //$sql2 = "DELETE staff, $ty FROM $ty JOIN staff ON $ty.id_no = staff.id_no  WHERE staff.id_no = $id";
if (mysqli_query($conn, $sql)) {
    echo " parent Record deleted successfully";
} else {
    echo "Error deleting record p: " . mysqli_error($conn);
}

/*if (mysqli_query($conn, $sql1)) {
    echo " child Record deleted successfully";
} else {
    echo "Error deleting record c : " . mysqli_error($conn);
}
// DELETE FROM `pro`.`website_manager` WHERE `website_manager`.`id_no` = 1111
}*/
}
mysqli_close($conn);
?>

