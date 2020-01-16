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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <style type="text/css">
      .navbar{
            font-size: 20px;
        }
        .navbar-brand{
            font-size: 30px;
        }
        body{
          background-color: gray;
          font-family: serif;
          font-size: 20px;
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
      font-size: 40px;
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
          <div class="col-sm-12 col-md-12 col-lg-12 main">
            <img src="images/property.jpg">
            <div class="overlay">Search Your Dreamed Property.... </div>
          </div>
          <div class="col-md-12 content">
            <p>We Are Positive,Honest,Brave And Determine To Give Our Best,<br>  
            It All Starts With A Vision,We Help U To Achieve Your Dreams...</p>
            
          </div>
        </div>




        </div>
        <footer class="footer">&copy; RealEstate.com</footer>
              


    <!-- javascript plugins -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

