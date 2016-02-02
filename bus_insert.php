<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$bus_no = $_POST['bus_no'];
$license = $_POST['license_no'];
$ty = $_POST['type'];
$no_s = $_POST['no_seats'];


$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

else{
		echo "Connected successfully</br>";
		$query="INSERT INTO  bus(bus_no,license_no,type,no_seats) VALUES('$bus_no','$license','$ty','$no_s')";
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

