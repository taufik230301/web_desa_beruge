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
                            <h1 class="m-0">Data Penduduk</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Penduduk</li>
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

    <?php $this->load->view("admin_pkh/components/js.php") ?>
</body>

</html>