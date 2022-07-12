<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin_pkh/components/header.php") ?>

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
                                <li class="breadcrumb-item"><a href="#">Data Penduduk</a></li>

                            </ol>
                        </div>
                        <!-- /.col -->
                        <!-- <div class="col-sm-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Tambah Data <i class="fas fa-plus"></i>
                            </button>
                        </div> -->
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
                                                <th>Dusun</th>
                                                <th>Kategori Bantuan</th>
                                                <th>Kategori Kelas Ekonomi</th>
                                                <th>Keterangan</th>
                                                <th>Status Verfikasi</th>
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
                                  $email = $i['email'];
                                  $no_hp = $i['no_hp']; 
                                  $nik = $i['nik']; 
                                  $tempat_lahir = $i['tempat_lahir']; 
                                  $tgl_lahir = $i['tgl_lahir']; 
                                  $alamat = $i['alamat']; 
                                  $jenis_kelamin = $i['jenis_kelamin']; 
                                  $pekerjaan = $i['pekerjaan']; 
                                  $nomor_rt = $i['nomor_rt']; 
                                  $kategori_bantuan = $i['kategori_bantuan']; 
                                  $kategori_kelas_ekonomi = $i['kategori_kelas_ekonomi']; 
                                  $keterangan = $i['keterangan']; 
                                  $status_verifikasi = $i['status_verifikasi']; 

                
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
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit_data_penduduk<?= $id_user ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit Data Penduduk-->
                                            <div class="modal fade" id="edit_data_penduduk<?= $id_user ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                                Penduduk</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="<?= base_url(); ?>Data_Penduduk/edit_data_admin_pkh"
                                                                enctype="multipart/form-data" method="POST">
                                                                <input type="text" name="id_user_detail"
                                                                    value="<?= $id_user_detail ?>" hidden>

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
                                                                            <?= $kategori_bantuan ?> </option>
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
                                <form action="<?= base_url(); ?>Data_Penduduk/input_data_admin_pkh"
                                    enctype="multipart/form-data" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            aria-describedby="emailHelp" required>
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
                                        <input type="text" class="form-control" id="nik" name="nik" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_rt">Pilih Dusun</label>
                                        <select class="form-control" id="id_rt" name="id_rt" required>
                                            <?php foreach($rt_data as $u)
                                                                :
                                                                $id_rt = $u["id_rt"];
                                                                $nomor_rt = $u["nomor_rt"];
                                                                ?>

                                            <option value="<?=$id_rt?>"><?= $nomor_rt ?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kategori_kelas_ekonomi">Pilih Kategori Kelas Ekonomi</label>
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
                                        <label for="id_kategori_bantuan">Pilih Kategori Bantuan</label>
                                        <select class="form-control" id="id_kategori_bantuan"
                                            name="id_kategori_bantuan" required>
                                            <?php foreach($kategori_bantuan_data as $u)
                                                                :
                                                                $id_kategori_bantuan = $u["id_kategori_bantuan"];
                                                                $kategori_bantuan = $u["kategori_bantuan"];
                                                                ?>

                                            <option value="<?=$id_kategori_bantuan?>"><?= $kategori_bantuan ?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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