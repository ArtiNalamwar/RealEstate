<?php

$host="localhost";
$user="root";
$password="";
$database="mydb";

$propertyid="";
            $name="";
            $email="";
            $Address="";
            $city="";
            $state="";
            $zipcode="";
            $cardname="";
            $creditno="";
            $expmonth="";
            $expyear="";
            $cvv="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
     $conn = mysqli_connect($host,$user,$password,$database);
 }catch (MySQLi_Sql_Exception $ex) {

  echo ("error in connecting..");
 }

function getVALUES()
{
  $value=array();
  $value[1]=$_POST['propertyid'];
  $value[2]=$_POST['name'];
  $value[3]=$_POST['email'];
  $value[4]=$_POST['Address'];
  $value[5]=$_POST['city'];
  $value[6]=$_POST['state'];
  $value[7]=$_POST['zipcode'];
  $value[8]=$_POST['cardname'];
  $value[9]=$_POST['creditno'];
  $value[10]=$_POST['expmonth'];
  $value[11]=$_POST['expyear'];
  $value[12]=$_POST['cvv'];
  return $value;
}
 
if(isset($_POST['search']))
 {

     $info =getVALUES();

     $search_query="SELECT * FROM contact WHERE propertyid = '$info[1]' ";
     $search_result=mysqli_query($conn, $search_query);

     if($search_result)
     {
        if(mysqli_num_rows($search_result))
        {
          while($rows =mysqli_fetch_array($search_result))
          {
            $propertyid=$rows['propertyid'];
            $name=$rows['name'];
            $email=$rows['email'];
            $address=$rows['address'];
            $city=$rows['city'];
            $state=$rows['state'];
            $zipcode=$rows['zipcode'];
            $cardname=$rows['cardname'];
            $creditno=$rows['creditno'];
            $expmonth=$rows['expmonth'];
            $expyear=$rows['expyear'];
            $cvv=$rows['cvv'];
           }
        }else{
          echo ("No Data Are Available");
        }
     }else{
      echo ("result eror");
     }

 }
 //insert

 if(isset($_POST['insert'])){
   $info = getVALUES();
   $insert_query="INSERT INTO `contact`(propertyid, name, email, Address, city, state, zipcode,  cardname, creditno, expmonth, expyear, cvv) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]')";

   // $insert_query="INSERT INTO `cnt`(`propertyid`, `name`, `email`, `Address`, `city`, `state`, `zipcode`, `cardname`, `creditno`, `expmonth`, `expyear`, `cvv`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])";
  try{
       $insert_result=mysqli_query($conn,$insert_query);
       if($insert_result)

       {
         if(mysqli_affected_rows($conn)>0){
              echo("data inserted successfully..");

         }else{
                echo("data not inserted..");
         }
       }
  }catch(Exception $ex){
        echo("error inserted".$ex->getMessage()); 
  }

 }
 //delete
 if(isset($_POST['delete'])){
    $info = getVALUES();
    $delete_query="DELETE FROM `contact` WHERE propertyid='$info[1]'";

    // $delete_query="DELETE FROM `cnt` WHERE 1";
    try{
         $delete_result=mysqli_query($conn,$delete_query);
         if($delete_result){
          if(mysqli_affected_rows($conn)>0)
          {
             echo("data deleted..");
          }else{
             echo("data not deleted");
          }
         }
    }catch(Exception $ex){
        echo("error in delete".$ex->getMessage());
    }
 }
 //edit
 if(isset($_POST['update'])){
     $info=getVALUES();
     // $update_query="UPDATE `cnt` SET '$name'='$info[1]','$email'='$info[2]','$Address'='$info[3]','$city'='$info[4]','$state'='$info[5]','zipcode'='$info[6]','cardname'='$info[7]','creditno'='$info[8]','expmonth'='$info[9]','expyear'='$info[10]','cvv'='$info[11]'WHERE propertyid='$info[0]'";

     $update_query="UPDATE `contact` SET propertyid='$info[1]',name='$info[2]',email='$info[3]',Address='$info[4]',city='$info[5]',state='$info[6]',zipcode='$info[7]',cardname='$info[8]',creditno='$info[9]',expmonth='$info[10]',expyear='$info[11]',cvv='$info[12]' WHERE propertyid='$info[1]'";
     try{
          $update_result=mysqli_query($conn,$update_query);
          if($update_result){
            if(mysqli_affected_rows($conn)>0){
              echo("data updated");
            }else{
              echo("data not updated");
            }
          }
     }catch(Exception $ex){
          echo("error in update".$ex->getMessage());
     }
 }

?>

  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <style type="text/css">
      .inword{
        word-spacing: 100px;
        margin-left: 60px;
      }
      .inword input{
        font-size: 20px;
        width: 100px;
      }
        button{
          font-size: 100px;
          width: 100px;
          height: 35px;
        }
        form{
          border: 2px solid white;
          background-color: #f2f2f2;
          padding: 20px;
          margin-top: 10px;
        }
    </style>
  </head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <body style="background-color: grey;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2">
    <!-- <fieldset style="width: 50%; margin-left: 400px; background-color: #f8f8f8;"> -->
    <form class="form-horizontal" action="record.php" method="post">
      <select class="PropertyId" name="propertyid" placeholder="PROPERTYID" value="<?php echo $propertyid;?>">
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
    <!-- <input type="number" name="propertyid" placeholder="PROPERTYID" value="<?php  $propertyid;?>"><br></br> -->
    <input type="text" class="form-control" name="name" placeholder="NAME" value="<?php echo $name;?>"><br></br>
    <input type="text" class="form-control" name="email" placeholder="EMAIL"  value="<?php echo $email;?>"><br></br>
    <input type="text" class="form-control" name="Address" placeholder="ADDRESS"  value="<?php echo $Address;?>"><br></br>
    <input type="text" class="form-control" name="city" placeholder="CITY"  value="<?php echo $city;?>"><br></br>
    <input type="text" class="form-control" name="state" placeholder="STATE"  value="<?php echo $state;?>"><br></br>
    <input type="text" class="form-control" name="zipcode" placeholder="ZIPCODE"  value="<?php echo $zipcode;?>"><br></br>
    <input type="text" class="form-control" name="cardname" placeholder="CARDNAME"  value="<?php echo $cardname;?>"><br></br>
    <input type="text" class="form-control" name="creditno" placeholder="CREDITNO"  value="<?php echo $creditno;?>"><br></br>
    <input type="text" class="form-control" name="expmonth" placeholder="EXPMONTH"  value="<?php echo $expmonth;?>"><br></br>
    <input type="text" class="form-control" name="expyear" placeholder="EXPYEAR"  value="<?php echo $expyear;?>"><br></br>
    <input type="text" class="form-control" name="cvv" placeholder="CVV"  value="<?php echo $cvv;?>"><br></br>
    <div class="inword">
      
      <input type="submit" name="insert" value="Add">
      <input type="submit" name="update" value="Update">
      <input type="submit" name="delete" value="Delete">
      <input type="submit" name="search" value="Find">
      <!-- <input type="submit" name="print" value="print"> -->
      <button onclick="myFunction()">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>

    </div>
  
    </form>
  <!-- </fieldset> -->
</div>
</div>
</div>
  </body>
  </html>