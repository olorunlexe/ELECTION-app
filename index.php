
<?php 
session_start();
$alert = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "met_election";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 


	 if (isset($_POST['submit'])){
        
        
		 $user = $_POST['name'];
	$pass = $_POST['password'];
         
		 $query = mysqli_query($conn,"SELECT * FROM voters WHERE username = '$user'");
		 $no = mysqli_num_rows($query);
		 if($no != 0){
			 $alert = ' '.$user.',You cannot vote twice';
		 }
	else{
	$sql = "SELECT * FROM candidate WHERE username = '$user'&& password = '$pass'";
	$query = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);
	if ($num>0){
		$_SESSION['user'] = $user;
		header("location:electionpage2.php");
	}
	else{
		
		$alert = "Enter correct user details (Matric Number and Password)";
	}
    }
	}
        
?>
<html>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <body>
	    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
	<div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $alert ?> </h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" id="login">
<fieldset>
<center>
<legend>Enter your user detail below to Login </legend>
<p>
<label for="username" id="s">Matric Number</label>
<input type="text" name="name" id="username" class="form-control" placeholder="Matric no"/>
</p>
<p>
<label for="password" id="s">Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="password"/>
</p>
	
	<tr align="center"><td><input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success btn-block" /></td></tr>
    </center>
</fieldset>
</form>
                    </div>
                </div>
				</div>
				</div>
				</div>
	



</body>
</html>