<!--?php

include("connect.php");

?-->


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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
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
                 
                <!--$query = "SELECT * FROM prividers ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?-->  

<center>			

<div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "National Police Service"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Police 999"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["999"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "National Police Service"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Police 112"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["112"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "National Police Service"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Police 911"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["911"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "AMREF flying doctors"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0203315454"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "AMREF flying doctors"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0203315455"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "AAR Emergency Ambulance"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0202717374"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Kenya Red Cross Society Ambulance"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0203950000"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Avenue Rescue Services"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0203743858"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "St. John Ambulance"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0202210000"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Nairobi Fire Brigade"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Fire Brigade"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0202222181"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Nairobi Fire Brigade"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Fire Brigade"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0202222182"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Nairobi Fire Brigade"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Fire Brigade"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0202344599"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Emergency Hotline"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Ambulance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0206982999"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "BEFRIENDERS KENYA HELPLINE"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Mental Wellness"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["+254722178177"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Niskize"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Mental Wellness"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0900620800"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Emergency Medicine Kenya Foundation (EMKF)"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Suicide Prevention Hotline"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["0800723253"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Oasis Africa"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Mental Wellness"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["+254725366614"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Cognitive Behavioral Therapy-Kenya"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Mental Wellness"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["+254739935333"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "UNICEF Children Welfare Services"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Child Wellness Services"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["116"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "National GBV hotline"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Gender Based Violence Assistance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["1195"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Counselling Hotline"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Gender Based Violence Assistance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["1190"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "UNHCR toll-free number"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Gender Based Violence Assistance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["1517"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>

  <div class="card">
  <div class="container">
  <div style="float:left;">
    <h4><b><?php echo "Refugee Affairs Secretariat (RAS)"; ?></b></h4> 
    <h4><small>Service:</small><b><?php echo "Disaster Assistance"; ?></b></h4>
	</div>
	

	<div class="container">

  <!-- Button to Open the Modal -->
 <button style="float:right;" type="submit" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;"><a href="tel:<?php echo ["+254722391379"]?>" style="color:white;">CALL</a></button>
<!--button style="float:right;" class="btn btn-primary mb-2" style="padding:25px 0px 30px 0px;" type="button" data-toggle="modal" data-target="#myModal">FORM</button-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Fill Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-style-2-heading"></div>
<form id="signup-form" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required /></label><br />
<label><span>Phone <span class="required">*</span></span><input width=20px type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="9" required /></label><br />
<label for="field4"><span>Report<span class="required">*</span><br /></span><input type="textarea" class="input-field" name="report" value="What's The Problem" required /></label>
<textarea class="input-field" name="report" value="What's The Problem" required></textarea>

<button type="submit" class="btn btn-primary" onclick="*" >Submit</button>
</form>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
</div>

	</div>


</div>
</center>
<!--?php  
                     }  
                }  
                ?-->  
                <div style="clear:both"></div>  
                <br />  

</body>
</html> 