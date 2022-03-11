 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?=base_url();?>Dashboard/view_admin_utama" class="brand-link">
         <img src="<?= base_url();?>assets/admin_lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url();?>assets/admin_lte/dist/img/account.jpg" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= $this->session->userdata('username'); ?> </a>
             </div>
         </div>



         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="<?=base_url();?>Dashboard/view_admin_utama" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?=base_url();?>Data_penduduk/view_admin_utama" class="nav-link">
                         <i class="nav-icon fas fa-address-card"></i>
                         <p>
                             Data Penduduk
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?=base_url();?>Kegiatan/view_admin_utama" class="nav-link">
                         <i class="nav-icon fas fa-chart-line"></i>
                         <p>
                             Data Kegiatan
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-bars"></i>
                         <p>
                             Filter Data Penduduk
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_kelas_ekonomi/3"
                                 class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Penerima Bantuan</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_kelas_ekonomi/2"
                                 class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tidak Menerima Bantuan</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-bars"></i>
                         <p>
                             Filter RT Penduduk
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/2" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 001</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/3" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 002</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/4" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 003</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/5" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 004</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/6" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 005</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/7" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 006</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/8" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 007</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/9" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 008</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/10" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 009</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/11" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 010</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/12" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 011</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/13" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 012</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/14" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 013</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_utama_filter_rt/15" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>RT 014</p>
                             </a>
                         </li>
                     </ul>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>