<html>
<head>
	<title>Belajar CI Lagii</title>
</head>
<body>
	<h3>Belajar Tentang Form Validasi</h3>

	<p>Codeigniter menyediakan sebuah class library yang digunakan untuk memvalidasi input pada form. hal ini sangat penting karena validasi form itu berkaitan dengan keamanan sebuah web. form validasi bisa digunakan untuk mengecek apakah data yang dimasukkan melalui input form sudah sesuai apa belum. misal input nama harus diisi dan input email harus diisi alamat email yang valid, atau input umur harus diisi angka/numeric.</p>
	<p>untuk lebih jelasnya, bisa baca2 user guide tentang class library form validation disini --> <a href="https://ellislab.com/codeigniter/user-guide/libraries/form_validation.html">https://ellislab.com/codeigniter/user-guide/libraries/form_validation.html</a></p>
	<br>
	<hr>
	<h3>Contoh Penggunaan Library Form Validation</h3>
	<p>misal kita ingin memvalidasi input nama harus diisi dan input umur harus diisi dan berupa angka/numeric</p>

	<table>
		<form method="post" action="<?php echo site_url('ketiga/validasi');?>">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input name="nama" value="<?php echo set_value('nama');?>" placeholder="nama"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input name="umur" value="<?php echo set_value('umur');?>" placeholder="umur"></td>
			</tr>
			<tr>
				<td><button type="submit">Submit</button></td>
			</tr>
		</form>
	</table>
	<div style="color:red">
	<p>
		<?php 
			// disini kita mengecek, jika data yg diinputkan tdk sesuai alias validasi error,maka pesan error akan ditampilkan
			if(validation_errors()) //cek validasi
			{
				echo validation_errors();
			}
		?>
	</p>
	</div>

	<br>
	<hr>
	<h3>Latihan Soal</h3>
	<p>Buatlah proses validasi di method validasi_megha di controller ketiga. aturan validasinya seperti ini :</p>
	<p>
		<ol>
			<li>Nama : harus diisi</li>
			<li>Email : harus diisi dan alamat email harus valid</li>
			<li>Pesan : minimal 8 karakter</li>
		</ol>
	</p>
	<br>
	<form method="post" action="">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input name="nama" value="<?php echo set_value('nama');?>" placeholder="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input name="nama" value="<?php echo set_value('email');?>" placeholder="email"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><textarea name="pesan"></textarea></td>
		</tr>
		<tr>
			<td><button type="submit">submit</button></td>
		</tr>
	</table>
	</form>
	<br>
	<div style="color:red">
		<p>
			<?php 
			// disini kita mengecek, jika data yg diinputkan tdk sesuai alias validasi error,maka pesan error akan ditampilkan
			if(validation_errors()) //cek validasi
			{
				echo validation_errors();
			}
		?>
		</p>
	</div>
</body>
</html>