<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Barang</title>
	<link rel="stylesheet" type="text/css" href="order.css">
</head>
<div class="jasa">
			<div class="content">
				<h2> Data Pembeli</h2>
				<form action="proses.php" method="POST">
					<table>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td><input type="text" name="nama" autocomplete="off"></td>
						</tr>
						<tr>
							<td>No Handphone</td>
							<td>:</td>
							<td><input type="number" name="no_hp" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td>:</td>
							<td><input type="text" name="nama_brg" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Banyaknya Barang Dibeli : </td>
							<td>:</td>
							<td><input type="text" name="jarak" autocomplete="off"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<button type="submit" name="kirim">Kirim</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<body>

</body>
</html>