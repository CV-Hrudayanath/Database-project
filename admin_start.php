<!DOCTYPE html>
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
    <h1>Admin page!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<ul class="nav nav-tabs">
  <li class="active"><a aria-expanded="true" href="#home" data-toggle="tab">Home</a></li>
<li class=""><a aria-expanded="true" href="#bus" data-toggle="tab">bus</a></li>
<li class=""><a aria-expanded="true" href="#staff" data-toggle="tab">staff</a></li>
 <li class=""><a aria-expanded="true" href="#profile" data-toggle="tab">Schedules</a></li> 
  
  <li class="dropdown">
    <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">
      STAFF <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#dropdown1" data-toggle="tab">Conductor</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown2" data-toggle="tab">Driver</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown3" data-toggle="tab">ticket seller</a></li>
     <li class="divider"></li>
      <li><a href="#dropdown4" data-toggle="tab">Cleaner</a></li>
      <li class="divider"></li>
      <li><a href="#dropdown5" data-toggle="tab">manager</a></li>

    </ul>
  </li>
  <li class=""><a aria-expanded="true" href="#disabled" data-toggle="tab">Disabled</a></li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
    <h1> welcome to hruday travels. this is admin page to add, delete and can update data stored in databases.</h1>

  </div>



<!--..............................................................................................................................-->




  <div class="tab-pane fade " id="bus">
    
    <form class="form-horizontal" action="./bus_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add Bus </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputbus" class="col-lg-2 control-label">Bus.no</label>
      <div class="col-lg-2">
        <input name= "bus_no" class="form-control" id="inputbus" placeholder="Bus no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputlicense" class="col-lg-2 control-label">License no</label>
      <div class="col-lg-3">
        <input name= "license_no" class="form-control" id="inputlic" placeholder="License no" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Type</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="type" id="optionsRadios1" value="seat" checked="" type="radio">
            Seat
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="type" id="optionsRadios2" value="sleeper" type="radio">
            Sleeper
          </label>
        </div>
      </div>
    </div>
     <div class="form-group">
      <label for="inputno" class="col-lg-2 control-label">no of seats</label>
      <div class="col-lg-2">
        <input name= "no_seats" class="form-control" id="inputseats" placeholder="no of seats" type="text" pattern="[0-9]{2}">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>       
  </fieldset>
</form>

<form class="form-horizontal" action="./bus_delete.php" method="post">
      <hr>
      <hr>
    <h2> Delete Bus </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputbus" class="col-lg-2 control-label">Bus.no</label>
      <div class="col-lg-2">
        <input name= "bus_no" class="form-control" id="inputbus" placeholder="Bus no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </div>       
  </fieldset>
</form>

<h1> BUS DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM bus";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>BUS NO</th>
      <th>LICENSE NO</th>
      <th>TYPE</th>
      <th>NO OF SEATS</th>
    </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['bus_no'] . "</td><td>" . $row['license_no'] . "</td><td>".$row['type']."</td><td>".$row['no_seats']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>
    







  </div>



<!--..............................................................................................................................-->





  <div class="tab-pane fade " id="staff">
     
   
   <form class="form-horizontal" action="./staff_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add Staff </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-3">
        <input name= "name" class="form-control" id="inputname" placeholder="Name" type="text" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputage" class="col-lg-2 control-label">Age</label>
      <div class="col-lg-3">
        <input name= "age" class="form-control" id="inputage" placeholder="Age" type="text" pattern="[0-9]{2}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="sex" id="optionsRadios1" value="male" checked="" type="radio">
            male
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
        <select name = "job_type" class="form-control" id="select">
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
        <input name= "phone" class="form-control" id="inputphone" placeholder="phone number" type="text" pattern="[0-9]{10}">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-8">
        <input name= "address" class="form-control"  type="text" placeholder="address" >

      </div>
    </div>




    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>    
  </fieldset>
</form>

