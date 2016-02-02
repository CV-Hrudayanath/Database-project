<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$id_no = $_POST['id_no'];
$rol = $_POST['job_type'];

$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

else{
		echo "Connected successfully</br>";
		$query="INSERT INTO  website_manager(id_no,role) VALUES('$id_no','$rol')";
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
