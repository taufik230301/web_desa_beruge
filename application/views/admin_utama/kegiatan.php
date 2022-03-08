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
                                <li class="breadcrumb-item"><a
                                        href="<?=base_url();?>Dashboard/view_admin_utama">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="<?=base_url();?>Kegiatan/view_admin_utama">Kegiatan</a></li>
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
                                                <th>No</th>
                                                <th>Nama Kegiatan</th>
                                                <th>Foto Kegiatan</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                  
                                  $id = 0;
                                  foreach($kegiatan as $i)
                                  :
                                  $id++;
                                  $nama_kegiatan = $i['nama_kegiatan'];
                                  $foto_kegiatan = $i['foto_kegiatan'];
                                  $keterangan = $i['keterangan'];
                                  $tgl_kegiatan = $i['tgl_kegiatan'];
                                

                
                              ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $nama_kegiatan ?></td>
                                                <td><?= $foto_kegiatan ?></td>
                                                <td><?= $keterangan ?></td>
                                                <td><?= $tgl_kegiatan ?></td>
                                            </tr>
                                            <?php endforeach?>
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

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                    <input type="text" class="form-control" id="nama_kegiatan"
                                        aria-describedby="emailHelp" name="nama_kegiatan">
                                </div>
                                <div class="form-group">
                                    <label for="foto_kegiatan">Foto Kegiatan</label>
                                    <input type="file" class="form-control" id="foto_kegiatan"
                                        aria-describedby="emailHelp" name="foto_kegiatan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_kegiatan">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" rows="3" name="keterangan"
                                        "></textarea>
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