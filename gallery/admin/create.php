<?php require_once('includes/header.php'); ?>
<div class="col-md-4 col-md-offset-3">

<h4 class="bg-danger"></h4>
	
<form id="log-in" action="" method="post">
    
<div class="form-group">
	<label for="first_name">First name</label>
	<input type="text" class="form-control" name="first_name" value="<?php echo htmlentities($first_name); ?>" >

</div>
    
<div class="form-group">
	<label for="first_name">Last name</label>
	<input type="text" class="form-control" name="last_name" value="<?php echo htmlentities($last_name); ?>" >

</div>
	
<div class="form-group">
	<label for="username">Username</label>
	<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >

</div>

<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
	
</div>
    
if you have an account <a href="login.php">Login!</a> 
    
<br>


<div class="form-group">
<input type="submit" name="submit" value="Login" class="btn btn-primary">

</div>


</form>


</div>