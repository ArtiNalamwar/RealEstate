<?php 
    if(isset($_REQUEST["s"]))
{
  $propertyid=$_REQUEST["propertyid"];
  $name=$_REQUEST["name"];  
  $email=$_REQUEST["email"]; 
  $Address=$_REQUEST["Address"];  
  $city=$_REQUEST["city"];
  $state=$_REQUEST["state"];
  $zipcode=$_REQUEST["zipcode"];
  // $adharcard=$_REQUEST["adharcard"];
  // $passport=$_REQUEST["passport"];
  // $rationcard=$_REQUEST["rationcard"];
  // $pancard=$_REQUEST["pancard"];
  //  $noc=$_REQUEST["noc"];
  //   $copyMunitax=$_REQUEST["copyMunitax"];
  //    $saleagreement=$_REQUEST["saleagreement"];
      $cardname=$_REQUEST["cardname"];
       $creditno=$_REQUEST["creditno"]; 
       $expmonth=$_REQUEST["expmonth"];    
         $expyear=$_REQUEST["expyear"];
           $cvv=$_REQUEST["cvv"]; 
  $con=mysqli_connect("localhost","root","","mydb");
  if($con)
  {
  mysqli_query($con,"insert into contact values('$propertyid', '$name', '$email', '$Address', '$city', '$state', '$zipcode',  '$cardname', '$creditno', '$expmonth', '$expyear', '$cvv')");
  if(mysqli_affected_rows($con))
  {
    echo"<script>alert ('Registered successfull');</script>";
  }
  else
  {
    echo "<script>alert('Not registered successfull');</script>";
  }
  }
  mysqli_close($con);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .navbar{
            font-size: 20px;
        }
        .navbar-brand{
            font-size: 30px;
        }
      body{
        font-family: serif;
        background-color: gray;
        font-size: 20px;
      }
      .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}
.PropertyId{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
    
  </style>
</head>
<body>
  <header class="page-header header container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Real Estate</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
      <li><a href="contact.php"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact Us</a></li>
      <li class="dropdown"><a href="about.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> About Us</span></a></li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</header>
    <div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" action="cnt.php">

        <div class="row">
          <div class="col-50">
            <h3>Client Details</h3>
            <label for="Property Id">Property Id</label>
            <select class="PropertyId" name="propertyid">
              <option value="F1001">F1001</option>
              <option value="F1002">F1002</option>
              <option value="F1003">F1003</option>
              <option value="F1004">F1004</option>
              <option value="F1005">F1005</option>
              <option value="F1006">F1006</option>
              <option value="H1001">H1001</option>
              <option value="H1002">H1002</option>
              <option value="H1003">H1003</option>
              <option value="H1004">H1004</option>
              <option value="H1005">H1005</option>
              <option value="H1006">H1006</option>
              <option value="L1001">L1001</option>
              <option value="L1002">L1002</option>
              <option value="L1003">L1003</option>
              <option value="L1004">L1004</option>
              <option value="L1005">L1005</option>
              <option value="L1006">L1006</option>
            </select>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Full Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="Address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zipcode" placeholder="Zip-Code">
              </div>
              <div class="col-50">
                <label for="Required Documents">Required Documents</label>
                <div class="checkbox">
  <label><input type="checkbox" name="adharcard" value="">Aadhar Card</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="passport" value="">Passportsize-Photo</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="rationcard" value="">Ration Card</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="pancard" value="">Pan Card</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="noc" value="">NOC</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="copyMunitax" value="">Copy Of Muncipal Tax</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="saleagreement" value="">Sale Agreement</label>
</div>
                
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment Details</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name On Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name On Card">
            <label for="ccnum">Card Number</label>
            <input type="text" id="ccnum" name="creditno" placeholder="Card Number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-sm" name="s" action="cnt.php">Save</button>
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr">All the above information is true
        </label>
        <!-- <button type="submit" class="btn btn-primary btn-sm" name="submit" action="calc.php">
                                            Continue</button> -->

       <!--  <div class="form-group">
                <input type="submit" name="" value="Continue" class="btn btn-dark btn-block" action="calc.php">
        </div> -->
      </form>
      <form action="calc.php" method="post">
      <button type="submit" class="btn btn-dark btn-block" name="s1" value="next" action="calc.php">Next  </button> 
        
      </form>
    </div>
  </div>

  
</div>


</body>
</html>
