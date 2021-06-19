<!doctype html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark Bank</title>
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
 
}

#center {
  width: 100%;
  height: 175px;
  
  
}
.container{
  width:auto;
  height: 400px;
  border:1px solid silver;
  margin-top:50px;
}
#bank{
    float:left;
    margin-left:80px;
    height:300px;
    width:280px;
    padding: 10px;
    box-shadow: 5px 10px 18px silver;
    margin-top:50px;
    
}
.text{
  float:left;
  margin-left:100px;
  margin-top:50px;
}
footer{
  background-color:black;
  height:75px;
  color:white;
}
a:hover{
            background-color:navy;
            color:white;
        }
</style>


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
              <a href="transfer.php" class="nav-link text-white">TRANSACT</a></li>
          <li class="nav-item">
              <a href="transfermoney.php" class="nav-link text-white">VIEW USERS</a></li>
          
           </ul>
    </div>
 </div>
 <img src="images/contact us.PNG" id="center">
 <div class="container">
 
 <img src="images/bank.PNG" id="bank">
 <div class="text">
 <div class="add">
 <h4>Address</h4>
 <p><i>Plot No 8, Madhuri Kishor Chambers,</br> CTS No 93/B, Senapati Bapat Rd,</br> Pune, Maharashtra 411016</i></p></div>
 
 <h4>Phone no.</h4>
 <p>1800 11 2233</p>
 <h4>Email Id</h4>
 <p>thesparkbank@gmail.com</p>
 </div>
 
 
 </div>
 <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Kanchan Chintalwar</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
