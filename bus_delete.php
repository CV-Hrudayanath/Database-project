 <?php
$link = "localhost";
$username = "root";
$password = "hru";
$dbname = "pro";
$id = $_POST['bus_no'];

$conn = mysqli_connect($link, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
$sql = "DELETE FROM bus WHERE bus_no=$id ";

if (mysqli_query($conn, $sql)) {
    echo " Record deleted successfully";
} 
else {
    echo "Error deleting record" . mysqli_error($conn);
}


}
mysqli_close($conn);
?>

