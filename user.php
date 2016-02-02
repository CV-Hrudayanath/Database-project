<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style type="text/css">
     input:invalid {
  border: 1px solid red;
}

input:valid {
  border: 1px solid green;
}
    </style>

  </head>
  <body>

     <hr>
<?php 
session_start();
?>
<?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";

$dat = $_POST['date'];
//echo $dat;
$_SESSION['dat'] = $dat;


$fr = $_POST['fro'];
$_SESSION['from'] = $fr;


$to = $_POST['to'];
$_SESSION['to'] = $to;
$coach = $_POST['type'];


$no_pass = $_POST['nopass'];
$_SESSION['nop'] = $no_pass;
echo "<br>";
//echo "date is".$_SESSION['dat']."<br>";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "Connected successfully</br>";
    $query="INSERT INTO  book(source ,destination ,dateof ,coach_type ,no_passengers) VALUES('$fr','$to','$dat','$coach','$no_pass')";
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
       echo "Error: " . $query . "<br>" . $conn->error;
      echo "query unsuccessful</br>";
    }

    $sql = "SELECT * FROM online";
    $result1 = $conn->query($sql);


    if ($result1->num_rows > 0) {
    // output data of each row
      $flag=0;
       while($row = $result1->fetch_assoc()) {
        //echo "hrudat";
        //echo "name: " . $row["name"]."<br>". "colg_name: " . $row["colg_name"]."<br>". "id:" . $row["id"]."<br>"."date:" .$row["date"]."<br>".
           //echo " src:". $row["source"]."<br>". $fr;
           // echo strcmp($fr, $row["source"]);
            if( strcmp($fr, $row["source"]) == 0) {
               //echo $row['fare'];
              if( strcmp($to, $row["destination"]) == 0) {
                //$sql3 = "SELECT"
                //if(strcmp($coach , $row["coach_type"] == 0)){
                $flag=1;
               $f = $no_pass * $row['fare'];
              $_SESSION['far'] = $f;
              $_SESSION['bus_no'] = $row['bus_no'];
              $_SESSION['dep'] = $row['departure_time'];
              $_SESSION['jou'] = $row['journey_time'];

             echo  "<tr><td>"."fare: "."</td><td>". $f ."<br>"."bus no:". $row['bus_no']."<br>" . "source: " . $row["source"]."<br>"."destination: " . $row["destination"]."<br>". "coach_type: ".$row["coach_type"]."<br>". "departure_time: ".$row["departure_time"]."<br>"."journey_time: ".$row["journey_time"]."<br>" ;
                          
           //} 
          }
         }
             }
             if($flag == 0){
                              echo "no buses available";

             }
          } 
          else {
              echo "0 results";
            }
   


if($flag == 1){
echo '<hr>

    <h1>Customer Details</h1>

<form class="form-horizontal" action="./customer_insert.php" method="post">
  <fieldset>




  <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-3">
        <input name="na" class="form-control" id="Name" placeholder="Name" type="text" >
      </div>
    </div>

<div class="form-group">
      <label for="inputAge" class="col-lg-2 control-label">Age</label>
      <div class="col-lg-2">
        <input name="ag" class="form-control" id="Age" placeholder="Age" type="text" pattern="[0-9]{2}">
      </div>
    </div>

<div class="form-group">
      <label for="Sex" class="col-lg-2 control-label">Sex</label>
      <div class="col-lg-2">
        <select name="se" class="form-control" id="select">
          <option>Male</option>
          <option>Female</option>
	  
        </select>
        <br>
      </div>
    </div>


 <div class="form-group">
      <label for="inputAddress" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-6">
        <input name="add" class="form-control" id="Address" placeholder="Address" type="text">
      </div>
    </div>

<div class="form-group">
      <label for="inputPhone_Number" class="col-lg-2 control-label">Phone Number</label>
      <div class="col-lg-3">
        <input name="ph" class="form-control" id="Phone_Number" placeholder="Phone Number" type="text" pattern="[0-9]{10}">
      </div>
    </div>

<div class="form-group">
      <label for="inputEmail_ID" class="col-lg-2 control-label">Email ID</label>
      <div class="col-lg-4">
        <input name ="ema" class="form-control" id="Email_ID" placeholder="Email ID" type="text">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-2 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>';
}
}
    
mysqli_close($conn);
?>
  </body>
</html>
