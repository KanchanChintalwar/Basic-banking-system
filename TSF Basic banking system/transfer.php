

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <title>Transaction</title>

    <style>
    	
		
        a:hover{
            background-color:navy;
            color:white;
        }
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        
        .transfer{
            background-color: #5E11A3;
            border: 2px solid #5E11A3;
            border-radius:10px;
            color: white;
            padding: 5px 50px;
            text-align: center;
            /* display: inline-block; */
            font-size: 20px;
            margin: 20px 130px;
            cursor: pointer;
            /* text-decoration:none; */
        }
        
        .back{
            background-color: #5E11A3;
            border: 2px solid #5E11A3;
            border-radius:10px;
            color: white;
            padding: 5px 50px;
            text-align: center;
            font-size: 20px;
            margin: 20px 270px;
            cursor: pointer;
        
		}
	    .transfer:hover{
			background-color:powderblue;
            color:black;
			transform: scale(1.1);
		}
        .back:hover{
            background-color:powderblue;
            color:black;
			transform: scale(1.1);
        }
        .navbar
        {
            width:100%;
            white-space:nowrap;
            background-color: #5E11A3;
        }
        .main_div
        {
            width:100%;
            height:100vh;
        
        }


    </style>
</head>

<body>
<div class="main_div">
 
 <div class="navbar navbar-expand-md">

  <label href="#" class="navbar-brand font-weight-bold text-white text-center">THE SPARK BANK</label>
  <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
  <span class="navbar-toggler-icon" style="background:white;"></span>
  </button>
 
   <div class="collapse navbar-collapse text-center" id="collapsenavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="index.php" class="nav-link text-white">HOME</a></li>
          
          <li class="nav-item">
              <a href="transfermoney.php" class="nav-link text-white">VIEW USERS</a></li>
          <li class="nav-item">
              <a href="contact.php" class="nav-link text-white">CONTACT</a></li>    
           </ul>
    </div>
 </div>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
        <h2 class="card-title">Transaction</h2>


</div>

<div class="card-body">
<div class="row">
<div class="col-md-8">
<form action="" method="post">
<div class="form-group">
<label>Sender detail:</label>
<input type="text" name="get_name" class="form-control" placeholder="Enter Sender name" required>
</div>

<label>Receiver detail:</label>
<input type="text" name="to" class="form-control" placeholder="Enter Reciever name" required>

<br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="transfer" name="submit" type="submit" id="myBtn">Transfer</button>
            
           
            </div>
</form>
<a href="index.php" class="back" id="myBtn2">Back</a>
</div></div>
</div></div></div></div>
<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_POST['get_name'];
    $query="SELECT * FROM users WHERE name='$from'";
    $query_run= mysqli_query($conn,$query);
    $sql1 = mysqli_fetch_array($query_run); // returns array or output of user from which the amount is to be transferred.
    
    $to = $_POST['to'];
    $query="SELECT * FROM users WHERE name='$to'";
    $query_run= mysqli_query($conn,$query);
    $sql2 = mysqli_fetch_array($query_run);

    $amount = $_POST['amount'];
    

    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if($amount == 0){

        echo "<script> alert('Oops ! Zero value cannot be transferred.');
        
        </script>";
     }
  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    else {
               
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance WHERE name='$from'";
                // echo $sql['balance'];
                mysqli_query($conn,$sql);
                


                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance WHERE name='$to'";
                // echo $sql['balance'];
                mysqli_query($conn,$sql);
    
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                    
                    header("Location: sucess.php");
                    exit();
                   
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

