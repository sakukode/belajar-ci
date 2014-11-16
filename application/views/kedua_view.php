<html>
<head>
	<title>Belajar CI Sesi 2</title>
</head>
<body>
	<h3>Menampilkan data dengan Active Record</h3>

	<p>Menampilkan data first name dan email dari table "tes_table" dengan Active record</p>
	<p>Data yang ditampilan cuma dibatasi sebanyak 20 data</p>

	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Depan</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//mengecek apakah data ada
			$no = 1;
			if($result !=null): //data tdk sama dengan null(kosong) alias data ada
			foreach($result as $row): //melooping data
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row->first_name;?></td>
				<td><?php echo $row->email;?></td>
			</tr>
			<?php
			++$no;
			endforeach;
			else: //jika data kosong
				echo "<tr><td colspan='3'>Data tidak ada</td></tr>";
			endif;
			?>
		</tbody>
	</table>
	<p>Page Rendered : {elapsed_time} seconds</p>
	<br>
	<hr>
	==== Tugas ===

	<p>Tampilkan Data dari table test_table sebanyak 10 data saja dengan field yg ditampilkan, dengan susunan spt tabel dibawah ini :</p>
	<p>Tapi yang ditampilkan yang bernegara Jepang (country = japan)</p>
	<p><strong>CLUE : </strong>gunakan fungsi $this->db->where('nama_field','kata_kunci');</p>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Lengkap (Jadi Gabungan antara first_name dan last_name)</th>
				<th>Email</th>
			</tr>
		</thead>
	</table>
	<hr>
	<p>Selamat Mengerjakan ya :)</p>
</body>
</html>