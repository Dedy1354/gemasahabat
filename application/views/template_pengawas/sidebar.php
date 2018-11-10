<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/logo2.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <?php echo ($this->session->userdata('USER_NAME'));?>
            </div>
        </div>
        <!-- search form -->
       
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-laptop"></i>
                    <span>Data Keluarga</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>pengawas/C_keluarga"><i class="fa fa-table"></i>Keluarga</a></li>
                </ul>
            </li> 
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>Input Penilaian</span>
                    <span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>pengawas/C_penilaian"><i class="fa fa-table"></i></i>Data Penilaian</a></li>
                </ul>
            </li>           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">