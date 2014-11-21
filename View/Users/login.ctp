
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li class="current"><a href="login.php">Login</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <h1>Login</h1>

	<form id='login' action='login' method='post' accept-charset='UTF-8'>
	<fieldset >
    <?php echo __('Please enter your username and password'); ?>
	<?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
     </form>
	<br>
	<?php
	if (@$_SESSION['HandleError']!='')
		echo "<font color='red'>".$_SESSION['HandleError']."</font>";
	$_SESSION['HandleError']='';
	?>    
    </div> 
  </div>
</div>