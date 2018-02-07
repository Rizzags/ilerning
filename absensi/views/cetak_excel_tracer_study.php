
<h1>Tracer Study Jurusan <?php echo $jurusan; ?></h1>               
                        <table border="1" width="250%" >
                            <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Nim</th>
                                  <th>Nama </th>
                                  <th>Angkatan</th>
                                  <th>Jurusan</th>
                                  <th>Thn lulus</th>
                                  <th>Hp</th> 
                                  <th>Email</th>                                                             
                                  <th>Status Pekerjaan</th>
                                  <th>Jabatan</th>
                                  <th>Nama Kantor</th>
                                  <th>Alamat Kantor</th>
                                  <th>Bidang Kantor</th>
                                  <th>Pekerjaan Sesuai Jurusan</th>
                                  <th>Waktu Tunggu Kerja</th>
                                 <th>Kompetensi Spesifik</th>
                                 <th>Mata Kuliah Penting</th>
                                 <th>Mata Tidak Kuliah Penting</th>
                                 <th>Aspek Aplikatif</th>
                                 <th>Saran</th>                            
                                </tr>
                            </thead>
                            <tbody>
<?php $i=1;
if ( !empty($record) )
foreach($record->result() as $row)
:?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td width="3%" valign = "Top"><?php echo $row->nim; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->nama; ?></td>
                                    <td width="3%" valign = "Top"><?php echo $row->angkatan; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->jurusan; ?></td>
                                    <td width="3%" valign = "Top"><?php echo $row->thn_lulus; ?></td>
                                    <td width="4%" valign = "Top"><?php echo $row->hp; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->email; ?></td>                                                                        
                                    <td width="5%" valign = "Top"><?php echo $row->status_pekerjaan; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->jabatan; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->nama_kantor; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->alamat_kantor; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->bidang_kantor; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->pekerjaan_sesuai_jurusan; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->waktu_tunggu_kerja; ?> Bulan</td>
                                    <td width="5%" valign = "Top"><?php echo $row->kompetensi_spesifik; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->matakuliah_penting; ?></td>
                                    <td width="5%" valign = "Top"><?php echo $row->matakuliah_tidak_penting; ?></td>
                                    <td width="6%" valign = "Top"><?php echo $row->aspek_aplikatif; ?></td>
                                    <td valign = "Top"><?php echo $row->saran; ?></td>                                    
                                </tr>

<?php 
$i++;
endforeach;
?>
                            </tbody>
                        </table>
            