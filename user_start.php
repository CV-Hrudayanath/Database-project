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
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

  </head>
  <body>
    <h1>Hruday Travels</h1>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<ul class="nav nav-tabs">
    <li class="active"><a aria-expanded="true" href="#home" data-toggle="tab">Home</a></li>
    <li class=""><a aria-expanded="true" href="#book" data-toggle="tab">book</a></li>
    <li class=""><a aria-expanded="true" href="#cancel" data-toggle="tab">cancel ticket</a></li>

</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
    <h1> welcome to hruday travels.users can book their tickets using this website. we also have facility to cancel if customer wants to cancel his ticket.</h1>
  </div>

<div class="tab-pane fade " id="book">
<hr>
<br>
<br>
<form class="form-horizontal" action="./user.php" method="post">
  <fieldset>

<div class="form-group">
      <label for="From" class="col-lg-2 control-label">From</label>
      <div class="col-lg-2">
        <select  name ="fro" class="form-control" id="From">
           <option value="hyderabad">hyderabad</option>
           <option value="nellore">Nellore</option>
          <option value="banglore">banglore</option>
          <option value="chennai">Chennai</option>
          <option value="vijayawada">Vijayawada</option>
          
        </select>
        <br>
      </div>
    </div>
<div class="form-group">
      <label for="To" class="col-lg-2 control-label">To</label>
      <div class="col-lg-2">
        <select name="to" class="form-control" id="To">
          <option value="hyderabad">hyderabad</option>
           <option value="nellore">Nellore</option>
          <option value="banglore">banglore</option>
          <option value="chennai">Chennai</option>
          <option value="vijayawada">Vijayawada</option>

        </select>
        <br>
      </div>
    </div>

  <div class="form-group">
      <label for="inputDate" class="col-lg-2 control-label">Date</label>
      <div class="col-lg-2">
        <input name="date" class="form-control"  placeholder="date" type="date">
      </div>
    </div>

<div class="form-group">
      <label for="Coach" class="col-lg-2 control-label">Coach</label>
      <div class="col-lg-2">
        <select name="type" class="form-control" id="select">
          <option value="seat">Seat</option>
          <option value="sleeper">Sleeper</option>
        </select>
        <br>
      </div>
    </div>


 <div class="form-group">
      <label for="inputNo_of_passengers" class="col-lg-2 control-label">No of passengers</label>
      <div class="col-lg-2">
        <input name="nopass" class="form-control" id="No_of_passengers" placeholder="No of passengers" type="text">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-2 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

</div>

  <div class="tab-pane fade " id="cancel">

  <h1> Cancellation </h1>
  <hr>
   <form class="form-horizontal" action="./ticket_cancel.php" method="post">
  <fieldset>
<div class="form-group">
      <label for="inputtic" class="col-lg-2 control-label">ticket number</label>
      <div class="col-lg-2">
        <input name="tic" class="form-control"  placeholder="ticket number" type="text">
      </div>
</div>

<div class="form-group">
      <label for="From" class="col-lg-2 control-label">From</label>
      <div class="col-lg-2">
        <select  name ="sou" class="form-control" id="From">
           <option value="hyderabad">hyderabad</option>
           <option value="nellore">Nellore</option>
          <option value="banglore">banglore</option>
          <option value="chennai">Chennai</option>
          <option value="vijayawada">Vijayawada</option>
          
        </select>
        <br>
      </div>
    </div>
<div class="form-group">
      <label for="To" class="col-lg-2 control-label">To</label>
      <div class="col-lg-2">
        <select name="dest" class="form-control" id="To">
          <option value="hyderabad">hyderabad</option>
           <option value="nellore">Nellore</option>
          <option value="banglore">banglore</option>
          <option value="chennai">Chennai</option>
          <option value="vijayawada">Vijayawada</option>

        </select>
        <br>
      </div>
    </div>
<div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">name</label>
      <div class="col-lg-2">
        <input name="name" class="form-control"  placeholder="name" type="text">
      </div>
    </div>

  <div class="form-group">
      <label for="inputDate" class="col-lg-2 control-label">Date of Journey</label>
      <div class="col-lg-2">
        <input name="datej" class="form-control"  placeholder="date of journey" type="date">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-2 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Cancel</button>
      </div>
    </div>
  </fieldset>
</form>

  </div>

  </div> 

  </body>
</html>
