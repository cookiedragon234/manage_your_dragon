<?php
	include("../functions/header.php");
?>
		<h1>Manage Your Dragon-Login</h1>
		<form action="checklogin.php" method="post">
  			<span class="input-group-addon" id="basic-addon1">Username</span><br>
  			<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1"><br>
			<span class="input-group-addon" id="basic-addon1">Password</span><br>
  			<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1"><br>
  			<input class="btn btn-default" type="submit" name="Submit">
  		</form>
  		<style>

  		body{
  			font-family: "Segoe UI";
  			margin: auto;
  		}

  		</style>
<?php
	include("../functions/footer.php");
?>