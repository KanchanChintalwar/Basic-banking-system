<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <title>Transaction history</title>
</head>
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
    height:100%;
 
}
a:hover{
    background-color:navy;
    color:white;
}
body{
    width:auto;
    height:auto;
    background-image:url('images/bg_history.PNG');
}
table {
				width: 1000px;
                /* padding:100px; */
                /* margin-left:140px; */
				
			}
			table, th, td {
				/*border: 2px solid black;*/
				border-bottom: 2px solid grey;
				border-collapse: collapse;
        

			}
			td, th{
				text-align: center;
				padding: 10px;
				vertical-align:middle;
                color: black;
                
			}
			thead tr {
				background: #FFE4B5;
				
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
              <a href="transfermoney.php" class="nav-link text-white">VIEW USERS</a></li>
          <li class="nav-item">
              <a href="contact.php" class="nav-link text-white">CONTACT</a></li>    
           </ul>
    </div>
 </div>

	<div class="container">
        <h1 class="text-center pt-4"><b>Transaction History</b></h1>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-condensed">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['Datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>
