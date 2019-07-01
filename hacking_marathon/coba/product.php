<?php 

$koneksi = new mysqli("localhost","root","","onetech");
$ambil = $koneksi->query("SELECT * FROM products");

 ?>
 <table width="90%" style="border:1px solid black;border-collapse: collapse;text-align: center;">
 	<tr>
 		<th>Name</th>
 		<th>Price</th>

 	</tr>
 	<?php while ($obj = $ambil->fetch_object()) { ?>
 		
 	
 	<tr>
 		<td><?php echo $obj->product_name; ?></td>
 		<td><?php echo $obj->price; ?></td>
 		<td><?php echo '<a href="cart.php?id='.$obj->id.'">Add</a>'; ?></td>
 	</tr>	
 	<?php } ?>
 </table>