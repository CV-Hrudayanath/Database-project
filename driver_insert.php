<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$id_no = $_POST['id_no'];
$bus_no = $_POST['bus_no'];
$tim = $_POST['time'];

$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

else{
		echo "Connected successfully</br>";
		$query="INSERT INTO  driver(id_no,bus_no,time) VALUES('$id_no','$bus_no','$tim')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "Inserted successfully</br>";
		}
		else
		{
			echo "query unsuccessful</br>";
		}
}
mysqli_close($conn);