<form class="form-horizontal" action="./staff_delete.php" method="post">
      <hr>
      <hr>
    <h2> Delete Staff </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Job type</label>
      <div class="col-lg-5">
        <select name = "job_type" class="form-control" id="select">
          <option value="driver">driver</option>
  <option value="conductor">conductor</option>
  <option value="cleaner">cleaner</option>
  <option value="ticket_seller">ticket seller</option>
  <option value="website_manager">website manager</option>
          
        </select>
        <br>
        
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </div>    
    </fieldset>
    </form>    
    <form class="form-horizontal" action="./staff_update.php" method="post">
      <hr>
      <hr>
    <h2> Update Staff </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Job type</label>
      <div class="col-lg-5">
        <select name = "job_type" class="form-control" id="select">
          <option value="driver">driver</option>
  <option value="conductor">conductor</option>
  <option value="cleaner">cleaner</option>
  <option value="ticket_seller">ticket seller</option>
  <option value="website_manager">website manager</option>
          
        </select>
        <br>
        
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>    
    </fieldset>
    </form> 
    <h1> STAFF DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM staff";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>NAME</th>
      <th>AGE</th>
      <th>SEX</th>
      <th>ADDRESS </th>
      <th> PHONE NO </th>
      <th> JOB TYPE </th>
    </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['name'] . "</td><td>".$row['age']."</td><td>".$row['sex']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['job_type']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>
       
</div>







<!--..............................................................................................................................-->




  <div class="tab-pane fade" id="dropdown1">
  <form class="form-horizontal" action="./conductor_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add Conductor </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id_no" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Bus no</label>
      <div class="col-lg-3">
        <input name= "bus_no" class="form-control" id="inputname" placeholder="Bus no" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputtime" class="col-lg-2 control-label">Time</label>
      <div class="col-lg-3">
        <input name= "time" class="form-control" id="inputtime" placeholder="Time" type="text">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<h1> CONDUCTOR DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM conductor";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>BUS NO</th>
      <th>TIME</th>
     </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['bus_no'] . "</td><td>".$row['time']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>



</div>

<!--..............................................................................................................................-->


<div class="tab-pane fade" id="dropdown2">
  <form class="form-horizontal" action="./driver_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add Driver </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id_no" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Bus no</label>
      <div class="col-lg-3">
        <input name= "bus_no" class="form-control" id="inputname" placeholder="Bus no" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputtime" class="col-lg-2 control-label">Time</label>
      <div class="col-lg-3">
        <input name= "time" class="form-control" id="inputtime" placeholder="Time" type="text">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<h1> DRIVER DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM driver";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>BUS NO</th>
      <th>TIME</th>
     </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['bus_no'] . "</td><td>".$row['time']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>

  </div>


<!--..............................................................................................................................-->

<div class="tab-pane fade" id="dropdown4">
  <form class="form-horizontal" action="./cleaner_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add Cleaner </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id_no" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Bus no</label>
      <div class="col-lg-3">
        <input name= "bus_no" class="form-control" id="inputname" placeholder="Bus no" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputtime" class="col-lg-2 control-label">Time</label>
      <div class="col-lg-3">
        <input name= "time" class="form-control" id="inputtime" placeholder="Time" type="text">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<h1> CLEANER DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM cleaner";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>BUS NO</th>
      <th>TIME</th>
     </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['bus_no'] . "</td><td>".$row['time']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>

  </div>


<!--..............................................................................................................................-->

<div class="tab-pane fade" id="dropdown3">
  <form class="form-horizontal" action="./ticketseller_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add TicketSeller </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id_no" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputtime" class="col-lg-2 control-label">Place</label>
      <div class="col-lg-3">
        <input name= "place" class="form-control" id="inputPlace" placeholder="Place" type="text">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<h1> CONDUCTOR DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM ticket_seller";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>PLACE </th>
      </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['place'] ."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>

  </div>


<!--..............................................................................................................................-->

<div class="tab-pane fade" id="dropdown5">
  <form class="form-horizontal" action="./webman_insert.php" method="post">
      <hr>
      <hr>
    <h2> Add WebsiteManager </h2> 
  <fieldset>
    <div class="form-group">
      <label for="inputid" class="col-lg-2 control-label">ID.no</label>
      <div class="col-lg-2">
        <input name= "id_no" class="form-control" id="inputid" placeholder="ID no" type="text" pattern="[0-9]{4}">
      </div>
    </div>
   <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Job type</label>
      <div class="col-lg-5">
        <select name = "job_type" class="form-control" id="select">
  <option value="website_esigner">Website Designer</option>
  <option value="database_manager">Database Manager</option>
  <option value="network_manager">Network Manager</option>
          
        </select>
        <br>
        
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<h1> WEBSITE MANAGER DETAILS </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM website_manager";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>ROLE</th>
      </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['role']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>

  </div>


