<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$tno = $_POST['tic'];
$so = $_POST['sou'];
$to = $_POST['dest'];
$doc = $_POST['datej'];
$nam = $_POST['name'];
echo "today is ". date("m/d/Y")."<br>";
$curdate = date("m/d/Y");
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "Connected successfully</br>";
    if($curdate > $doc )
    {
        echo "sorry cancellation not possible";

    }
    else
    {
    $sql = "SELECT * FROM ticket WHERE ticket_no = $tno";
    $result1 = $conn->query($sql);
    $row = $result1->fetch_assoc(); 
    //echo "tno:". $row["ticket_no"]."<br>";
     
    if($row["ticket_no"] == $tno && strcmp($row["name"], $nam)==0 && strcmp($row["destination"], $to) == 0 )
    {
      $query="INSERT INTO  cancellation(ticket_no, source, destination, name , date_of_journey, date_of_cancel, refund ) VALUES('$tno','$so','$to','$nam','$doc','$curdate','100')";
       $result=mysqli_query($conn,$query);
    
  //  $query1 ="INSERT INTO ticket(ticket_no, bus_no,source,destination,departure_time, journey_time, name, address, phone, email, fare) VALUES('','$b','$so','$de','$dt','$jt','$nam','$ad','$ph','$em','$far')";
   // $result1 =mysqli_query($conn,$query1); 
      if($result)
    {
      echo "<br>";    
      echo "cancellation successfully done. </br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
       echo "Error: " . $sql . "<br>" . $conn->error;
      echo "query unsuccessful</br>";
    }
    }
    else
    {
      echo "wrong ticket credentials"."<br>";
    }
    
  
  
}
}
mysqli_close($conn);
?>