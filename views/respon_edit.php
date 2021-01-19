<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM respon WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Responder</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="nik_responder" class="col-sm-3 control-label">Nik Responder</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik_responder" value="<?=$data['nik_responder']?>"class="form-control" id="inputEmail3" placeholder="Input Nik Responder">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_responder" class="col-sm-3 control-label">Nama Responder</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_responder" value="<?=$data['nama_responder']?>"class="form-control" id="inputEmail3" placeholder="Input Nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_masuk" value="<?=$data['tanggal_masuk']?>"class="form-control" id="inputEmail3" >
                            </div>
                        </div>
						<div class="form-group">
                            <label for="respon" class="col-sm-3 control-label">Respon</label>
                            <div class="col-sm-9">
                                <input type="text" name="respon" value="<?=$data['respon']?>"class="form-control" id="inputEmail3" placeholder="Respon" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kritik_dan_saran" class="col-sm-3 control-label">Kritik dan Saran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kritik_dan_saran" value="<?=$data['kritik_dan_saran']?>"class="form-control" id="inputEmail3" placeholder="Kritik dan Saran" >
                            </div>
                        </div>
                            

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Respon </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=respon&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Responder
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
	$tanggal_masuk=$_POST['tanggal_masuk'];
    $respon=$_POST['respon'];
    $kritsar=$_POST['kritik_dan_saran'];
    //buat sql
    $sql="UPDATE respon SET 
    nik_responder='$nik_responder',
    nama_responder='$nama_responder',
    tanggal_masuk='$tanggal_masuk',
    respon='$respon',
    kritik_dan_saran='$kritsar'
	WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=respon&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



