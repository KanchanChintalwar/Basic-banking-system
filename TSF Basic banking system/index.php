<!doctype html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark Bank</title>
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
 
}

.bgSizeCover {
  background-color:black;

  width: auto;
  height: 300px;
  
  
}

#right{    
 float: right;  
 margin-top:100px;
 height: 200px;  
 width: 250px;  
 
 /* border: 7px ridge blue;  */
 }
 #left{
     float:left;
     margin-left:50px;
     height: 300px;  
    width: 300px;  
 
 /* border: 7px ridge blue;  */
 }

 body{
     background-color:powderblue;
 }
.options{
    height:500px;
    width:auto;
    margin-top:100px;
    /* border:2px solid blue; */
}

#view{
    float:left;
    margin-left:110px;
    height:300px;
    width:280px;
    /* border:1px solid black; */
    border-radius:10px;
}
#transact{
    float:center;
    height: 300px;
  width: 280px;
  /* margin-top:20px; */
  margin-left:100px;
  /* border: 1px solid black; */
  border-radius:20px;
 
}

#history{
    float:right;
    height: 300px;
  width: 280px;
  margin-right:110px;
  margin-left:10px;
  /* border: 1px solid black; */
  border-radius:20px;
  
}


.i{
    color:white;
    font-size:60px;
    text-align:center;
    padding-top:80px;
}
h3{
    color:white;
    font-size:20px;
    text-align:center;
    /* margin-bottom:80px; */
}

.leftbtn {
            background-color: #5E11A3;
            border: 2px solid #5E11A3;
            border-radius:10px;
            color: white;
            padding: 5px 50px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 40px 130px;
            cursor: pointer;
            text-decoration:none;
        }

.midbtn {
    
    background-color: #5E11A3;
    border: 2px solid #5E11A3;
    border-radius:10px;
    color: white;
    padding: 5px 50px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    margin: 40px 20px;
    cursor: pointer;
    text-decoration:none;
}

.rightbtn {
    
    background-color: #5E11A3;
    border: 2px solid #5E11A3;
    border-radius:10px;
    color: white;
    padding: 5px 50px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    margin: 40px 102px;
    cursor: pointer;
    text-decoration:none;
}

a:hover{
    background-color:navy;
    color:white;
}
footer{
  background-color:black;
  height:75px;
  color:white;
}
</style>

<body>

<div class="main_div">
 
 <div class="navbar navbar-expand-md">

  <!-- <a href="#" class="navbar-brand font-weight-bold text-white text-center">THE SPARK BANK</a> -->
  <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
  <span class="navbar-toggler-icon" style="background:white;"></span>
  </button>
 
   <div class="collapse navbar-collapse text-center" id="collapsenavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="#" class="nav-link text-white">HOME</a></li>
          <li class="nav-item">
              <a href="transfer.php" class="nav-link text-white">TRANSACT</a></li>
          <li class="nav-item">
              <a href="transfermoney.php" class="nav-link text-white">VIEW USERS</a></li>
          <li class="nav-item">
              <a href="contact.php" class="nav-link text-white">CONTACT</a></li>    
           </ul>
    </div>
 </div>
 <div class="bgSizeCover">
 <img src="images/Coin.PNG" id="right">
 <img src="images/notes.PNG" id="left">
  <p class="i"><b>THE SPARK BANK</b></p>
  <h3><i>Money transfer made easy...</i></h3>
</div>

<div class='options'>

<img src="images/view users.PNG" id="view">


<img src="images/Transaction.PNG" id="transact">


<img src="images/history.PNG" id="history">

<a href="transfermoney.php" class="leftbtn">View all Users</a>
<a href="transfer.php" class="midbtn">Transfer Money</a>
<a href="transactionhistory.php" class="rightbtn">Transaction History</a>

</div>
<footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Kanchan Chintalwar</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>




