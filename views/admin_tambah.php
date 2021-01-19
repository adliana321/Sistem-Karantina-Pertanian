<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Admin</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
								<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="password" class="form-control" id="inputEmail3" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="level" class="col-sm-3 control-label">Level</label>
                            <div class="col-sm-9">
                                <input type="text" name="level" class="form-control" id="inputEmail3" placeholder="1" readOnly="true">
                            </div>
                        </div>
						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Admin</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
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
    $no=1;
    $level=$no;
	$pwd_enk=md5($password);
    
    //buat sql
    $sql="INSERT INTO admin VALUES ('','$username','$pwd_enk','$email','$level')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Error");
    if ($query){
        echo "<script>window.location.assign('?page=admin&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>