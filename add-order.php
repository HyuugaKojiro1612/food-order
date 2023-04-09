<?php 
	include('config/constants.php'); 

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
	<a href="<?php echo SITEURL; ?>manage-order.php?SDT=<?php echo $SDT; ?>">Manage Orders History</a>
	
	<h3>Add Order Page</h3>
	<h4>Thông tin khách hàng</h4>
	<p>
		<?php 
			// Check if session is created
			if(isset($_SESSION['add_fail'])) {
				echo $_SESSION['add_fail'];
				// Remove msg after displaying
				unset($_SESSION['add_fail']);
			}

		?>


	</p>

	<!-- Form to add Order st -->
	<form method="POST" action="">
		<table>
			<tr>
				<td>Họ: </td>
				<td><input type="text" name="ho" placeholder="Vd: Nguyễn Văn" required='required' /></td>

			</tr>
			<tr>
				<td>Tên: </td>
				<td><input type="text" name="ten" placeholder="Vd: Anh" required='required'/></td>
			</tr>
			<tr>
				<td>SĐT: </td>
				<td><input type="text" name="SDT" placeholder="Vd: 0123456789" required='required'/></td>
			</tr>
			<tr>
				<td>Địa chỉ: </td>
				<td><textarea name="diachi" required = 'required'></textarea></td>
			</tr>
			<tr><td><b>Cơm</b>  </td></tr>

			<tr>
				<td><label><input type="checkbox" name="food01"><?php echo FOOD01; ?></label></td>
				<td><input type="text" name="qty01" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food02"><?php echo FOOD02; ?></label></td>
				<td><input type="text" name="qty02" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food03"><?php echo FOOD03; ?></label></td>
				<td><input type="text" name="qty03" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food04"><?php echo FOOD04; ?></label></td>
				<td><input type="text" name="qty04" placeholder="Số lượng"></td>
			</tr>
			<tr><td><b>Món nướng</b>  </td></tr>
			<tr>
				<td><label><input type="checkbox" name="food05"><?php echo FOOD05; ?></label></td>
				<td><input type="text" name="qty05" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food06"><?php echo FOOD06; ?></label></td>
				<td><input type="text" name="qty06" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food07"><?php echo FOOD07; ?></label></td>
				<td><input type="text" name="qty07" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food08"><?php echo FOOD08; ?></label></td>
				<td><input type="text" name="qty08" placeholder="Số lượng"></td>
			</tr>

			<tr><td><b>Hải sản</b>  </td></tr>

			<tr>
				<td><label><input type="checkbox" name="food09"><?php echo FOOD09; ?></label></td>
				<td><input type="text" name="qty09" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food10"><?php echo FOOD10; ?></label></td>
				<td><input type="text" name="qty10" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food11"><?php echo FOOD11; ?></label></td>
				<td><input type="text" name="qty11" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food12"><?php echo FOOD12; ?></label></td>
				<td><input type="text" name="qty12" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food13"><?php echo FOOD13; ?></label></td>
				<td><input type="text" name="qty13" placeholder="Số lượng"></td>
			</tr>
			<tr><td><b>Đồ uống</b>  </td></tr>

			<tr>
				<td><label><input type="checkbox" name="food14"><?php echo FOOD14; ?></label></td>
				<td><input type="text" name="qty14" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food15"><?php echo FOOD15; ?></label></td>
				<td><input type="text" name="qty15" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food16"><?php echo FOOD16; ?></label></td>
				<td><input type="text" name="qty16" placeholder="Số lượng"></td>
			</tr>

			<tr><td><b>Tráng miệng</b>  </td></tr>
			<tr>
				<td><label><input type="checkbox" name="food17"><?php echo FOOD17; ?></label></td>
				<td><input type="text" name="qty17" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food18"><?php echo FOOD18; ?></label></td>
				<td><input type="text" name="qty18" placeholder="Số lượng"></td>
			</tr>

			<tr>
				<td><label><input type="checkbox" name="food19"><?php echo FOOD19; ?></label></td>
				<td><input type="text" name="qty19" placeholder="Số lượng"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="SAVE"></td>
			</tr>
		</table>
	</form>


	<!-- Form to add Order nd -->
</body>
</html>

