<?php 

	include('config/constants.php'); 

	if (isset($_GET['ID_don'])) {
		$ID_don = $_GET['ID_don'];
		// connect database
		$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
		/*
		if ($conn == true) {
			echo "Database connected";
		}
		*/
		// Select Database
		$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
		
		// if ($db_select == true) {
		// 	echo "Database selected";
		// }
		
		// Query to Delete order from dtb

		$sql = "SELECT * FROM don_dat_mon, don_online WHERE ID_DDM = $ID_don AND ID_DDM = ID_DOL";

		$res = mysqli_query($conn, $sql);
		if ($res == true) {
		 	//Get value from dtb
		 	$row = mysqli_fetch_assoc($res); //value is in array

		 	//print_r($row);
		 	$diachigiao = $row['Dia_chi_giao'];


		// 	$_SESSION['delete'] = "Order deleted successfully!";

		// 	header('location:'.SITEURL.'manage-order.php');
		}
		else {
		// 	$_SESSION['delete_fail'] = "Fail to delete order!";
			header('location:'.SITEURL.'manage-order.php');
		}

	}
	else {
		header('location:'.SITEURL.'manage-order.php');
	}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Food Ordering with PHP</title>
</head>
<body>
	<h1>TASK MANAGER</h1>
	<div class='menu'>
		<a href="<?php echo SITEURL; ?>">Home</a>		
		<a href="<?php echo SITEURL; ?>manage-order.php">Manage Orders</a>	

	</div>

	<h3>Update Order Page</h3>
	<p>
		<?php 
			// Check if session is created
			if(isset($_SESSION['update_fail'])) {
				echo $_SESSION['update_fail'];
				// Remove msg after displaying
				unset($_SESSION['update_fail']);
			}

		?>


	</p>

	<form method="POST" action =''>
		
		<table>
			<tr>
				<td>Địa chỉ: </td>
				<td><textarea name="diachi" required = 'required'><?php echo $diachigiao; ?></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>


</body>
</html>


<?php  
	if(isset($_POST['submit'])) {
		//echo "clicked";
		$diachimoi = $_POST['diachi'];
		$conn2 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
		$db_select2 = mysqli_select_db($conn2, DB_NAME);
		$sql2 = "CALL update_diachigiao('$ID_don', '$diachimoi')";

		$res2 = mysqli_query($conn2, $sql2);
		//echo $ID_don;
		if ($res == true) {
			//Updated successfully
			$_SESSION['update'] = "Order updated successfully!";

			header('location:'.SITEURL.'manage-order.php');
		}
		else {
			$_SESSION['update_fail'] = "Fail to update order!";
			header('location:'.SITEURL.'update-order.php?ID_don='.$ID_don);
		}
	}


?>