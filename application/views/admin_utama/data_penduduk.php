<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_utama/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view("admin_utama/components/navbar.php") ?>

        <?php $this->load->view("admin_utama/components/sidebar.php") ?>

        <?php $this->load->view("admin_utama/components/navbar_link.php") ?>

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