<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SISM-DWM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url() ?>assets/image/logo.jpg" />
    <link href="<?= base_url();?>assets/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url();?><?= base_url();?>assets/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="<?= base_url();?>assets/public/assets/css/style.css" rel="stylesheet">
    <script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <!-- =======================================================
  * Template Name: Regna - v4.7.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Saran Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Saran Gagal Ditambahkan!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <a href="<?= base_url()?>Web_public/index">
                    <h1 class="text-white">DESA WANAMUKTI</h1>
                </a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url()?>Web_public/index">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Pendaftaran</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Kegiatan</a></li>
                    <li class="dropdown"><a href="#"><span>Data Bantuan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Data Bantuan</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?=base_url();?>" target="_blank">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Selamat Datang di Desa Wanamukti</h1>
            <h2>Sistem Informasi Desa Wanamukti</h2>
            <a href="#about" class="btn-get-started">Selengkapnya</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Tentang Desa Wanamukti</h2>
                        <p>
                            Sekilas Tentang Desa Wanamukti.
                        </p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Tentang Desa</a></h4>
                            <p class="description">Wana Mukti adalah desa di kecamatan pulau rimau, Kabupaten Banyuasin
                                Sumatera Selatan, Indonesia.
                                Wana Mukti merupakan sebuah desa yang banyak dihuni transmigran sejak tahun 1983 dengan
                                jumlah penduduk 825 Jiwa. Dimana desa
                                tersebut berasal dari pemekaran kecamatan pulau rimau tahun 2006 yang membentuk tungkal
                                ilir yang terbagi menjadi 29 desa.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End About Section -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Visi</h2>
                        <p>
                            Menjadikan Desa Wana Mukti Religious, adil dan sejahtera
                        </p>

                    </div>
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Misi</h2>
                        <p>
                            1. Meciptakan penataan desa yang berkualitas melalui program tata ruang desa berbasis
                            produktivitas ekonomi. <br>
                            2. Meningkatkan mutu layanan kesehatan di desa wana mukti melalui gerakan desa sehat. <br>
                            3. Meluaskan kesadaran hukum masyarakat melaui program sadar hukum. <br>
                            4. Meningkatkan kualitas pendidik baik formal maupun non formal melalui gerakan kampong
                            cerdas. <br>
                            5. Mengoptimalkan hasil produksi perkebunan dan peternakan masyarakat melalui program
                            gerakan mandiri pangan. <br>
                            6. Meningkatkan pelayanan public dan keterbukaan informasi melalui program internet desa.
                            <br>
                            7. Meningkatkan pendapatan asli desa (PAD) melalui program BUMDES (Badan Usaha Milik Desa).
                            <br>
                            8. Peningkatan air bersih layak konsumsi melaui program PAMSIMAS Desa.
                        </p>

                    </div>

                </div>

            </div>
        </section>

        <!-- ======= Data Penduduk Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Data Penduduk Desa Wanamukti</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?=$penduduk['total_penduduk']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                            data-purecounter-end="<?=$penduduk_tidak_mampu['total_penduduk_tidak_mampu']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk Kurang Mampu</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                            data-purecounter-end="<?=$penduduk_mampu['total_penduduk_mampu']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk Sejahtera</p>
                    </div>



                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?=$kegiatan_total['total_kegiatan']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Kegiatan Desa</p>
                    </div>

                </div>
                <div class="row justify-content-md-center counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                            data-purecounter-end="<?=$penduduk_bantuan_tunai_bupati['total_bantuan_tunai_bupati']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk Penerima Bantuan Bupati</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                            data-purecounter-end="<?=$penduduk_bantuan_tunai_langsung['total_bantuan_tunai_langsung']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Penduduk Penerima Bantuan Tunai Langsung</p>
                    </div>



                </div>
            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Langkah - Langkah Lengkapi Data Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Langkah-langkah melengkapi Data</h3>
                    <p class="section-description">Berikut Langkah - langkah melengkapi data bantuan bagi masyarakat</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
                            <h4 class="title"><a href="">1. Kunjungi Web SISM-DWM</a></h4>
                            <p class="description">Kunjungi Web Sistem Informasi Manjemen Penrima Bantuan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a></div>
                            <h4 class="title"><a href="">2. Klik Lengkapi Data</a></h4>
                            <p class="description">Bisa langsung klik Tombol Lengkapi data Bantuan masyarakat.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
                            <h4 class="title"><a href="">3. Konfirmasi Status Data Dana Bantuan</a></h4>
                            <p class="description">Setelah melengkapi data dana bantuan, masyarakat akan mendapat
                                informasi terkait data persebaran dana bantuan masyarakat sekaligus status verifikasi
                                berkas dari admin.</p>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Lengakapi Data Section ======= -->
        <section id="call-to-action">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Lengkapi data bantuan masyarakat</h3>
                        <p class="cta-text"> Validasi data bantuan masyarakat desa wanamukti.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?= base_url()?>Register/index" target="_blank">Lengkapi
                            Data Anda</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Kegiatan Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Kegiatan</h3>
                    <p class="section-description">Kegiatan Desa Wanamukti</p>
                </div>



                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
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
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url();?>assets/kegiatan/<?=$foto_kegiatan?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $nama_kegiatan ?></h4>
                            <p><?=$tgl_kegiatan?></p>
                            <a href="<?= base_url();?>assets/kegiatan/<?=$foto_kegiatan?>"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="<?= base_url()?>/Web_Public/detail_kegiatan/<?=$id_kegiatan?>" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>


        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Kontak</h3>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31885.7836378196!2d104.45804036729093!3d-2.596238378932168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b3b4babedac21%3A0x18b1e6a9d23f652d!2sWana%20Mukti%2C%20Pulau%20Rimau%2C%20Banyuasin%20Regency%2C%20South%20Sumatra!5e0!3m2!1sen!2sid!4v1647433801265!5m2!1sen!2sid"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>


            <div class="container mt-5">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Jl. 19 Desa Wana Mukti t<br>Kecamatan Pulau Rimau <br>Kabupaten Banyuasin</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>Evi Oktafian <br> 081258901390</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <h2>Kotak Kritik dan Saran</h2>
                        <form action="<?= base_url(); ?>Web_Public/input_saran" enctype="multipart/form-data"
                            method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
                            </div>
                            <button type=" submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Desa Wanamukti</strong>
            </div>
            <div class="credits">
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url();?>assets/public/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url();?>assets/public/assets/js/main.js"></script>

</body>

</html>