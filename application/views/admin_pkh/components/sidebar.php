 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?=base_url();?>dashboard/view_admin_pkh" class="brand-link">
         <img src="<?= base_url() ?>assets/image/logo.jpg" alt="SISM-DWM Logo"
             class="brand-image img-circle elevation-3">
         <span class="brand-text font-weight-light">SISM-DWM</span>
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
                     <a href="<?=base_url();?>dashboard/view_admin_pkh" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="<?=base_url();?>Data_penduduk/view_admin_pkh" class="nav-link">
                         <i class="nav-icon fas fa-address-card"></i>
                         <p>
                             Data Penduduk
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Filter Data Penduduk
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_pkh_filter_kelas_ekonomi/3" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Penerima Bantuan</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?=base_url();?>Data_Penduduk/view_admin_pkh_filter_kelas_ekonomi/2" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tidak Menerima Bantuan</p>
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