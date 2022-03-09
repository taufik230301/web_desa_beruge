<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("masyarakat/components/header.php") ?>

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
                            <?php
                                  
                                  $id = 0;
                                  foreach($data_penduduk as $i)
                                  :
                                  $id++;
                                  $id_user_detail = $i['id_user_detail'];
                                  $id_user = $i['id'];
                                  $password =  $i['password'];
                                  $nama = $i['nama'];
                                  $username = $i['username'];
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

                
                              ?>
                            <form action="<?= base_url(); ?>Data_penduduk/edit_data_masyarakat"
                                enctype="multipart/form-data" method="POST"  class="mb-3">
                                <input type="text" name="id" value="<?= $id_user ?>" hidden>
                                <input type="text" name="id_user_detail" value="<?= $id_user_detail ?>" hidden>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        aria-describedby="emailHelp" value="<?=$nama?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        aria-describedby="emailHelp" value="<?=$username?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                        aria-describedby="emailHelp" value="<?=$password?>">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" value="<?=$nik?>" name="nik">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">NO HP</label>
                                    <input type="text" class="form-control" id="no_hp" value="<?=$no_hp?>" name="no_hp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="<?=$email?>" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        value="<?= $tempat_lahir ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        value="<?= $tgl_lahir ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        value="<?= $tempat_lahir ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3"
                                        name="alamat"><?= $alamat ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                        value="<?= $pekerjaan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="id_rt">Pilih RT</label>
                                    <select class="form-control" id="id_rt" name="id_rt">
                                        <?php foreach($rt_data as $u)
                                                                :
                                                                $id_rt = $u["id_rt"];
                                                                $nomor_rt = $u["nomor_rt"];
                                                                ?>

                                        <option value="<?=$id_rt?>"><?= $nomor_rt ?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_kategori_kelas_ekonomi">Pilih
                                        Kategori Kelas Ekonomi</label>
                                    <select class="form-control" id="id_kategori_kelas_ekonomi"
                                        name="id_kategori_kelas_ekonomi">

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
                                    <select class="form-control" id="id_kategori_bantuan" name="id_kategori_bantuan">
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
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                                        value="<?= $keterangan ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <?php endforeach?>
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