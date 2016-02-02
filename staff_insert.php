<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$id_no = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$job = $_POST['job_type'];

$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

else{
		echo "Connected successfully</br>";
		$query="INSERT INTO  staff(id_no,name,age,sex,address,phone,job_type) VALUES('$id_no','$name','$age','$sex','$address', '$phone', '$job')";
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

