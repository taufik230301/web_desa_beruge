<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_utama/components/header.php") ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Ditambahkan!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_file')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data File Terlalu Besar !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diedit!",
        icon: "error"
    });
    </script>
    <?php } ?>
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
                                        href="<?=base_url();?>dashboard/view_admin_utama">Home</a></li>
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
                                    <h3 class="card-title">Data Kegiatan</h3>
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
                                                <th>Penulis</th>
                                                <th>Tanggal Publish</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                  
                                  $id = 0;
                                  foreach($kegiatan as $i)
                                  :
                                  $id++;
                                  $id_kegiatan = $i['id_kegiatan'];
                                  $nama_kegiatan = $i['nama_kegiatan'];
                                  $foto_kegiatan = $i['foto_kegiatan'];
                                  $keterangan = $i['keterangan'];
                                  $tgl_kegiatan = $i['tgl_kegiatan'];
                                  $username = $i['username'];
                                  $created_at = $i['created_at'];
                                

                
                              ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $nama_kegiatan ?></td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/kegiatan/<?php echo $foto_kegiatan?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/kegiatan/<?php echo $foto_kegiatan?>"
                                                                style="width: 25%"> </a>
                                                </td>
                                                <td><?= $keterangan ?></td>
                                                <td><?= $tgl_kegiatan ?></td>
                                                <td><?= $username ?></td>
                                                <td><?= $created_at ?></td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit_kegiatan<?= $id_kegiatan ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#hapus<?php echo  $id_kegiatan ?>"
                                                                class="btn btn-danger"><i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Hapus Data kegiatan -->
                                            <div class="modal fade" id="hapus<?= $id_kegiatan ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                Kegiatan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="<?php echo base_url()?>Kegiatan/hapus_data_admin_utama?>"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo $id_kegiatan?>" />
                                                                        <input type="text" class="form-control"
                                                                            id="foto_kegiatan_old"
                                                                            aria-describedby="emailHelp"
                                                                            name="foto_kegiatan_old"
                                                                            value="<?=$foto_kegiatan?>" hidden>
                                                                        <p>Apakah kamu yakin ingin menghapus data
                                                                            ini?</i></b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger ripple"
                                                                        data-dismiss="modal">Tidak</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success ripple save-category">Ya</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Edit Kegiatan -->
                                            <div class="modal fade" id="edit_kegiatan<?= $id_kegiatan ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                                                Kegiatan</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="<?= base_url(); ?>Kegiatan/edit_data_admin_utama"
                                                                enctype="multipart/form-data" method="POST">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="id"
                                                                        aria-describedby="emailHelp" name="id"
                                                                        value="<?=$id_kegiatan?>" hidden>
                                                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama_kegiatan" aria-describedby="emailHelp"
                                                                        name="nama_kegiatan"
                                                                        value="<?= $nama_kegiatan ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_kegiatan">Foto Kegiatan</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_kegiatan" aria-describedby="emailHelp"
                                                                        name="foto_kegiatan" required>

                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    id="foto_kegiatan_old" aria-describedby="emailHelp"
                                                                    name="foto_kegiatan_old" value="<?=$foto_kegiatan?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="nama_kegiatan">Keterangan</label>
                                                                    <textarea class="form-control" id="keterangan"
                                                                        rows="3" name="keterangan" required><?= $keterangan ?></textarea>
                                                                </div>
                                                                <div class=" form-group">
                                                                    <label for="tgl_kegiatan">Tanggal Kegiatan</label>
                                                                    <input type="date" class="form-control" id="tgl_kegiatan"
                                                                        aria-describedby="emailHelp" name="tgl_kegiatan" value="<?= $tgl_kegiatan?>">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url(); ?>Kegiatan/input_data_admin_utama"
                                enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                    <input type="text" class="form-control" id="nama_kegiatan"
                                        aria-describedby="emailHelp" name="nama_kegiatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto_kegiatan">Foto Kegiatan</label>
                                    <input type="file" class="form-control" id="foto_kegiatan"
                                        aria-describedby="emailHelp" name="foto_kegiatan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_kegiatan">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" rows="3" name="keterangan" "></textarea>
                                                                </div>
                                                                <div class=" form-group">
                                                                    <label for="tgl_kegiatan">Tanggal Kegiatan</label>
                                                                    <input type="date" class="form-control"
                                                                        id="tgl_kegiatan" aria-describedby="emailHelp"
                                                                        name="tgl_kegiatan">
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
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