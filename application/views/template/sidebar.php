<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/anggota.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <?php echo ($this->session->userdata('LEVEL'));?>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-book"></i>
                    <span>Mater Kecamatan</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/C_kecamatan"><i class="fa fa-bookmark"></i>Kecamatan</a></li>
                    <li><a href="<?php echo base_url();?>admin/C_desa"><i class="fa fa-bookmark"></i>Desa</a></li>
                    <li><a href="<?php echo base_url();?>admin/C_alamat"><i class="fa fa-bookmark"></i>Alamat</a></li>
                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-users"></i>
                    <span>Master Keluarga</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/C_keluarga"><i class="fa fa-user-plus"></i>Keluarga</a></li>

                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i>
                    <span>Master Indikator</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/C_kriteria"><i class="fa fa-list-ol"></i></i>Kriteria</a></li>
                    <li><a href="<?php echo base_url();?>admin/C_subkriteria"><i class="fa fa-list-ul"></i></i>SubKriteria</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square"></i>
                    <span>Data Penilaian</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/C_penilaian/all_Penilaian"><i class="fa fa-pencil-square-o"></i></i>Input Penilaian</a></li>
                    <li><a href="<?php echo base_url();?>admin/C_penilaian"><i class="fa fa-eye"></i></i>Lihat Penilaian</a></li>
                    <li><a href="<?php echo base_url();?>admin/C_rangking"><i class="fa fa-sort-numeric-asc"></i></i>Rangking Penilaian</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i>
                    <span>Data User</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>admin/C_user"><i class="fa fa-user-plus"></i></i>User</a></li>
                </ul>
            </li>                 
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">