<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="kz_ino icon" href="<?=base_url();?>assets/img/kz.ico">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin/bootstrap.min1.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin/main2.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

    <script src="<?=base_url();?>assets/js/jquery.js"></script>

     <script language="javascript" type="text/javascript">
            function printDiv(divID) {
                //Get the HTML of div
                var divElements = document.getElementById(divID).innerHTML;
                //Get the HTML of whole page
                var oldPage = document.body.innerHTML;

                //Reset the page's HTML with div's HTML only
                document.body.innerHTML = 
                  "<html><head><title></title></head><body>" + 
                  divElements + "</body>";

                //Print Page
                window.print();

                //Restore orignal HTML
                document.body.innerHTML = oldPage;


            }
        </script>

</head>
<body>

<div class="row-fluid">
    <div class="span12 pull-left">
        <div class="well">

<div id="printme" style="">
            <table align="center" class="table2">
                <tr>
                    <td>
                      <img src="<?=base_url();?>img/kemenperin.png" alt="logo stmi dan kemenperin">
                    </td>
                    <td align="center" style="font-size:14px;line-height: 14px;">
                        POLITEKNIK STMI JAKARTA<br>
                        Jl. Letjen Suprapto No.26 Cempaka Putih, Jakarta 10510<br>
                        Telp: (021) 42886064 Fax: (021) 42888206<br>
                        www.stmi.ac.id<br>
                    </td>
                    <td>
                        <img src="<?=base_url();?>img/stmi.png" alt="logo stmi dan kemenperin">
                    </td>
                </tr>
            </table>
            <!-- Text input-->
            <div align="center">
                <h6>TRACER STUDI ALUMNI ONLINE</h6>
            </div>
            
            <div class="form-horizontal2" >

<?php
if ( !empty($print_data_tracer_studi) )
foreach($print_data_tracer_studi->result() as $row)
:?>
                
                       <div class="control-group2">
                        <label class="control-label2"><b>NIM</b></label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<b><?php echo $row->nim ;?></b></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Nama Lengkap</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->nama) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Angkatan</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->angkatan) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">jurusan</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->jurusan) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">No. Handphone</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->hp) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Email</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo $row->email ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Tahun Pendidikan</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->thn_masuk) ;?> s/d <?php echo ucwords($row->thn_lulus) ;?></label>
                        </div>
                      </div>

                      <br>

                      <div class="control-group2">
                        <label class="control-label2">Pekerjaan</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->status_pekerjaan) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Jabatan</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->jabatan) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Nama Perusahaan/Kantor</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->nama_kantor) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Alamat Perusahaan/Kantor</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->alamat_kantor) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Bidang Pekerjaan </label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->bidang_kantor) ;?></label>
                        </div>
                      </div>

                      <div class="control-group2">
                        <label class="control-label2">Waktu Tunggu Bekerja</label>
                        <div class="controls">
                            <label class="checkbox">:&nbsp;&nbsp;&nbsp;<?php echo ucwords($row->waktu_tunggu_kerja) ;?> Bulan</label>
                        </div>
                      </div>

                      <br>

                      <div class="">
                        <label class="">- Apakah anda bekerja sesuai dengan bidang studi yang anda tekuni di STMI -Kementerian Perindustrian?</label><p><i>-jawaban: </i>[....<?php echo $row->pekerjaan_sesuai_jurusan ;?>....]</p>
                      </div>

                      <div class="">
                        <label class="">- Sebutkan beberapa kompetensi spesifik yang anda perlukan untuk menunjang pekerjaan anda?!</label><p><i>-jawaban: </i>[....<?php echo $row->kompetensi_spesifik ;?>....]</p>
                      </div>

                      <div class="">
                        <label class="">- Berdasarkan kurikulum yang saat ini berlaku di STMI - Kementerian Perindustrian (terlampir), apakah menurut anda mata kuliah yang diberikan sudah cukup untuk menunjang pekerjaan seperti yang anda tekuni saat ini ? </label><p><i>-jawaban: </i>[....<?php echo $row->matakuliah_menunjang_pekerjaan ;?>....]</p>
                      </div>

                      <div class="">
                        <label class="">- Sebutkan mata kuliah yang anda anggap penting untuk menunjang bidang pekerjaan seperti yang anda tekuni? </label><p><i>-jawaban: </i>[....<?php echo $row->matakuliah_penting ;?>....]</p>
                      </div>

                      <div class="">
                        <label class="">- Sebutkan mata kuliah yang anda anggap tidak penting untuk menunjang bidang pekerjaan seperti yang anda tekuni??</label><p><i>-jawaban: </i>[....<?php echo $row->matakuliah_tidak_penting ;?>....]</p>
                      </div>

                      <div class="">
                        <label class="">- Pada saat anda mengikuti perkuliahan di STMI, apakah anda mendapatkan materi mengenai aspek-aspek aplikatif dari mata kuliah tersebut? </label><p><i>-jawaban: </i>[....<?php echo $row->aspek_aplikatif ;?>....]</p>
                      </div>

                      <div class="">
                        <label class="">- Setelah Anda lulus, berikanlah Kritik dan Saran yang membangun untuk Program Studi Anda! </label><p><i>-jawaban: </i>[....<?php echo $row->saran ;?>....]</p>
                      </div>

                      


                      





<?php 
endforeach;
?>
                </div>




</div>   
<input type="button" value="Print Data" class="btn btn-primary" onclick="javascript:printDiv('printme')" />

        </div>
    </div>
</div>

</body>
</html>

<?php
function formatRupiah($nilaiUang)
{
  $nilaiRupiah     = "";
  $jumlahAngka  = strlen($nilaiUang);
  while($jumlahAngka > 3)
  {
    $nilaiRupiah    = "." . substr($nilaiUang,-3) . $nilaiRupiah;
    $sisaNilai         = strlen($nilaiUang) - 3;
    $nilaiUang       = substr($nilaiUang,0,$sisaNilai);
    $jumlahAngka = strlen($nilaiUang);
  }
 
  $nilaiRupiah       = "Rp " . $nilaiUang . $nilaiRupiah . ",-";
  return $nilaiRupiah;
}


function Terbilang($x)
{
  $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
  if ($x < 12)
  return " " . $abil[$x];
  elseif ($x < 20)
  return Terbilang($x - 10) . " Belas";
  elseif ($x < 100)
  return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
  elseif ($x < 200)
  return " Seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
  return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
  return " Seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
  return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
  return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
  elseif ($x < 1000000000000)
  return Terbilang($x / 1000000000) . " Miliar" . Terbilang($x % 1000000000);
  elseif ($x < 1000000000000000)
  return Terbilang($x / 1000000000000) . " Trilyun" . Terbilang($x % 1000000000000);
}



?>