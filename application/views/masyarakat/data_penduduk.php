<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("masyarakat/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <?php $this->load->view("masyarakat/components/navbar.php") ?>
        <?php $this->load->view("masyarakat/components/sidebar.php") ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Update Data Diri</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Update data</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
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
                                    <label for="id_kategori_bantuan">Pilih Kategori Bantuan</label>
                                    <select class="form-control" id="id_kategori_bantuan" name="id_kategori_bantuan">
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_kategori_kelas_ekonomi">Pilih Kategori Kelas Ekonomi</label>
                                    <select class="form-control" id="id_kategori_kelas_ekonomi" name="id_kategori_kelas_ekonomi">
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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

    <?php $this->load->view("masyarakat/components/js.php") ?>
</body>

</html>