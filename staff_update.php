 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hruday travels</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <h1>update page!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



<?php
$link = "localhost";
$username = "root";
$password = "hru";
$dbname = "pro";
$id = $_POST['id'];
$ty = $_POST['job_type'];
// Create connection
$conn = mysqli_connect($link, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
echo "hruday"."<br>";


 $sql2 = "SELECT  *  FROM staff WHERE id_no = $id";
 $result1 = $conn->query($sql2);
 $row = $result1->fetch_assoc();

echo $row['id_no'];
if (mysqli_query($conn, $sql2)) {
    //echo " parent Record deleted successfully";
} else {
    //echo "Error deleting record p: " . mysqli_error($conn);
}




}


?>



 <form class="form-horizontal" action="./staff_up.php" method="post">
      <hr>
      <hr>
    <h2> update Staff </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id" class="form-control" id="inputid" placeholder="ID no" type="text" value = <?php echo $row['id_no']; ?> pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-3">
        <input name= "name" class="form-control" id="inputname" placeholder="Name"  value = <?php echo $row['name']; ?> type="text" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputage" class="col-lg-2 control-label">Age</label>
      <div class="col-lg-3">
        <input name= "age" class="form-control" id="inputage" placeholder="Age" type="text" value=<?php echo $row['age']; ?> pattern="[0-9]{2}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="sex" id="optionsRadios1" value="male" checked="" type="radio" value=<?php echo $row['sex']; ?>>
            Male
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="sex" id="optionsRadios2" value="female" type="radio">
            female
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Job type</label>
      <div class="col-lg-5">
        <select name = "job_type" class="form-control" id="select"  >
          <option value="driver">driver</option>
  <option value="conductor">conductor</option>
  <option value="cleaner">cleaner</option>
  <option value="ticket_seller">ticket seller</option>
  <option value="website_manager">wesite manager</option>
          
        </select>
        <br>
        
      </div>
    </div>

     <div class="form-group">
      <label for="inputno" class="col-lg-2 control-label">Phone number</label>
      <div class="col-lg-3">
        <input name= "phone" class="form-control" id="inputphone" placeholder="phone number" type="text"  value=<?php echo $row['phone']; ?> pattern="[0-9]{10}">
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-8">
        <input name= "address" class="form-control"  type="text" value = <?php echo $row['address']; ?> >

      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>    
  </fieldset>
</form>



<?php 
mysqli_close($conn);
?>


 

</body>
</html>