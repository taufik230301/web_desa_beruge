<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_utama/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view("admin_utama/components/navbar.php") ?>

        <?php $this->load->view("admin_utama/components/sidebar.php") ?>

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
                                <li class="breadcrumb-item"><a href="<?=base_url();?>Dashboard/view_admin_utama">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url();?>Kegiatan/view_admin_utama">Kegiatan</a></li>
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


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Kegiatan</th>
                                                <th>Foto Kegiatan</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ahsjas</td>
                                                <td>asjkajs</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                            </tr>
                                            <tr>
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

    <?php $this->load->view("admin_utama/components/js.php") ?>
</body>

</html>