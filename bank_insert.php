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
$tid = $_POST['tid'];
$ba = $_POST['bank'];
$ty = $_POST['type'];

//echo "date is ".$_SESSION['dat']."<br>";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "Connected successfully</br>";
    $query="INSERT INTO  payment(transaction_id, bank, type) VALUES('$tid','$ba','$ty')";
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
<hr>

    <h1>Ticket Details</h1>
    <?php /* 
      echo "date of journey: ".$_SESSION['dat']."<br>";
      echo "source: ".$_SESSION['from']."<br>";
      echo "destination: ".$_SESSION['to']."<br>";
      echo "nop: ".$_SESSION['nop']."<br>";
      echo "fare: ".$_SESSION['far']."<br>";
      echo "name: ".$_SESSION['name']."<br>";
      echo "phone: ".$_SESSION['phone']."<br>";
*/
    ?>

    <table class="table table-striped table-hover ">
  <thead>
    <tr class="info">
      
      <th>details</th>
      <th>ticket</th>
    </tr>
  </thead>
  <tbody>
    <tr class="success">
      <td>ticket no</td>
      <td><?php echo $_SESSION['tno']; ?></td>
     
    </tr>
    <tr class="success">
      <td>date of journey</td>
      <td><?php echo $_SESSION['dat']; ?></td>
     
    </tr>
    <tr>
      <td>source</td>
      <td><?php echo $_SESSION['from']; ?></td>
      
    </tr>
    <tr class="info">
      <td>destination</td>
      <td><?php echo $_SESSION['to']; ?></td>
      
    </tr>
    <tr class="success">
      <td>number of passengers</td>
      <td><?php echo $_SESSION['nop']; ?></td>
      
    </tr>
    <tr class="danger">
      <td>Fare</td>
      <td><?php echo $_SESSION['far']; ?></td>
    
    </tr>
    <tr class="warning">
      <td>Name</td>
      <td><?php echo $_SESSION['name']; ?></td>
      
    </tr>
    <tr class="active">
      <td>phone</td>
      <td><?php echo $_SESSION['phone']; ?></td>
     
    </tr>
    <tr class="success">
      <td>email</td>
      <td><?php echo $_SESSION['email']; ?></td>
     
    </tr>
    <tr class="danger">
      <td>address</td>
      <td><?php echo $_SESSION['add']; ?></td>
     
    </tr>
    <tr class="active">
      <td>bus no</td>
      <td><?php echo $_SESSION['bus_no']; ?></td>
     
    </tr>
    <tr class="info">
      <td>date of journey</td>
      <td><?php echo $_SESSION['dat']; ?></td>
     
    </tr>

    <tr class="success">
      <td>departure time</td>
      <td><?php echo $_SESSION['dep']; ?></td>
     
    </tr>
    <tr class="danger">
      <td>journey no</td>
      <td><?php echo $_SESSION['jou']; ?></td>
     
    </tr>
    <tr class="warning">
      <td>bus no</td>
      <td><?php echo $_SESSION['bus_no']; ?></td>
     
    </tr>
  </tbody>
</table> 

  </body>
</html>
