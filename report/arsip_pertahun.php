<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn = $_POST['tahun'];

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
                        <h3>DATA ARSIP TAHUN   <?php echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								 <tr>
                                <th>No.</th>
                                <th width="17%">Nama</th>
                                <th>NIK</th>
                                <th>Respon</th>
                                <th>
                                    Kritik dan Saran
                                </th>
                                <th>Tanggal Masuk</th>
                                
                                
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM respon WHERE substr(tanggal_masuk,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die('SQL Anda Salah');
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                ++$nomor; //Penambahan satu untuk nilai var nomor?>
                                <tr>
                                <td><?= $nomor; ?></td>
                                
                                <td><?= $data['nama_responder']; ?></td>
                                <td><?= $data['nik_responder']; ?></td>
                                
                                <td><?= $data['respon']; ?></td>
                                <td><?= $data['kritik_dan_saran']; ?></td>
                                <td><?= $data['tanggal_masuk']; ?></td>
                                
                            </tr>
                                <!--Tutup Perulangan data-->
                            <?php
                            } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Tanjung Balai Asahan,  &nbsp <?= date('d-m-Y'); ?>
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
