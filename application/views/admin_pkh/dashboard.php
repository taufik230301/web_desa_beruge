<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_pkh/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('login_success')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Login Berhasil, Selamat Datang Admin !",
        icon: "success",
        timer: 950
    });
    </script>
    <?php } ?>
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
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

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
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?=$penduduk['total_penduduk']?></h3>

                                    <p>Jumlah Data Penduduk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="<?=base_url();?>Data_Penduduk/view_admin_pkh" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?=$penduduk_mampu['total_penduduk_mampu']?></h3>

                                    <p>Jumlah Penduduk Kategori Mampu</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?=base_url();?>Data_Penduduk/view_admin_pkh_filter_kelas_ekonomi/2" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?=$penduduk_tidak_mampu['total_penduduk_tidak_mampu']?></h3>

                                    <p>Jumlah Penduduk Kategori Tidak Mampu</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-minus-circled"></i>
                                </div>
                                <a href="<?=base_url();?>Data_Penduduk/view_admin_pkh_filter_kelas_ekonomi/3" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?=$penduduk_bantuan_tunai_langsung['total_bantuan_tunai_langsung']?></h3>

                                    <p>Jumlah Penduduk Penerima Bantuan Langsung Tunai</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?=base_url();?>Dashboard/view_admin_pkh" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?=$penduduk_bantuan_tunai_bupati['total_bantuan_tunai_bupati']?></h3>

                                    <p>Jumlah Penduduk Penerima Bantuan Dana Bupati</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-connection-bars"></i>
                                </div>
                                <a href="<?=base_url();?>Dashboard/view_admin_pkh" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
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