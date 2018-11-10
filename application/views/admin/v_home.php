<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->

<section class="content">
		    	<div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">

                                <div id="reviews" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="item active">

                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>VISI<i class="fa fa-quote-right"></i></h4>
                                                <h5 class="pull-right"><strong class="c-black">”TERWUJUDNYA BIROKRASI SEHAT, MASYARAKAT KUAT DAN LINGKUNGAN BERSAHABAT DEMI TERCAPAINYA KABUPATEN SAMPANG YANG BERMARTABAT ”</strong></h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i> MISI<i class="fa fa-quote-right"></i></h4>
                    
                                                <h5 class="pull-right"><strong class="c-black">” MENINGKATKAN PELAYANAN DASAR YANG BERKUALITAS DAN TERJANGKAU” </strong></h5>
                                            </div>

                                        </div>
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>                                        
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        

                        <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img width="100%" src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/dpmd.jpg') ?>" alt="" />

                                    </div>
                                    <div class="item">
                                        <img width="100%" src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/dpmd.jpg') ?>" alt="" />

                                    </div>
                                    
                                </div>

                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>
</section>
	


<?php
$this->load->view('template/js');
?>


<?php
$this->load->view('template/foot');
?>