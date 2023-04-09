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
	<title>Online Food Ordering Website with PHP</title>
</head>
<body>
	<h1>TASK MANAGER</h1>

	<a href="index.php">Home</a>
	<h3>Manage Orders Page</h3>
	<p>
		<?php 
			// Check if session is created
			if(isset($_SESSION['add'])) {
				echo $_SESSION['add'];
				// Remove msg after displaying
				unset($_SESSION['add']);
			}

			if(isset($_SESSION['delete'])) {
				echo $_SESSION['delete'];
				// Remove msg after displaying
				unset($_SESSION['delete']);
			}

			if(isset($_SESSION['update'])) {
				echo $_SESSION['update'];
				// Remove msg after displaying
				unset($_SESSION['update']);
			}

			if(isset($_SESSION['delete_fail'])) {
				echo $_SESSION['delete_fail'];
				// Remove msg after displaying
				unset($_SESSION['delete_fail']);
			}
		?>


	</p>


	<!-- Table display lists st -->
	<div class="all-lists">

		<a href="add-order.php">Add Order</a>
		<table>
			<tr>
				<th>S.N.</th>
				<th>Order ID</th>
				<th>Địa chỉ giao</th>
				<th>Thời gian giao</th>
				<th>Actions</th>
			</tr>
			
			<?php  
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
				// SQL query to display all data
				$sql = "SELECT * FROM don_online, don_dat_mon WHERE ID_DOL = ID_DDM";
				$res = mysqli_query($conn, $sql);

				if ($res == true) {
					// work on displaying data
					// echo "Executed";

					// Count the rows of database
					$count_rows = mysqli_num_rows($res);
					// create serial num
					$sn = 1;
					// Check if dtb is empty
					if ($count_rows > 0) {
						// not empty

						while ($row = mysqli_fetch_assoc($res)) {
							// Get data from dtb
							$ID_don = $row['ID_DOL'];
							$OrderTime = $row['Thoi_gian_giao'];
							$diachigiao = $row['Dia_chi_giao'];
							$tinhtrang = $row['Tinh_trang_don'];
							?>
							<tr>
								<td><?php echo $sn++; ?></td>
								<td><?php echo $ID_don; ?></td>
								<td><?php echo $diachigiao; ?></td>
								<td><?php echo $OrderTime; ?></td>
							<?php
								if ($tinhtrang == 'DANGXULY') { 
							?>
								<td>
								<a href="<?php echo SITEURL; ?>update-order.php?ID_don=<?php echo $ID_don; ?>">Update</a>
								<a href="<?php echo SITEURL; ?>delete-order.php?ID_don=<?php echo $ID_don; ?>">Delete</a>
								</td>
							<?php }?>
							</tr>
							<?php

						}
					}
					else {
						// empty
						?>

						<tr>
							<td colspan="4">No Order Added Yet!</td>
						</tr>
						<?php
					}
				}

			?>



		</table>
		<!-- Table display lists nd -->
	</div>

</body>
</html>