<?php
$connection=mysqli_connect("localhost", "root", "", "project_2");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
    $conn ="INSERT INTO reg (email_id, password) VALUES ('$email','$password')";
    mysqli_query($connection, $conn);
    echo "<script>alert('record inserted sucessfully..');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
<form acction="" method="post">
<center><h3>Registration page</h3></center>
    <table border="1" align="center">
    <tr> 
    <th>Email id</th>
    <td> <input type="email" name="email"></td>
    </tr>
    <tr>
    <th>Password</th>
    <td><input type="password"  name="pass"> </td>
  
</tr>
</table>
<center>
<tr>
    <td></td>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">
    <a href="login.php">Login</a>
</tr>
</center>
  
</body>
</html>