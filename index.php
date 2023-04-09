<?php 
	include('config/constants.php'); 
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Food Ordering Website with PHP</title>
</head>
<body>
<h1>TASK MANAGER</h1>

<!-- Menu st -->
<div class="menu">

	<a href="index.php">Home</a>

	<a href="#">Doing</a>
	<a href="#">Ordering</a>

	<a href="manage-order.php">Manage Order</a>
</div>
<!-- Menu nd -->

<!-- Ord st -->
<div class="all-orders">
	
	<a href="#">Add Food</a>

	<table>
		<tr>
			<th>SN</th>
			<th>Food Name</th>
			<th>Price</th>
			<th>Description</th>
		</tr>

		<tr>
			<td>1. </td>
			<td>Cơm chiên dương châu</td>
			<td>3k</td>
			<td>
				<a href="#">Update</a>

				<a href="#">Delete</a>

			</td>
		</tr>
	</table>

</div>

<!-- Ord st -->


</body>
</html>


