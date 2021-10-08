<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			$id = $_GET['id'];
			$query = "SELECT * FROM jadwal_pertandingan WHERE id = '$id'";
			$result = mysqli_query($koneksi, $query);
		?>
		<form action="prosesEdit.php" method="GET">
			<table>
				<?php
					while($row = mysqli_fetch_array($result)) {
				?>		
					<tr>
						<td> Id : </td>
						<td> <input type="text" name="id" value="<?php echo $row['id'];?>"></td>
					</tr>
					<tr>
						<td> tim 1 : </td>
						<td> <input type="text" name="tim_1" value="<?php echo $row['tim_1'];?>"></td>
					</tr>
					<tr>
						<td> tim 2 : </td>
						<td> <input type="text" name="tim_2" value="<?php echo $row['tim_2'];?>"></td>
					</tr>
					<tr>
						<td>
							<input type="timestamp" name="data" value="<?php echo $row['data'];?>">
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="simpan" value="Simpan"></td>
					</tr>
				<?php	
					}
				?>	
				
			</table>
		</form>	
	</body>
</html>