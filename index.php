<?php 
    if(isset($_REQUEST["signup"]))
{
  $name=$_REQUEST["name"];
  $email=$_REQUEST["email"];
  $mobile=$_REQUEST["mobile"];  
  $password=$_REQUEST["password"];          
          
  $con=mysqli_connect("localhost","root","","mydb");
  if($con)
  {
  mysqli_query($con,"insert into signup values('$name','$email',$mobile,'$password')");
  if(mysqli_affected_rows($con))
  {
   echo "<script>alert('signup successfull');</script>";
  }
  else
  {
    echo "<script>alert('signup not successfull');</script>";
  }
}
  mysqli_close($con);
}

 ?>
 <?php 
    if(isset($_REQUEST["submit"]))
{
  $email=$_REQUEST["email"];
  $password=$_REQUEST["password"];          
          
  $con=mysqli_connect("localhost","root","","mydb");
  if($con)
  {
  mysqli_query($con,"insert into login values('$email','$password')");
  if(mysqli_affected_rows($con))
  {
    echo "<script>alert('login successfull');</script>";
  }
  else
  {
    echo "<script>alert('not successfully login');</script>";
  }
}
  mysqli_close($con);
}
?>

<!-- htmlcode -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- css -->
    <style type="text/css">
        .navbar{
            font-size: 20px;
        }
        .navbar-brand{
            font-size: 30px;
        }
        .page-header{
            margin: 20px 0 20px;
           }
           html{
            overflow-y: hidden;
           }
           .modal-content{
            margin-top: 100px;
            margin-right: 10px;                  
            width: 70%;
        }
        .carouselset img{
            height: auto;
            width: auto;
        }
        body{
            background-color: gray;
            overflow-x: hidden;
            font-family: serif;
            font-size: 20px;
        }

    </style>

   </head>
  <body>

    <!-- html code -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Real Estate</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact Us</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> About Us</a></li>
        <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
              <!-- modal code -->
              <div id="signupModal" class="modal fade" role="dialog">
       <div class="row">
        <div class=col-sm-6 col-md-6></div>
        <div class=col-sm-6 col-md-6 class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Signup</h4>
            </div>
            <div class="modal-body">
                   <form action="index.php" method="post" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name"placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="mobile" class="form-control" name="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="signup">
                                            Signup</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
            </div>

        </div>
        </div>
    </div>
</div>
<div id="loginModal" class="modal fade" role="dialog">
        <div class="row">
            <div  class=col-sm-6 col-md-6 col-lg-6></div>
        <div  class=col-sm-6 col-md-6 class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" name="login"> &times;</button>
                <h4>Login</h4>
            </div>
            <div class="modal-body">
                   <form action="dashboard.php" method="post" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password"placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit" action="dashboard.php">
                                            submit</button>
                                        <a href="">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- carousel -->
<div class="row">
    <div class="col-md-offset-1 col-md-10 col-md-offset-1"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" class="carouselset" role="listbox">
    <div class="item active">
      <img src="images/flat.jpg" alt="Flat">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="images/home.jpg" alt="Home">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="images/land.jpg" alt="Land">
      <div class="carousel-caption">
      </div>
    </div>
<!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

    </div>
</div>
    

    <!-- javascript plugins -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

