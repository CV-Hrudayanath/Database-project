<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <!--[endif]-->
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
$nam = $_POST['na'];
$_SESSION['name'] = $nam;
$ag = $_POST['ag'];
$se = $_POST['se'];
$ad = $_POST['add'];
$_SESSION['add'] = $ad;
$ph = $_POST['ph'];
$_SESSION['phone'] = $ph;
$em = $_POST['ema'];
$_SESSION['email'] = $em;
//echo $no_pass;
$b = $_SESSION['bus_no'];
$so = $_SESSION['from'];
$de = $_SESSION['to'];
$dt = $_SESSION['dep'];
$jt = $_SESSION['jou'];
$far = $_SESSION['far'];
$dada  = $_SESSION['dat'];



echo "<br>";
echo "date is".$_SESSION['date']."<br>";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "Connected successfully</br>";
    $query="INSERT INTO  customer(name, age, sex, address,phone, email) VALUES('$nam','$ag','$se','$ad','$ph','$em')";
    $result=mysqli_query($conn,$query);
    $query1 ="INSERT INTO ticket(ticket_no, bus_no,source,destination,date_of_journey,departure_time ,journey_time, name, address, phone, email, fare) VALUES('','$b','$so','$de','$dada','$dt','$jt','$nam','$ad','$ph','$em','$far')";
    $result1 =mysqli_query($conn,$query1); 
    $query2 = "SELECT ticket_no FROM ticket WHERE phone = '";
    $query2 .= $ph;
    $query2 .= "'";
    //echo $query2;
    $result2 =mysqli_query($conn,$query2);
    $row2 = $result2->fetch_assoc();
    //echo $row2['ticket_no']; 
    $_SESSION['tno'] = $row2['ticket_no'];
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
<hr>

    <h1>Payment Details</h1>

<form class="form-horizontal" action="./bank_insert.php" method="post">
  <fieldset>




  <div class="form-group">
      <label for="inputtrans" class="col-lg-2 control-label">Transaction Id</label>
      <div class="col-lg-4">
        <input name="tid" class="form-control" id="tid" placeholder="transaction id" type="text">
      </div>
    </div>



<div class="form-group">
      <label for="bank" class="col-lg-2 control-label">bank</label>
      <div class="col-lg-2">
        <select name="bank" class="form-control" id="select">
          <option value="state bank of india" >state bank of india</option>
          <option value="AXIS BANK" >AXIS BANK</option>
	       <option value="ANDHRA BANK" >ANDHRA BANK</option>
         <option value="karur vysya bank" >karur vysya bank</option>
         <option value="union bank" >union bank</option>
        <option value="IDBI bank" >IDBI bank</option>
        <option value="HDFC bank" >HDFC bank</option>
        </select>
        <br>
      </div>
    </div>


 

    <div class="form-group">
      <label for="banking" class="col-lg-2 control-label">bank</label>
      <div class="col-lg-2">
        <select name="type" class="form-control" id="select">
          
          <option value="net banking" >net banking</option>
         <option value="credit card" >credit card</option>
         <option value="debit card" >debit card</option>
        
        </select>
        <br>
      </div>
    </div>





    <div class="form-group">
      <div class="col-lg-2 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

    

  </body>
</html>
