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
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?=base_url();?>dashboard/view_masyarakat">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="<?=base_url();?>Data_penduduk/view_masyarakat_penduduk">Data Penduduk</a></li>
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
                                                <th>Status Verfikasi</th>
                                                <th>Foto KTP</th>

                                            </tr>
                                        </thead>
                                        <tbody>
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
                                  $foto_ktp = $i['foto_ktp']; 
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
                                                    <center> <a
                                                            href="<?= base_url();?>assets/ktp/<?php echo $foto_ktp?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/ktp/<?php echo $foto_ktp?>"
                                                                style="width: 25%"> </a>
                                                </td>
                                               
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