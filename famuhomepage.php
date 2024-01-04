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
  <h1>Famu Exchange</h1>
  <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famuforsale.php">For Sale</a></li>
        <li><a href="famupostitems.php">Post Item</a></li>
      </ul>
    </div>
  </div>


  </body>
  <div data-role="footer">		
	<div data-role="navbar">
		<ul>
			<li><a href="famuregistration.php">Registration</a></li>
            <li><a href="famurateuser.php">Account Info</a></li>
		    <li><a href="famulogout.php">Log Out</a></li>
		</ul>
	</div> <!-- /navbar -->
</div> <!-- /footer -->
