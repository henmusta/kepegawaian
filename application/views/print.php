<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <style>
 @media print
{
  table { page-break-after:auto }
  tr    { page-break-inside:avoid; page-break-after:auto }
  td    { page-break-inside:avoid; page-break-after:auto }
  thead { display:table-header-group }
  tfoot { display:table-footer-group }
}
        body {
            /* background-color: #F6F6F6; */
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        .brand-section {
            background-color: #ffffff;
            padding: 10px 40px;
        }

        .brand-section {
            background-color: #ffffff;
            padding: 10px 40px;
        }

        .logo {
            width: 50%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 auto;
        }

        .text-white {
            color: #fff;
        }

        .company-details {
            float: right;
            text-align: right;
        }

        .text-center {
            float: center;
            text-align: center;
        }

        .header {
            float: center;
            text-align: center;
            padding-bottom: 20px;
            padding-top: 10px;
        }

        .body-section {
            padding: 16px;

        }

        .heading {
            font-size: 15px;
            margin-bottom: 08px;
        }

        .sub-heading {
            color: #262626;
            margin-left: 20px;
            margin-bottom: 05px;
        }



        table {
            margin-right: 20px;
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }

        table thead tr {
            border: 1px solid #111;
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
            text-align: center;
        }

        table th {
            background-color: #96b1f2;
        }




        table th,
        table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }

        .table-bordered {
            box-shadow: 0px 0px 5px 0.5px gray;
        }

        .table-none {
            text-align: left;
            border: none;
            border-collapse: unset;

        }

        .table-none th,
        td {

            text-align: left;
            border: none;
            border-collapse: unset;
            background-color: white;
        }

        .table-none td,
        .table-none th {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .text-right {
            text-align: end;
        }


        .w-20 {
            width: 20%;
        }

        .float-right {
            float: right;
        }

        .float-center {
            float: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="brand-section ">
            <div class="header">
                <h3>BIODATA</h3>
            </div>
        </div>
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                <?php if(isset($data->image)) : ?>
                                <img
                                    alt="image"
                                    src="<?php echo base_url("assets/foto/pegawai/");?><?php echo $data->image?>"
                                    width="200"
                                    height="250">
                                    <?php else : ?>
                                        <img
                                    alt="image"
                                    src="<?php echo base_url();?>assets/img/avatar/avatar-1.png"
                                    class="rounded-circle author-box-picture"
                                    width="200"
                                    height="250">
                          
                            <?php endif; ?>
                    <!-- <img alt="image" src="<?php echo base_url();?>assets/img/avatar/avatar-1.png" width="200"
                        height="250"> -->
                </div>

            </div>
        </div>


        <div class="body-section">
            <div class="row">
                <table class="table-none" width="100%" style="padding-bottom:10px">

                    <thead>
                        <tr>
                            <th width="2%">I</th>
                            <td style="vertical-align: top;text-align: left;">KETERANGAN PERORANGAN</td>

                        </tr>

                    </thead>
                </table>
                <table class="table-none" width="100%">

                    <thead>
                        <tr>
                            <th></th>
                            <td width="5%">a.</td>
                            <td style="vertical-align: top;text-align: left;">NIP</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;">
                                <?= isset($data->nik) ? $data->nik : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">b.</td>
                            <td style="vertical-align: top;text-align: left;">Nama</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"> <?= isset($data->nama) ? $data->nama : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">c.</td>
                            <td style="vertical-align: top;text-align: left;">Tempat / Tanggal Lahir</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"> <?= isset($data->ttl) ? $data->ttl : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">d.</td>
                            <td style="vertical-align: top;text-align: left;">Agama</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"> <?= isset($data->agama) ? $data->agama : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">e.</td>
                            <td style="vertical-align: top;text-align: left;">Jenis Kelamin</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"> <?= isset($data->jenis_kelamin) ? $data->jenis_kelamin : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">f.</td>
                            <td style="vertical-align: top;text-align: left;">Status Perkawinan</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"> <?= isset($data->status_nikah) ? $data->status_nikah : NULL;?> Menikah</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">g.</td>
                            <td style="vertical-align: top;text-align: left;">Pangkat Terakhir</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"> <?= isset($data->pangkat_terakhir->pangkat) ? $data->pangkat_terakhir->pangkat : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">h.</td>
                            <td style="vertical-align: top;text-align: left;">Pendidikan Terakhir</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"><?= isset($data->pendidikan_terakhir->tingkat_pendidikan) ? $data->pendidikan_terakhir->tingkat_pendidikan : NULL;?> - <?= isset($data->pendidikan_terakhir->jurusan) ? $data->pendidikan_terakhir->jurusan: NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">i.</td>
                            <td style="vertical-align: top;text-align: left;">Jabatan Sekarang</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"><?= isset($data->jabatan_terakhir->jabatan) ? $data->jabatan_terakhir->jabatan : NULL;?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td width="5%">j.</td>
                            <td style="vertical-align: top;text-align: left;">Alamat Rumah</td>
                            <td width="0%" style="vertical-align: top;text-align: left;">:</td>
                            <td width="70%" style="vertical-align: top;text-align: left;"><?= isset($data->alamat) ? $data->alamat : NULL;?></td>
                        </tr>
                    </thead>
                </table>
                <!-- </div> -->

            </div>
        </div>

        <div class="body-section">
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">I</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT KEPANGKATAN</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pangkat</th>
                        <th>Gol. Ruang</th>
                        <th>TMT Pangkat</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">II</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT JABATAN</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Eselon</th>
                        <th>TMT Jabatan</th>
                        
                    </tr>
                </thead>
                <tbody>
                 
                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">IV.</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT PENDIDIKAN UMUM</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tingkat Pendidikan</th>
                        <th>Jurusan</th>
                        <th>Nama Sekolah</th>
                        <th>Tgl Lulus</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">V</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT DIKLAT STRUKTURAL</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                <tr>
                        <th>No</th>
                        <th>Nama Diklat</th>
                        <th>Tempat Diklat</th>
                        <th>Penyelenggara</th>
                       
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">VI.</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT DIKLAT FUNGSIONAL</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                <tr>
                        <th>No</th>
                        <th>Nama Diklat</th>
                        <th>Tempat Diklat</th>
                        <th>Penyelenggara</th>
                       
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">VII.</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT DIKLAT TEKNIS</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Diklat</th>
                        <th>Tempat Diklat</th>
                        <th>Penyelenggara</th>
                       
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>

            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">VII.</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT JASA /PENGHARGAAN/TANDA KEHORMATAN
                        </td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tanda Jasa</th>
                        <th>Asal Perolehan</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">VUI.</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT HUKUMAN</td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Hukuman</th>
                        <th>Nama Hukuman</th>
                        <th>TMT</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">IX</th>
                        <td style="vertical-align: top;text-align: left;">PENILAIAN PRESTASI KERJA DAN PERILAKU KERJA
                        </td>

                    </tr>

                </thead>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Nilai SKP</th>
                        <th>Nilai Perilaku Kerja</th>
                        <th>Nilai Prestasi Kerja</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>
            <table class="table-none" width="100%">

                <thead>
                    <tr>
                        <th width="2%">X</th>
                        <td style="vertical-align: top;text-align: left;">RIWAYAT KELUARGA</td>

                    </tr>

                </thead>
            </table>
            <br>

            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ibu</th>
                        <th>Tgl Lahir</th>
                        <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ayah</th>
                        <th>Tgl Lahir</th>
                        <th>Pekerjaan</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Istri/Suami</th>
                        <th>Tgl Lahir</th>
                        <th>Tgl Kawin</th>
                        <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anak</th>
                        <th>Tgl Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>pekerjaan</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <br>








        </div>
        

        <div class="body-section">
            <table class="table-none text-center">
                <!-- <thead>
               
                    
                </thead> -->
                <tbody>
               
                     <tr>
                        <td width="50%" style="vertical-align: center;text-align: center;"></td>
                        <td width="50%" style="vertical-align: center;text-align: left; padding-left:30px;"><?= isset($data->settings->alamat) ? $data->settings->alamat : NULL;?>, </td>
                    </tr>
                    <tr>
                        <td width="50%" style="vertical-align: center;text-align: center;"><p>mengetahui<p></td>
                        <td width="50%" style="vertical-align: center;text-align: center;"></td>
                    </tr>
                    <tr>
                        <td width="50%" style="vertical-align: center;text-align: center; padding-bottom:100px;"><p><?= isset($data->settings->jabatan_kepala) ? $data->settings->jabatan_kepala : NULL;?>,<p></td>
                        <td width="50%" style="vertical-align: center;text-align: center; padding-bottom:100px;"><p>PEGAWAI NEGERI SIPIL,<p></td>
                    </tr>
                    <tr>
                        <td width="50%" style="vertical-align: center;text-align: center;"><u><p><?= isset($data->settings->nama_kepala) ? $data->settings->nama_kepala : NULL;?><p></u></td>
                        <td width="50%" style="vertical-align: center;text-align: center;"><u><p><?= isset($data->nama) ? $data->nama : NULL;?><p></u></td>
                    </tr>
                    <tr>
                        <td width="50%" style="vertical-align: center;text-align: center; padding-bottom:30px;"><p>NIP. <?= isset($data->settings->nip_kepala) ? $data->settings->nip_kepala : NULL;?><p></td>
                        <td width="50%" style="vertical-align: center;text-align: center; padding-bottom:30px;"><p>NIP. <?= isset($data->nik) ? $data->nik : NULL;?><p></td>
                    </tr>
                    <tr>
                        <td colspan="2" width="50%" style="vertical-align: center;text-align: center;"><p>Mengetahui<p></td>
                    </tr>
                    <tr>
                        <td colspan="2" width="50%" style="vertical-align: center;text-align: center; padding-bottom:100px;"><p>a.n. KEPAKA BADAN KEPEGAWIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA KABUPATEN TANGGAMUS KEPALA BIDANG PEMBINAAN DAN PENGOLAHAN DATA DAN INFORMASI PEGAWAI<p></td>
                    </tr>
                    <tr>
                        <th colspan="2" width="50%" style="vertical-align: center;text-align: center;"><u><p><?= isset($data->settings->mengetahui) ? $data->settings->mengetahui : NULL;?><p></u></th>
                    </tr>
                    <tr>
                        <td colspan="2" width="50%" style="vertical-align: center;text-align: center;"><u><p><?= isset($data->settings->nip_saksi) ? $data->settings->nip_saksi : NULL;?><p></u></td>
                    </tr>
                </tbody>
            </table>
            <br>
        
            <br>








        </div>


    </div>
    <script>
        window.print();
        setTimeout(window.close, 0);
    </script>

</body>

</html>