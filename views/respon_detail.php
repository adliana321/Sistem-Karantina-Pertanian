<div class="container">
    <div class="row">
        <div class="col-md-12>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Responders</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM respon WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Nik Responder</td> <td><?= $data['nik_responder'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Responder</td> <td><?= $data['nama_responder'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tanggal_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Respon</td> <td><?= $data['respon'] ?></td>
                        </tr>
                        <tr>
                            <td>Kritik dan Saran</td> <td><?= $data['kritik_dan_saran'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=respon&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Responders </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

