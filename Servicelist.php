<!--?php

include("connect.php");

?-->

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HELP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}



.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  max-width: 300px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<?php
	include_once('header.php');?>
<div class="row">
<!--?php
                 
                $query = "SELECT * FROM services ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?-->  

			
<div class="column">
<!--a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="<!?php echo $row['icon']?>" width=50%>
  <h1 style="color:white;"><php echo $row['sname']?></h1>
  
</center>

</div>
 </a-->

 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/ambulance.png" width=50%>
  <h1 style="color:white;"><?php echo "Ambulance"?></h1>
  
</center>

</div>
 </a>
                     </div>
                     <div class="column">
 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/fire.png" width=50%>
  <h1 style="color:white;">Fire Bregade</h1>
  
</center>

</div>
 </a>

</div>

<div class="column">
 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/child.png" width=50%>
  <h1 style="color:white;">Child Secices</h1>
  
</center>

</div>
 </a>

</div>

<div class="column">
 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/gbv.png" width=50%>
  <h1 style="color:white;">Gender Based Violence assistance</h1>
  
</center>

</div>
 </a>

</div>

<div class="column">
 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/psycho.png" width=50%>
  <h1 style="color:white;">Mental Wellness</h1>
  
</center>

</div>
 </a>

</div>

<div class="column">
 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/crime.png" width=50%>
  <h1 style="color:white;">Crime Report</h1>
  
</center>

</div>
 </a>

</div>

<div class="column">
 <a href="providers.php">
<div class="card" style="background:red;" >
<center>
  <img src="images/disasters.png" width=50%>
  <h1 style="color:white;">Disaster Assistance</h1>
  
</center>

</div>
 </a>

</div>

<!--?php  
                     }  
                }  
                ?-->  
                  
</div>
</body>
</html> 