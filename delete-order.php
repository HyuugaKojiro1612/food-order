<?php  
	//echo "Delete Order Page"

	include('config/constants.php');
	// Check if ID_don is assigned
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
		/*
		if ($db_select == true) {
			echo "Database selected";
		}
		*/

		// Query to Delete order from dtb
		$sql = "CALL delete_don('$ID_don')";
		$res = mysqli_query($conn, $sql);
		if ($res == true) {
			//Deleted successfully
			$_SESSION['delete'] = "Order deleted successfully!";

			header('location:'.SITEURL.'manage-order.php');
		}
		else {
			$_SESSION['delete_fail'] = "Fail to delete order!";
			header('location:'.SITEURL.'manage-order.php');
		}
	}
	else {
		header('location:'.SITEURL.'manage-order.php');
	}
	

	

	
?>