<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nik_responder" class="col-sm-3 control-label">Nik Responder</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik_responder" class="form-control" id="inputEmail3" placeholder="Inputkan NIK" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_responder" class="col-sm-3 control-label">Nama Responder</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_responder" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan tanggal_masuk" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="respon" class="col-sm-3 control-label">Respon</label>
                            <div class="col-sm-3">
                                <input type="text" name="respon" class="form-control" id="inputEmail3" placeholder="Inputkan Respon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kritik_dan_saran" class="col-sm-3 control-label">Kritik dan Saran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kritik_dan_saran" class="form-control" id="inputPassword3" placeholder="Inputkan Kritik dan Saran" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Responder</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=respon&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Responders
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nik_responder=$_POST['nik_responder'];
    $nama_responder=$_POST['nama_responder'];
    $respon=$_POST['respon'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $kritsar=$_POST['kritik_dan_saran'];
    //buat sql
    $sql="INSERT INTO respon VALUES ('','$nik_responder','$nama_responder','$tanggal_masuk','$respon','$kritsar')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    if ($query){
        echo "<script>window.location.assign('?page=respon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
