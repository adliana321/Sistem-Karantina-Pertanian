<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Admin</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                             <div class="col-sm-9">
								<input type="text" name="username" value="<?=$data['username']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="password" value="<?=$data['password']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Admin</button>
                            </div>
                        </div>
						
						
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=admin&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Admin
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $pwd_enkrip=md5($password);
    
	
    //buat sql
    $sql="UPDATE admin SET username = '$username',  password='$pwd_enkrip', email='$email' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=admin&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



