<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_pkh/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <?php $this->load->view("admin_pkh/components/navbar.php") ?>

        <?php $this->load->view("admin_pkh/components/sidebar.php") ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Penduduk</a></li>

                            </ol>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Tambah Data <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Button trigger modal -->



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Penduduk</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No HP</th>
                                                <th>NIK</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Pekerjaan</th>
                                                <th>RT</th>
                                                <th>Kategori Bantuan</th>
                                                <th>Kategori Kelas Ekonomi</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ahsjas</td>
                                                <td>asjkajs</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td> 4</td>
                                                <td>ahsjas</td>
                                                <td>asjkas</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td> 4</td>
                                                <td>asjkajs</td>
                                                <td>Win 95+</td>
                                                <td> 4aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
                                            </tr>
                                            <tr>
                                                <td>ahsjas</td>
                                                <td>asjkajs</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td> 4</td>
                                                <td>ahsjas</td>
                                                <td>asjkajs</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td> 4</td>
                                                <td>asjkajs</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penduduk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No HP</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_rt">Pilih RT</label>
                                        <select class="form-control" id="id_rt" name="id_rt">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kategori_kelas_ekonomi">Pilih Kategori Kelas Ekonomi</label>
                                        <select class="form-control" id="id_kategori_kelas_ekonomi"
                                            name="id_kategori_kelas_ekonomi">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("admin_pkh/components/js.php") ?>
</body>

</html>