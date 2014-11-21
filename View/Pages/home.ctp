
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first"><a href="home.php">You Are Here</a></li>
      <li>&#187;</li>
      <li class="current"><a href="login.php">Login</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <h1>Welcome</h1>
	
	<?php
	if (@$_SESSION['HandleError']!='')
		echo "<font color='red'>".$_SESSION['HandleError']."</font>";
	$_SESSION['HandleError']='';
	?>    
   
	
    <br>
    <br>
    <br>
</div> 
  </div>
</div>