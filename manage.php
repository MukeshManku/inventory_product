<?php
$connection=mysqli_connect("localhost", "root", "", "project_2");
$results = mysqli_query($connection, "SELECT * FROM product");
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM `product` WHERE `id`='$id'";
     mysqli_query($connection, $sql);
    if(mysqli_affected_rows($connection) == 1)
	{
		
        echo '<script language="javascript">alert("Information Delete sucessfully..")</script>';
        echo '<script language="javascript">window.location = "manage.php"</script>';
	}  
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1" align="center">
<center><h3>Product Details</h3>
</center>
           <thead>
            <tr>
              <th>Product Id</th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Amount</th>
              <th>Delete</th>
              <th>Print</th>
           </thead>

             <?php while ($row = mysqli_fetch_array($results)) { ?>
            
                <td><?php echo $row['product_id'] ?></td>
                  
                <td><?php echo $row['name'] ?></td>

                <td><?php echo $row['quantity'] ?></td>
                
                <td><?php echo $row['amount'] ?></td>

                <td><a href="manage.php?del=<?php echo $row['id']; ?>">Delete</a></td>
                <td><button onClick="window.print()">Print</button></td>
             
                         
                </tr>
                <?php    
                }
                ?>  
            
        </table>   
       <center> 
       <a href="add_product.php"><input type="submit" value="Add product"></a>
        <a href="index.php">Back</a></td>
       
</center>
</body>
</html>