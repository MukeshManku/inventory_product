<?php
$connection=mysqli_connect("localhost", "root", "", "project_2");

 session_start(); 

$errors = array(); 
if (isset($_POST['login'])) {

    $username = $_POST['email'];
    $password = $_POST['pass'];    
if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$sql = "SELECT * FROM `reg` WHERE `email_id`='$username' AND password='$password'";
  	$results = mysqli_query($connection,$sql);
      
        if(mysqli_num_rows($results) == 1) {
  	 header('location: manage.php');
  	}

    else {
  		array_push($errors, "Wrong username/password combination");
  	}   
  }
}
?>

<html>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <table border ="1" align="center">
    <tr> 
        <th>Email id</th>
        <td> <input type="email" name="email"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type="password"  name="pass"> </td>
    </table>
	<center><button type="submit" name="login">Log In</button>
	<a href="index.php">Sign Up</a>
</center>
</body>
</html>