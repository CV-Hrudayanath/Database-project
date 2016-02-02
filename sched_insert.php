<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$b = $_POST['bus'];
$so = $_POST['sou'];
$de = $_POST['des'];
$fa = $_POST['fare'];
$dt = $_POST['dep'];
$jt = $_POST['jou'];
//$_SESSION['phone'] = $ph;
//$em = $_POST['ema'];
//echo $no_pass;
//echo "<br>";
//echo "date is".$_SESSION['date']."<br>";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "Connected successfully</br>";
    $query="INSERT INTO  online(bus_no, source, destination, fare, departure_time, journey_time)  VALUES('$b','$so','$de','$fa','$dt','$jt')";
    $result=mysqli_query($conn,$query);


  
    if($result)
    {
      echo "<br>";    
      echo "Inserted successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
       echo "Error: " . $sql . "<br>" . $conn->error;
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>