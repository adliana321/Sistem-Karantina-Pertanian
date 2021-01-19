<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM respon WHERE id='".$_GET['id']."'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die('SQL Detail error');
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <div class="text-center">
                        <h2>Sistem Informasi Karantina Pertanian </h2>
                        Jl.Perintis Kemerdekaan KM.9 Simpang Empat - Asahan Sumatera Utara<br>
                              Kode Pos : 21351<hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td style="text-align:left">Nama</td> 
                                    <td><?= $data['nama_responder']; ?></td>
                                </tr>
                                <tr>
                                    <td width="200" style="text-align:left">NIK</td> 
                                    <td><?= $data['nik_responder']; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align:left">Respon</td> 
                                    <td><?= $data['respon']; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align:left">Kritik dan Saran</td> 
                                    <td><?= $data['kritik_dan_saran']; ?></td>
                                </tr>
								<tr>
                                    <td style="text-align:left">Tanggal Masuk</td> 
                                    <td><?= $data['tanggal_masuk']; ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date('d-m-Y'); ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>