<?php 

	//Check if the form is submitted
	if(isset($_POST['submit'])) {
		//echo "Đăng kí đơn thành công. Mã số đơn: ";

		//Get the values from form
		$ho = $_POST['ho'];
		$ten = $_POST['ten'];
		$SDT = $_POST['SDT'];
		$diachi = $_POST['diachi'];

		$qty01 = $_POST['qty01'];
		$qty02 = $_POST['qty02'];
		$qty03 = $_POST['qty03'];
		$qty04 = $_POST['qty04'];
		$qty05 = $_POST['qty05'];
		$qty06 = $_POST['qty06'];
		$qty07 = $_POST['qty07'];
		$qty08 = $_POST['qty08'];
		$qty09 = $_POST['qty09'];
		$qty10 = $_POST['qty10'];
		$qty11 = $_POST['qty11'];
		$qty12 = $_POST['qty12'];
		$qty13 = $_POST['qty13'];
		$qty14 = $_POST['qty14'];
		$qty15 = $_POST['qty15'];
		$qty16 = $_POST['qty16'];
		$qty17 = $_POST['qty17'];
		$qty18 = $_POST['qty18'];
		$qty19 = $_POST['qty19'];

		$str = ''; $str2 = '';

		if(isset($_POST['food01'])) {
			$str = $str.','.FOOD01;
			$str2 = $str2.','.$qty01;
		}

		if(isset($_POST['food02'])) {
			$str = $str.','.FOOD02;
			$str2 = $str2.','.$qty02;
		}

		if(isset($_POST['food03'])) {
			$str = $str.','.FOOD03;
			$str2 = $str2.','.$qty03;
		}

		if(isset($_POST['food04'])) {
			$str = $str.','.FOOD04;
			$str2 = $str2.','.$qty04;
		}

		if(isset($_POST['food05'])) {
			$str = $str.','.FOOD05;
			$str2 = $str2.','.$qty05;
		}

		if(isset($_POST['food06'])) {
			$str = $str.','.FOOD06;
			$str2 = $str2.','.$qty06;
		}

		if(isset($_POST['food07'])) {
			$str = $str.','.FOOD07;
			$str2 = $str2.','.$qty07;
		}

		if(isset($_POST['food08'])) {
			$str = $str.','.FOOD08;
			$str2 = $str2.','.$qty08;
		}

		if(isset($_POST['food09'])) {
			$str = $str.','.FOOD09;
			$str2 = $str2.','.$qty09;
		}

		if(isset($_POST['food10'])) {
			$str = $str.','.FOOD10;
			$str2 = $str2.','.$qty10;
		}

		if(isset($_POST['food11'])) {
			$str = $str.','.FOOD11;
			$str2 = $str2.','.$qty11;
		}

		if(isset($_POST['food12'])) {
			$str = $str.','.FOOD12;
			$str2 = $str2.','.$qty12;
		}

		if(isset($_POST['food13'])) {
			$str = $str.','.FOOD13;
			$str2 = $str2.','.$qty13;
		}

		if(isset($_POST['food14'])) {
			$str = $str.','.FOOD14;
			$str2 = $str2.','.$qty14;
		}

		if(isset($_POST['food15'])) {
			$str = $str.','.FOOD15;
			$str2 = $str2.','.$qty15;
		}

		if(isset($_POST['food16'])) {
			$str = $str.','.FOOD16;
			$str2 = $str2.','.$qty16;
		}

		if(isset($_POST['food17'])) {
			$str = $str.','.FOOD17;
			$str2 = $str2.','.$qty17;
		}

		if(isset($_POST['food18'])) {
			$str = $str.','.FOOD18;
			$str2 = $str2.','.$qty18;
		}

		if(isset($_POST['food19'])) {
			$str = $str.','.FOOD19;
			$str2 = $str2.','.$qty19;
		}

		if ($str[0] === ',') $str = substr($str, 1);
		if ($str2[0] === ',') $str2 = substr($str2, 1);

		//echo $str2;

		// connect database
		$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
		//Check if database is connected
		/*
		if ($conn == true) {
			echo "Database connected";
		}
		*/
		// Select Database
		$db_select = mysqli_select_db($conn, DB_NAME);
		// Check if dtb is cnt
		/*
		if ($db_select == true) {
			echo "Database selected";
		}
		*/

		//$sql = "CALL insert_khachhang('$SDT','$ho','$ten','$diachi')";
		$sql = "CALL insert_don('$ho','$ten','$SDT','$diachi','$str','$str2')";

		$res = mysqli_query($conn, $sql);
		if ($res == true) {
			// Data inserted successfully
			// Create a SESSION to display msg
			$_SESSION['add'] = "Order added successfully!";
			// Redirect to Manage Order Page
			//header('location:'.SITEURL.'manage-order.php');

		}
		else {
			// Failed
			//echo "Failed";
			// Create a SESSION to display msg
			$_SESSION['add_fail'] = "Fail to add order!";
			header('location:'.SITEURL.'add-order.php');
		}
	}


?>





