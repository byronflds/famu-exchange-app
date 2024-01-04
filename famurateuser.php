<!DOCTYPE html>
<html>
<?php
require 'famuchecklogin.php';
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<style>

body {
    background: url(newfamu.jpg) no-repeat;
    background-attachment: fixed;
    background-position:center center;
    background-size:100% 100%;
}

.ui-page {
    background: transparent;
}
.ui-content{
    background: transparent;
}

.ui-form {
font-weight:bold;
}


</style>

</head>
<body>
  
	  <div data-role="page">
  <div data-role="header">
  <h1>Rate User</h1>
  <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famumodifyusers.php">Modify User</a></li>
        <li><a href="famutransactionsreport.php">Transactions Report</a></li>
      </ul>
    </div>
  </div>
  
    <form id='register' action='famuuserrating.php' method='post'>

<label for='userrated' >What user would you like to rate?: </label>
<input type='text' name='userrated' id='userrated' />
<label for='itemprice' >Rating(1-5): </label>
<input type='number' name='rating' id='rating' />
<input type="submit" name = "submit" data-inline="true" value="Submit">


</form>

  </div>

  </body>
  

