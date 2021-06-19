<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

.display_table
{
    width:80vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
}
.center_div
{
    width:1280px;
    height:auto;
    background-image:url('images/bgview.PNG');
    /* background-repeat:no-repeat; */
    background-size:100%;
    padding-top:20px;
    padding-bottom:20px;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    
}  
h1
{
    font-size:30px;
    color:#000;
    text-align:center;
    padding-top:150px;
    padding-left:150px;
    margin-top:-10px;
    margin-bottom:10px;
    
}

table {
				width: 1000px;
                /* padding:100px; */
                margin-left:140px;
				
			}
			table, th, td {
				/*border: 2px solid black;*/
				border-bottom: 2px solid silver;
				border-collapse: collapse;
        

			}
			td, th{
				text-align: center;
				padding: 10px;
				vertical-align:middle;
                color: white;
                
			}
			tbody tr:hover {
				background: black;
			}
			thead tr {
				background: purple;
				color: white;
				
			}

a:hover{
    background-color:navy;
}

.btn{
        transition: 1.5s;
        background-color:purple;
        color:white;
      }
.btn:hover{
        background-color:pink;
        color: black;
      }

</style>



<body>
<div class="main_div">
 
 <div class="navbar navbar-expand-md">

  <c class="navbar-brand font-weight-bold text-white text-center">THE SPARK BANK</c>
  <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
  <span class="navbar-toggler-icon" style="background:white;"></span>
  </button>
 
   <div class="collapse navbar-collapse text-center" id="collapsenavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="index.php" class="nav-link text-white">HOME</a></li>
          
           </ul>
    </div>
 </div>

 <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
       
      <div class="display_table">
             <h1><b>Customer Details</b></h1>
             <div class="center_div">

             <div class="table-responsive-sm">
                    <table>
                        <thead>
                            <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">E-Mail</th>
                            <th class="text-center">Account no.</th>
                            <th class="text-center">Balance</th>
                            <th class="text-center">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email Id']?></td>
                        <td class="py-2"><?php echo $rows['Account no.']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                </tbody>
            </table>
            </div>

        </div>
    </div> 
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
