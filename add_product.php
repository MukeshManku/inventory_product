<?php
$connection=mysqli_connect("localhost", "root", "", "project_2");
if(isset($_POST['submit']))
{
    $p_id=$_POST['p_id'];
    $p_name=$_POST['p_name'];
	$quantity=$_POST['qty'];
	$amount=$_POST['amt'];
	
    $sql ="INSERT INTO product (product_id, name, quantity, amount)
	VALUES ('$p_id','$p_name','$quantity','$amount')";
    mysqli_query($connection, $sql);
    echo "<script>alert('record inserted sucessfully..');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <!-- create form for mars mission-->
    <form action="" method="post">
		<table border="1" align="center">
			<center><h3>Input Details</h3></center>
        <tr>
		<td>Product Id:</td>
		<td>
		<input Type="text" name="p_id">
		</td>
		</tr>
		<tr>
		<td>Name:</td>
		<td>
		<input Type="text" name="p_name">
		</td>
		</tr>
		
        <tr>
		<td>Quantity:</td>
		<td>
		<input Type="text" name="qty">
		</td>
		</tr>
        <tr>
		<td>Amount:</td>
		<td>
		<input Type="text" name="amt">
		</td>
		</tr>
		</table>
		<center>
		<input type="submit" name="submit" value="submit"><a href="manage.php">Back</a>
</center>
	</form>
</body>
</html>