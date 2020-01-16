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
          /*background:linear-gradient(gray,white);*/
          font-size: 20px;
        }
        .jumbotron{
          height: 200px;
        }
        .jumbotron p{
          font-size: 60px;
          text-align: center;
        }
          .content1 p{
            background-color: #eee;
            font-size: 30px;
            text-align: center;
          }
          .content2{
            margin-top: 200px;
          }
          .content2 p{
            background-color: #eee;
            font-size: 30px;
          }
          #p1{
            text-align: left;
          }
          #p2{
            text-align: right;
            margin-top: -10px;
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
          <div class="col-md-offset-2 col-md-8 col-md-offset-2">
            <div class="jumbotron">
              <p>About Us..</p>
              <h2 style="text-align: center;">----Our Story----</h2>
            </div>
          </div>
        </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-md-offset-1 content1">
                    <p>Our success is not only due to the QUALITY of our work<br> it's down to ATTITUDE,
                    Our approach and the way we treat our CLIENTS....</p>
                </div> 
                <div class="col-md-12 content2">
                  <p id="p1">
                    OUR VISION?....OUR OUTCOME?....<br>
                    At Real Estate we believe everyone deseves to have their dreamed property....<br>
                    That is why we always give our 100%....<br>
                  </p>
                  <p id="p2">
                    HOW WE WORK?....<br>
                    We talk,we listen,we answer to our client needs..<br>
                    Also we bet on a simple and honest communication..<br>
                  </p>
                  
                </div>
            </div>
              
            
        </div>


    <!-- javascript plugins -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

