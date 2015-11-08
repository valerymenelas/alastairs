<?php

$connection = mysql_connect("localhost","va634778","49C13AD71D0943A9B0E44FD2D7CAA9D0");
mysql_connect("localhost","va634778","49C13AD71D0943A9B0E44FD2D7CAA9D0");//database connection
mysql_select_db("va634778");
				
$order = "SELECT * FROM products ORDER BY productID";				
$result = mysql_query($order);	

	echo "<table border='1' cellpadding='4'>";
	echo "<th>Product ID</th>";
	echo "<th>Product Name</th>";
	echo "<th>Description</th>";
	echo "<th>Category</th>";
	echo "<th>SKU</th>";
	echo "<th>Stock</th>";
	echo "<th>Cost</th>";
	echo "<th>Price</th>";
	echo "<th>Image</th>";
	echo "<th>Weight</th>";
	echo "<th>Measurements</th>";
	while($data = mysql_fetch_row($result)){
		echo("<tr>
			<td>$data[0]</td>
			<td>$data[1]</td>
			<td>$data[2]</td>
			<td>$data[3]</td>
			<td>$data[4]</td>
			<td>$data[5]</td>
			<td>$data[6]</td>
			<td>$data[7]</td>
			<td><img src='$data[8]'></td>
			<td>$data[9]</td>
			<td>$data[10]</td>
			</tr>"
		);
	}
	echo "</table>";
?>