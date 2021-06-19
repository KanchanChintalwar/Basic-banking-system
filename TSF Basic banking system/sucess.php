<!doctype html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction successful</title>
</head>

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
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
    width:1280px;
 
}
a:hover{
    background-color:navy;
    color:white;
}
#center{
   
position:absolute;
width:256px;
height:256px;
top:54%;
left:50%;
margin: -128px 0 0 -128px;
z-index:1000;
}

h2{
    margin-left:480px;
    margin-top: 50px;
    /* margin-bottom:100px; */
    color:#4CBB17;

}

</style>

<body>

<div class="main_div">
 
 <div class="navbar navbar-expand-md">

  <h4 class="navbar-brand font-weight-bold text-white text-center">THE SPARK BANK</h4>
  <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
  <span class="navbar-toggler-icon" style="background:white;"></span>
  </button>
 
   <div class="collapse navbar-collapse text-center" id="collapsenavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="index.php" class="nav-link text-white">HOME</a></li>
          <li class="nav-item">
              <a href="transfer.php" class="nav-link text-white">TRANSACT</a></li>
          <li class="nav-item">
              <a href="transfermoney.php" class="nav-link text-white">VIEW USERS</a></li>
              <li class="nav-item">
              <a href="transactionhistory.php" class="nav-link text-white">HISTORY</a></li>
          <li class="nav-item">
              <a href="contact.php" class="nav-link text-white">CONTACT</a></li>    
           </ul>
    </div>
 </div>
 <img src="images/check-circle.gif" id="center">
 <h2>Transaction Successful!!<h2>
</div>

</body>
</html>
