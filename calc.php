<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    #loading, #results {
        display: none;
}

    .panel{
      border: 1px solid black;
      left: -100px;
      top: 50px;

      }
    .form-group input{
      width: 200%;
    }

  </style>
</head>
<body>
  <!-- html -->
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

      <div class="container">
      <div class="row">
        <div class="col-md-6 panel">
          <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Loan Calculator</h1>
            <form id="loan-form">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Amount</span>
                  </div>
                  <input type="number" id="amount" placeholder="Loan Amount" class="form-control" name="" value="" style="width: 200%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Percent</span>
                  </div>
                  <input type="number" id="interest" placeholder="Interest" class="form-control" name="" value="" style="width: 200%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Years To Repay</span>
                  </div>
                  <input type="number" id="years" placeholder="Years To Repay" class="form-control" name="" value="" style="width: 200%;">
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="" value="Calculate" class="btn btn-dark btn-block">
              </div>
            </form>
            <!-- Loader  -->
            <div id="loading">
              <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif" alt="Loading Gif" style="height: 100px;" class="img-fluid">
            </div>
            <!-- Result  -->
            <div id="results" class="pt-4">
              <h5>Results:</h5>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Monthly Payment</span>
                  </div>
                  <input type="number" id="monthly-payment" class="form-control" name="" value="" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Total Payment</span>
                  </div>
                  <input type="number" id="total-payment" class="form-control" name="" value="" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Total Interest</span>
                  </div>
                  <input type="number" id="total-interest" class="form-control" name="" value="" disabled>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- video sec -->
        <div class="col-md-6" style="text-align: center; margin-top: 50px;">
            <video width="800"controls>
              <source src="video/RES.mp4" type="video/mp4">
              <source src="video/RES.ogg" type="video/ogg">
            </video>
                <p style="text-align: center; font-size: 30px; font-weight: bold;">FUTURE OF REAL ESTATE IN INDIA</p>

        </div> 
        </div>
      </div>

    <!-- javascript -->
    <script type="text/javascript">
          document.getElementById('loan-form').addEventListener('submit', function(e) {
  e.preventDefault();
  // Hide results
  document.querySelector('#results').style.display = 'none';
  // Show loader
  document.querySelector('#loading').style.display = 'block';
  // Set timer
  setTimeout(calculateResults, 500);
});

function calculateResults(e) {
  // UI Vars
  const amount = document.getElementById('amount');
  const interest = document.getElementById('interest');
  const years = document.getElementById('years');
  const monthlyPayment = document.getElementById('monthly-payment');
  const totalPayment = document.getElementById('total-payment');
  const totalInterest = document.getElementById('total-interest');

  const principal = parseFloat(amount.value);
  const calculatedInterest = parseFloat(interest.value) / 100 / 12;
  const calculatedPayments = parseFloat(years.value) * 12;

  // Compute monthly payments
  const x = Math.pow(1 + calculatedInterest, calculatedPayments);
  const monthly = (principal * x * calculatedInterest) / (x - 1);

  if (isFinite(monthly)) {
    monthlyPayment.value = monthly.toFixed(2);
    totalPayment.value = (monthly * calculatedPayments).toFixed(2);
    totalInterest.value = ((monthly * calculatedPayments) - principal).toFixed(2);
    document.querySelector('#results').style.display = 'block';
    document.querySelector('#loading').style.display = 'none';
  } else {
    showError('Please Enter The Values');
  }
}

// Show Error
function showError(error) {
  // Hide results
  document.querySelector('#results').style.display = 'none';
  // Hide loader
  document.querySelector('#loading').style.display = 'none';
  // Create a div
  const errorDiv = document.createElement('div');
  // Get elements
  const card = document.querySelector('.card');
  const heading = document.querySelector('.heading');
  // Add class
  errorDiv.className = 'alert alert-danger';
  // Create text node and append to div
  errorDiv.appendChild(document.createTextNode(error));
  // Insert error above heading
  card.insertBefore(errorDiv, heading);
  // Clear error after 3 seconds
  setTimeout(clearError, 3000);
}

// Clear error
function clearError() {
  document.querySelector('.alert').remove();
}

    </script>

  
      
<!-- javascript plugins -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  </body>
</html>

<?php 
    if(isset($_REQUEST["submit"]))
{
  $amount=$_REQUEST["amount"];
  $interest=$_REQUEST["interest"];
  $years=$_REQUEST["years"]; 
  $monthlyPayment=$_REQUEST["monthly-payment"];
  $totalPayment=$_REQUEST["total-payment"];
  $totalInterest=$_REQUEST["total-interest"];  
         
        
  $con=mysqli_connect("localhost","root","","property");
  if($con)
  {
  mysqli_query($con,"insert into calc values('$amount', '$interest', '$years', '$monthly-payment', '$total-payment', '$total-interest')");
  if(mysqli_affected_rows($con))
  {
    echo"Data inserted successfull";
  }
  else
  {
    echo "Data not inserted successfull";
  }
  }
  mysqli_close($con);
}
?>
 
