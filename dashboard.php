<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .main img{
          height: 300px;
          width: 600px;
          border-radius: 10px;
        }
        .jumbotron{
          height: 30px;
          background-color:#eee; 
        }
        .jumbotron p{
            font-size: 50px;
            margin-top: -58px;
            margin-left: 60px;
        }
        .jumbotron i{
          font-size: -webkit-xxx-large;
          margin-top: -20px;
        }
        .overlay {
     position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5); /* Black see-through */
      color: #f1f1f1;
      width: 100%;
      transition: .5s ease;
      opacity:0;
      color: white;
      font-size: 50px;
      padding: 20px;
      text-align: center;
    }
    .property1:hover .overlay {
      opacity: 1;
    }
    .overlay {
     position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5); /* Black see-through */
      color: #f1f1f1;
      width: 100%;
      transition: .5s ease;
      opacity:0;
      color: white;
      font-size: 50px;
      padding: 20px;
      text-align: center;
    }
    .property2:hover .overlay{
      opacity: 1;
    }
    .overlay {
     position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5); /* Black see-through */
      color: #f1f1f1;
      width: 100%;
      transition: .5s ease;
      opacity:0;
      color: white;
      font-size: 30px;
      padding: 20px;
      text-align: center;
    }
    .property3:hover .overlay {
      opacity: 1;
    }
    .modal-content{
            margin-top: 100px;
            margin-right: 10px;                  
            width: 70%;
        }
    .image-panel img{
      height: 200px;
      width: 300px;
      padding: 20px;

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
      <li><a href="about.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> About Us</a></li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 main"> 
          <div class="jumbotron">
            <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>Dashboard</p> 
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 property1">
              <a href="" data-toggle="modal" data-target="#flatModal"><img src="images/flat.jpg" class="img-responsive" alt="flat"></a>
              <div class="overlay">Flat Property </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 property2">
              <a href="" data-toggle="modal" data-target="#homeModal"><img src="images/home.jpg" class="img-responsive" alt="home"></a>
              <div class="overlay">Home Property </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 property3">
              <a href="" data-toggle="modal" data-target="#landModal"><img src="images/land1.jpg" class="img-responsive" alt="land1"></a>
              <div class="overlay">Land Property </div>
            </div>
        </div> 
    </div> 
    <div class="row"> 
      <div class="col-sm-10 col-md-10 col-lg-10"> 
        <!-- flat-modal -->
    <div id="flatModal" class="modal fade" role="dialog">
        <div class="row">
            <div class="col-sm-10 col-md-10 col-lg-10"></div>
        <div class=col-sm-10 col-md-10 col-lg-10 class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" name="login"> &times;</button>
                <h2>Flat Properties</h2>
            </div>
            <div class="modal-body image-panel">
              <div class="panel panel-info">
                <div class="panel-body">
                   <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.2500000"><img src="images/flat1.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.3000000"><img src="images/flat2.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.3500000"><img src="images/flat3.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.4000000"><img src="images/flat4.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.4500000"><img src="images/flat5.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.5000000"><img src="images/flat6.jpg"></a>
                </div>
              </div>
              <button type="button" class="btn btn-primary" style="float: right;margin-top: -19px;width: 80px;"><a href="cnt.php">Next</a></button>
                   
            </div>
        </div>
        </div>
    </div>
</div>
<!-- flat-modal end -->
<!-- home-modal -->
<div id="homeModal" class="modal fade" role="dialog">
        <div class="row">
            <div class="col-sm-10 col-md-10 col-lg-10"></div>
        <div class=col-sm-10 col-md-10 col-lg-10 class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" name="login"> &times;</button>
                <h2>Home Properties</h2>
            </div>
            <div class="modal-body image-panel">
              <div class="panel panel-info">
                <div class="panel-body">
                   <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.2500000"><img src="images/home1.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.3000000"><img src="images/home2.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.3500000"><img src="images/home3.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.4000000"><img src="images/home4.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.4500000"><img src="images/home5.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.5000000"><img src="images/home6.jpg"></a>
                </div>
              </div>
              <button type="button" class="btn btn-primary" style="float: right;margin-top: -19px;width: 80px;"><a href="cnt.php">Next</a></button>
                   
            </div>
        </div>
        </div>
    </div>
</div>
<!-- home-modal end -->
<!-- land-modal -->
<div id="landModal" class="modal fade" role="dialog">
        <div class="row">
            <div class="col-sm-10 col-md-10 col-lg-10"></div>
        <div class=col-sm-10 col-md-10 col-lg-10 class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" name="login"> &times;</button>
                <h2>Land Properties</h2>
            </div>
            <div class="modal-body image-panel">
              <div class="panel panel-info">
                <div class="panel-body">
                   <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.2500000"><img src="images/land1.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.3000000"><img src="images/land2.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.3500000"><img src="images/land3.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.4000000"><img src="images/land4.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.4500000"><img src="images/land5.jpg"></a>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Rs.5000000"><img src="images/land6.jpg"></a>
                </div>
              </div>
              <button type="button" class="btn btn-primary" style="float: right;margin-top: -19px;width: 80px;"><a href="cnt.php">Next</a></button>
                   
            </div>


        </div>
        </div>
    </div>
</div>
<!-- land-modal end -->

</div>

</div>
</div>
          
            
      <!-- script -->
    <script>
        $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
     
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>