<!--..............................................................................................................................

<div class="tab-pane fade " id="profile">

    <h1> STAFF DETAILS </h1>
    <php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM staff";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID NO</th>
      <th>NAME</th>
      <th>AGE</th>
      <th>SEX</th>
      <th>ADDRESS </th>
      <th> PHONE NO </th>
      <th> JOB TYPE </th>
    </tr>
  </thead>
   <tbody>
     <php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['id_no'] . "</td><td>" . $row['name'] . "</td><td>".$row['age']."</td><td>".$row['sex']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['job_type']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result)
    {
      echo "<br>";    
      echo "Inserted successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>
    

     
  </div>
-->
<!--..............................................................................................................................-->
  <div class="tab-pane fade " id="disabled">
    <form class="form-horizontal" action="./login.php" method="post">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Logout</button>
      </div>
    </div>
   </div>  
 </form>





<div class="tab-pane fade " id="profile">

  
    <h1>schedules Details</h1>

<h2> Add schedules </h2>
<form class="form-horizontal" action="./sched_insert.php" method="post">
  <fieldset>




  <div class="form-group">
      <label for="inputs" class="col-lg-2 control-label">Bus no</label>
      <div class="col-lg-3">
        <input name="bus" class="form-control" id="Name" placeholder="bus number" type="text" >
      </div>
    </div>

<div class="form-group">
      <label for="inputAge" class="col-lg-2 control-label">source</label>
      <div class="col-lg-2">
        <input name="sou" class="form-control" id="Age" placeholder="source" type="text" >
      </div>
    </div>



 <div class="form-group">
      <label for="inputAddress" class="col-lg-2 control-label">destination</label>
      <div class="col-lg-6">
        <input name="des" class="form-control" id="Address" placeholder="destination" type="text">
      </div>
    </div>

<div class="form-group">
      <label for="inputPhone_Number" class="col-lg-2 control-label">fare</label>
      <div class="col-lg-3">
        <input name="fare" class="form-control" id="Phone_Number" placeholder="fare" type="text">
      </div>
    </div>

<div class="form-group">
      <label for="inputEmail_ID" class="col-lg-2 control-label">departure time</label>
      <div class="col-lg-4">
        <input name ="dep" class="form-control" id="Email_ID" placeholder="departure time" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail_ID" class="col-lg-2 control-label">journey time</label>
      <div class="col-lg-4">
        <input name ="jou" class="form-control" id="Email_ID" placeholder="journey time" type="text">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-2 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

 <h1> SCHEDULES </h1>
    <?php
$link="localhost";
$username="root";
$dbname="pro";
$password="hru";
$conn=mysqli_connect($link,$username,$password,$dbname);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

else{

    $sql1 = "SELECT * FROM online";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
      ?> 
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>BUS NO</th>
      <th>SOURCE</th>
      <th>DESTINATION</th>
      <th>FARE</th>
      <th>DEPARTURE TIME </th>
      <th> JOURNEY TIME </th>
    </tr>
  </thead>
   <tbody>
     <?php 
       while($row = $result1->fetch_assoc()) { 
               echo "<tr><td>" . $row['bus_no'] . "</td><td>" . $row['source'] . "</td><td>".$row['destination']."</td><td>".$row['fare']."</td><td>".$row['departure_time']."</td><td>".$row['journey_time']."</td></tr>"."<br>";
             }?>
         </tbody>
         </table>
         <?php     
        echo "</table>";
          } 
          else {
              echo "0 results";
            }
    if($result1)
    {
      echo "<br>";    
      echo "Retrieved successfully</br>";
    }
    else
    {
      //echo $result;
      echo "<br>";
      echo "query unsuccessful</br>";
    }
}
mysqli_close($conn);
?>



</div>
</div>
  </body>
</html>
