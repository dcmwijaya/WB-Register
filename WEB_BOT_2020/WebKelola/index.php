<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <script type="text/javascript" src="assets/js/disable_right.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Navbar -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
           
    <!-- link google font -->
    <link href="https://fonts.googleapis.com/css?family=Yrsa" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>WEB KELOLA BOT REGISTRASI ROBOTICS COMMUNITY</title>
</head>
<body>

 <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">            
        <div class="navbar-header">
            <a class="navbar-brand" style="font-weight:bold;color:white;"><img src="assets/img/logo_robotics.png">WEB KELOLA BOT REGISTRASI ROBOTICS COMMUNITY</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>   
        </div>
    </div>
</nav>
    
    <!-- ADD -->
    <div class="modal fade" id="addmhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatikan! Isi sesuai data pribadi..</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="cruds/create.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan nama lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan email" required>
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <input type="text" name="pstudi" id="pstudi" class="form-control" placeholder="Masukan program studi" required>
                        </div>
                        <div class="form-group">
                            <label>Telp</label>
                            <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukan no telp" required>
                        </div>
                        <div class="form-group">
                            <label>Divisi</label>
                            <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Masukan divisi" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" value="Submit" name="insertdata" id="insertdata" class="btn btn-primary">Setuju & Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- EDIT -->
    <div class="modal fade" id="editmhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatikan! Ubah sesuai data pribadi..</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="cruds/update.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Ubah nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ubah email" required>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <input type="text" name="pstudi" id="pstudi" class="form-control" placeholder="Ubah program studi" required>
                    </div>
                    <div class="form-group">
                        <label>Telp</label>
                        <input type="number" name="telp" id="telp" class="form-control" placeholder="Ubah no telp" required>
                    </div> 
                    <div class="form-group">
                        <label>Divisi</label>
                        <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Ubah divisi" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" value="Submit" name="updatedata" id="updatedata" class="btn btn-primary">Setuju & Ubah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DELETE -->
    <div class="modal fade" id="deletemhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatikan! Hapus data pribadi..</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="cruds/delete.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h4>Apakah anda yakin akan menghapus data ini ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" value="Submit" name="deletedata" id="deletedata" class="btn btn-primary">Setuju & Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Content Header -->     
    <nav class="content-header navbar justify-content-between">
        <a class="navbar-brand">
            <button type="button" class="btn-header btn btn-primary" data-toggle="modal" data-target="#addmhs">Tambah Anggota Baru</button>
        </a>
        <form class="form-inline" action="" method="POST">

            <a class="navbar-brand" href="index.php">
                <button type="button" class="btn-header btn btn-primary">Refresh</button>
            </a>
            <input class="form-control mr-sm-2" type="text" name="inputsrdata" placeholder="Cari data..." aria-label="Search" required>
            <input class="btn-header btn btn-primary" type="submit" value="Pencarian" name="searchdata" id="searchdata"/>
        </form>
    </nav><br>


    <?php include 'cruds/read.php';
        while ($row = mysqli_fetch_array($query)) {
    ?>

    <table id="datatableid" class="table table-bordered">
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA PENDAFTAR</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PROGRAM STUDI</th>
            <th scope="col">TELP</th>
            <th scope="col">DIVISI</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
    </thead>
    
    <tbody>
        <?php include 'cruds/search.php';
            $cek = mysqli_num_rows($query);
            if($cek < 1){
        ?>
                <tr>
                    <td colspan="8" align="center" style="padding:10px;">Data tidak ditemukan..</td>
                </tr>
            
            <?php
            }else{
                while($row = mysqli_fetch_array($query)) {
            ?>

                <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['nama']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['pstudi']; ?> </td>
                    <td> <?php echo $row['telp']; ?> </td>
                    <td> <?php echo $row['divisi']; ?> </td>
                    <td>
                        <button type="button" class="btn-ed btn btn-success editbtn" data-toggle="modal" data-target="#editmhs">Edit</button>
                    </td>
                    <td>
                        <button type="button" class="btn-del btn btn-danger delbtn" data-toggle="modal" data-target="#deletemhs">Delete</button>
                    </td>
                </tr>
    </tbody>
    <?php
        }
      }
    }
    ?>
    <br>
    </table>
    <nav class="content-footer navbar justify-content-between">
        <div class="info">
            <h6>&nbsp;&nbsp;
                <?php include 'cruds/countdata.php';
                    echo "Jumlah data anggota baru yang tersimpan saat ini : <b>".$jumlah."</b>";
                ?>
            </h6>
        </div>
    </nav>

        <!-- load JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/script.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
      
        <script type="text/javascript" src="assets/js/updatedata.js"></script>
        <script type="text/javascript" src="assets/js/deletedata.js"></script>
    </body>
</html>