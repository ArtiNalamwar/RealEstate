<?php 
    if(isset($_REQUEST["submit"]))
{
  $email=$_REQUEST["email"];
  $password=$_REQUEST["password"];  
  
  $con=mysqli_connect("localhost","root","","mydb");
  if($con)
  {
  mysqli_query($con,"insert into admlogin values('$email','$password')");
  if($email==="admin@gmail.com" && $password==="admin")  
  if(mysqli_affected_rows($con))
  {
    echo "<script>alert('Welcome User');</script>";
  }
  else
  {
    echo "<script>alert('Invalid User');</script>";
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
        body{
            background-color: gray;
            overflow-x: hidden;
            font-family: serif;
        }
        
        .main img{
          width: 100%;
          height: 400px;
          display: block;
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
    .main:hover .overlay {
      opacity: 1;
    }
    .content p{
      margin-top: 50px;
      font-size: 60px;
      text-align: center;
      font-weight: bold;

    }
    .footer{
      display: block;
      text-align: center;
      font-size: 30px;
      margin-top: 80px;
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
              <!-- modal code -->
              
        <div id="loginModal" class="modal fade" role="dialog">
        <div class="row">
            <div  class=col-sm-6 col-md-6 col-lg-6></div>
        <div  class=col-sm-6 col-md-6 class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" name="login"> &times;</button>
                <h4>Admin Login</h4>
            </div>
            <div class="modal-body">
                   <form action="record.php" method="post" role="form" class="form-horizontal">
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
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit" action="record.php">
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
<div class="col-sm-12 col-md-12 col-lg-12 main">
    <img src="images/property.jpg">
    <div class="overlay">Search Your Dreamed Property.... </div>
</div>
<div class="col-md-12 content">
            <p>Admin Panel</p>
</div>
</div>
</div>
<footer class="footer">&copy; RealEstate.com</footer>


    <!-- javascript plugins -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

