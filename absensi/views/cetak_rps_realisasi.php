<html>
<title>RPS Realisasi</title>
	<head>
	</head>
		<body bgcolor = "white">
			<font size =6><center><b><u>Daftar Hadir dan Realisasi RPS</u></b></center></font>
			<table align ="center" width ="850" border = "0" cellpadding = "4">
				<tr>
					<td>Kode</td><td>:</td><td><?php echo $record['kd_mtk'];?></td>
					<td>Nama Dosen</td><td>:</td><td><?php echo $record['dosen_nama'];?></td>
				</tr>
				<tr>
					<td>Mata Kuliah/SKS</td><td>:</td><td><?php echo $record['nama_mtk'].' / '.$record['sks'] ;?></td>
					<td>No HP</td><td>:</td><td><?php echo $record['dosen_hp'];?></td>
				</tr>
				<tr>
					<td>Hari</td><td>:</td><td><?php echo $record['uraian'];?></td>
					<td>Ketua Kelas</td><td>:</td><td><?php echo $record['nama_mhs'];?></td>
				</tr>
				<tr>
					<td>Ruang</td><td>:</td><td><?php echo $record['ruangan_nama'];?></td>
					<td>No HP</td><td>:</td><td><?php echo $record['telp_mhs'];?></td>
				</tr>
				<tr>
					<td>Kelas</td><td>:</td><td><?php echo $record['kelas_nama'];?></td>
					<td>&nbsp;</td><td></td><td>&nbsp;</td>
				</tr>
			</table><br>
			
			<font size =5><center><b><u>Semester <?php echo (($record['periode']==1)?'Ganjil':'Genap').' '.$record['thn_akademik']; ?></u></b></center></font> <br>
			
			<table align ="center" width ="850" border = "1" cellspacing = "0" cellpadding = "4">
				<tr>
					<td>Pertemuan</td>
					<td>Realisasi Satuan Acara Perkuliahan</td>
					<td>Tanggal</td>
					<td>Jam Masuk</td>
					<td>Jam selesai</td>
					<td>Jumlah hadir mhs</td>
					
					
				</tr>
				
				<?php
						if ($record2 == null) {
						  
						}else{

						$no = 1;
						foreach ($record2->result() as $r ) {
						$tanggal = "";
						$jam_mulai = "";
						$jam_selesai = "";
						$tanggal 		= substr($r->waktu_input,0,10);
						$jam_mulai 		= substr($r->waktu_input,11,5);
						$jam_selesai 	= substr($r->waktu_selesai,11,5);
						echo "
							<tr >
								
								<td width='10'>$no</td>
								<td>$r->materi</td>
								<td>$tanggal</td>
								<td>$jam_mulai</td>
								<td>$jam_selesai</td>
								<td>$r->jumlah_keseluruhan</td>
							</tr> 
						";
						$no++;
						}
						}
			?>
			</table>
			
		</body>
</html>