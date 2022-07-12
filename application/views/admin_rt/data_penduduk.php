<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_rt/components/header.php") ?>

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

    <?php if ($this->session->flashdata('eror_hapus')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Ditambahkan!",
        icon: "error"
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

        <?php $this->load->view("admin_rt/components/navbar.php") ?>

        <?php $this->load->view("admin_rt/components/sidebar.php") ?>

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
                                                <th>No</th>
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
                                                <th>Status Verifkasi</th>
                                                <th>Foto KTP</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                  
                                  $id = 0;
                                  foreach($data_penduduk as $i)
                                  :
                                  $id++;
                                  $id_user = $i['id'];
                                  $id_user_detail = $i['id_user_detail'];
                                  $nama = $i['nama'];
                                  $username = $i['username'];
                                  $password = $i['password'];
                                  $email = $i['email'];
                                  $no_hp = $i['no_hp']; 
                                  $nik = $i['nik']; 
                                  $tempat_lahir = $i['tempat_lahir']; 
                                  $tgl_lahir = $i['tgl_lahir']; 
                                  $alamat = $i['alamat']; 
                                  $jenis_kelamin = $i['jenis_kelamin']; 
                                  $pekerjaan = $i['pekerjaan']; 
                                  $nomor_rt = $i['nomor_rt']; 
                                  $id_rt = $i['id_rt']; 
                                  $kategori_bantuan = $i['kategori_bantuan']; 
                                  $kategori_kelas_ekonomi = $i['kategori_kelas_ekonomi']; 
                                  $keterangan = $i['keterangan']; 
                                  $status_verifikasi = $i['status_verifikasi']; 
                                  $foto_ktp = $i['foto_ktp']; 

                
                              ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $nama ?></td>
                                                <td><?= $email ?></td>
                                                <td><?= $no_hp ?></td>
                                                <td><?= $nik ?></td>
                                                <td><?= $tempat_lahir ?></td>
                                                <td><?= $tgl_lahir ?></td>
                                                <td><?= $alamat ?></td>
                                                <td><?= $jenis_kelamin ?></td>
                                                <td><?= $pekerjaan ?></td>
                                                <td><?= $nomor_rt ?></td>
                                                <td><?= $kategori_bantuan ?></td>
                                                <td><?= $kategori_kelas_ekonomi ?></td>
                                                <td><?= $keterangan ?></td>
                                                <td><?= $status_verifikasi ?></td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/ktp/<?php echo $foto_ktp?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/ktp/<?php echo $foto_ktp?>"
                                                                style="width: 25%"> </a>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit_data_penduduk<?= $id_user ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#hapus<?php echo  $id_user ?>"
                                                                class="btn btn-danger"><i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Hapus Data Penduduk -->
                                            <div class="modal fade" id="hapus<?= $id_user ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                Penduduk
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="<?php echo base_url()?>Data_Penduduk/hapus_data_admin_rt?>"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo $id_user?>" />
                                                                        <input type="hidden" name="id_user_detail"
                                                                            value="<?php echo $id_user_detail?>" />
                                                                        <input type="text" class="form-control"
                                                                            id="foto_ktp_old"
                                                                            aria-describedby="emailHelp"
                                                                            name="foto_ktp_old" value="<?=$foto_ktp?>"
                                                                            hidden>
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



                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="edit_data_penduduk<?= $id_user ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                                                Penduduk</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="<?= base_url(); ?>Data_Penduduk/edit_data_admin_rt"
                                                                enctype="multipart/form-data" method="POST">
                                                                <input type="text" name="id" value="<?= $id_user ?>"
                                                                    hidden>
                                                                <input type="text" name="id_user_detail"
                                                                    value="<?= $id_user_detail ?>" hidden>
                                                                <div class="form-group">
                                                                    <label for="nama">Nama Lengkap</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        name="nama" aria-describedby="emailHelp"
                                                                        value="<?= $nama ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <input type="text" class="form-control"
                                                                        id="username" name="username"
                                                                        aria-describedby="emailHelp"
                                                                        value="<?= $username ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="password" name="password"
                                                                        aria-describedby="emailHelp"
                                                                        value="<?= $password ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_hp">No HP</label>
                                                                    <input type="text" class="form-control" id="no_hp"
                                                                        name="no_hp" aria-describedby="emailHelp"
                                                                        value="<?= $no_hp ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control" id="email"
                                                                        name="email" aria-describedby="emailHelp"
                                                                        value="<?= $email ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nik">NIK</label>
                                                                    <input type="text" class="form-control" id="nik"
                                                                        name="nik" value="<?= $nik ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tempat_lahir" name="tempat_lahir"
                                                                        value="<?= $tempat_lahir ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control"
                                                                        id="tanggal_lahir" name="tanggal_lahir"
                                                                        value="<?= $tgl_lahir ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <textarea class="form-control" id="alamat" rows="3"
                                                                        name="alamat" required><?= $alamat ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                    <select class="form-control" id="jenis_kelamin"
                                                                        name="jenis_kelamin" required>
                                                                        <option value="L">Laki-Laki</option>
                                                                        <option value="P">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pekerjaan">Pekerjaan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="pekerjaan" name="pekerjaan"
                                                                        value="<?= $pekerjaan ?>" required>
                                                                </div>
                                                                <input type="text" value="<?= $id_rt?>" name="id_rt"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="id_kategori_kelas_ekonomi">Pilih
                                                                        Kategori Kelas Ekonomi</label>
                                                                    <select class="form-control"
                                                                        id="id_kategori_kelas_ekonomi"
                                                                        name="id_kategori_kelas_ekonomi" required>
                                                                        <?php foreach($kategori_kelas_ekonomi_data as $u)
                                                                :
                                                                $id_kategori_kelas_ekonomi = $u["id_kategori_kelas_ekonomi"];
                                                                $kategori_kelas_ekonomi = $u["kategori_kelas_ekonomi"];
                                                                ?>

                                                                        <option value="<?=$id_kategori_kelas_ekonomi?>">
                                                                            <?= $kategori_kelas_ekonomi ?></option>
                                                                        <?php endforeach?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="id_kategori_bantuan">Pilih Kategori
                                                                        Bantuan</label>
                                                                    <select class="form-control"
                                                                        id="id_kategori_bantuan"
                                                                        name="id_kategori_bantuan" required>
                                                                        <?php foreach($kategori_bantuan_data as $u)
                                                                :
                                                                $id_kategori_bantuan = $u["id_kategori_bantuan"];
                                                                $kategori_bantuan = $u["kategori_bantuan"];
                                                                ?>

                                                                        <option value="<?=$id_kategori_bantuan?>">
                                                                            <?= $kategori_bantuan ?></option>
                                                                        <?php endforeach?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="id_status_verifikasi">Pilih Status
                                                                        Verfikasi</label>
                                                                    <select class="form-control"
                                                                        id="id_status_verifikasi"
                                                                        name="id_status_verifikasi" required>
                                                                        <?php foreach($status_verifikasi_data as $u)
                                                                :
                                                                $id_status_verifikasi = $u["id_status_verifikasi"];
                                                                $status_verifikasi = $u["status_verifikasi"];
                                                                ?>

                                                                        <option value="<?=$id_status_verifikasi?>">
                                                                            <?= $status_verifikasi ?></option>
                                                                        <?php endforeach?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="keterangan">Keterangan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="keterangan" name="keterangan"
                                                                        value="<?= $keterangan ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_ktp">Foto KTP</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_ktp" name="foto_ktp"
                                                                        value="<?= $foto_ktp ?>" required>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    id="foto_ktp_old" aria-describedby="emailHelp"
                                                                    name="foto_ktp_old" value="<?=$foto_ktp?>" hidden>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal Tambah -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                                    Penduduk</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url(); ?>Data_Penduduk/input_data_admin_rt"
                                                    enctype="multipart/form-data" method="POST">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="nama" name="nama"
                                                            aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" id="username"
                                                            name="username" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="text" class="form-control" id="password"
                                                            name="password" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No HP</label>
                                                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                                                            aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" id="email" name="email"
                                                            aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nik">NIK</label>
                                                        <input type="text" class="form-control" id="nik" name="nik"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="tempat_lahir"
                                                            name="tempat_lahir" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="tanggal_lahir"
                                                            name="tanggal_lahir" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea class="form-control" id="alamat" rows="3"
                                                            name="alamat" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select class="form-control" id="jenis_kelamin"
                                                            name="jenis_kelamin" required>
                                                            <option value="L">Laki-Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <input type="text" class="form-control" id="pekerjaan"
                                                            name="pekerjaan" required>
                                                    </div>
                                                    <input type="text" value="<?=  $this->session->userdata('id_rt') ?>"
                                                        name="id_rt" hidden>
                                                    <div class="form-group">
                                                        <label for="id_kategori_kelas_ekonomi">Pilih
                                                            Kategori Kelas Ekonomi</label>
                                                        <select class="form-control" id="id_kategori_kelas_ekonomi"
                                                            name="id_kategori_kelas_ekonomi" required>
                                                            <?php foreach($kategori_kelas_ekonomi_data as $u)
                                                                :
                                                                $id_kategori_kelas_ekonomi = $u["id_kategori_kelas_ekonomi"];
                                                                $kategori_kelas_ekonomi = $u["kategori_kelas_ekonomi"];
                                                                ?>

                                                            <option value="<?=$id_kategori_kelas_ekonomi?>">
                                                                <?= $kategori_kelas_ekonomi ?></option>
                                                            <?php endforeach?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_kategori_bantuan">Pilih Kategori
                                                            Bantuan</label>
                                                        <select class="form-control" id="id_kategori_bantuan"
                                                            name="id_kategori_bantuan" required>
                                                            <?php foreach($kategori_bantuan_data as $u)
                                                                :
                                                                $id_kategori_bantuan = $u["id_kategori_bantuan"];
                                                                $kategori_bantuan = $u["kategori_bantuan"];
                                                                ?>

                                                            <option value="<?=$id_kategori_bantuan?>">
                                                                <?= $kategori_bantuan ?></option>
                                                            <?php endforeach?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="id_status_verifikasi">Pilih Status
                                                            Verfikasi</label>
                                                        <select class="form-control" id="id_status_verifikasi"
                                                            name="id_status_verifikasi">
                                                            <?php foreach($status_verifikasi_data as $u)
                                                                :
                                                                $id_status_verifikasi = $u["id_status_verifikasi"];
                                                                $status_verifikasi = $u["status_verifikasi"];
                                                                ?>

                                                            <option value="<?=$id_status_verifikasi?>">
                                                                <?= $status_verifikasi ?></option>
                                                            <?php endforeach?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keterangan">Keterangan</label>
                                                        <input type="text" class="form-control" id="keterangan"
                                                            name="keterangan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="foto_ktp">Foto KTP</label>
                                                        <input type="file" class="form-control" id="foto_ktp"
                                                            name="foto_ktp" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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

    <?php $this->load->view("admin_rt/components/js.php") ?>
</body>

</html>