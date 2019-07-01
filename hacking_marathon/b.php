<?php $koneksi = new mysqli("localhost","root","","hackathon");
								$ambil = $koneksi->query("SELECT * FROM products");
								while ($obj = $ambil->fetch_object()) {
									echo $obj->product_name."<br>";
								?>
								<?php } ?>
