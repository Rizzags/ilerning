<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<table>
                            <thead>
                                <tr>
                                  <th>No Urut</th>
                                  <th>ID Jadual</th>
                                  <th>Thn. Akademik</th>
                                  <th>Periode</th>
                                  <th>Kode MTK</th>
                                  <th>Nama Matakuliah</th>
								   <th>Nama Dosen</th>
								    <th>&Sigma; Mahasiswa</th>
									<th>&Sigma; Nilai Kuesioner</th>
									
                                </tr>
                            </thead>
                            <tbody>
			<?php $i=1; foreach($hasil->result() as $row) { ?>
 
           <tr>
 
                <td><?php echo $i; ?></td>
                <td><?php echo $row->id_jadual; ?></td>
                <td><?php echo $row->thn_akademik; ?></td>
                <td><?php echo $row->periode; ?></td>
                <td><?php echo $row->kd_mtk; ?></td>
                <td><?php echo $row->nama_matkul; ?></td>
                <td><?php echo str_replace("*", $row->nama_dosen.".", $row->gelar_dosen); ?></td>
                <td><?php echo $row->sigma; ?></td>
                <td><?php echo $row->total_nilai_kuesioner; ?></td>
 
           </tr>
 
           <?php $i++; } ?>

         </tbody>
           </table>