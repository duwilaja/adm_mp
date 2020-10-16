<!--  section  -->
<section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
    <div class="container">
        <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Main page</span></div>
        
        <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
            <h1>Sahrul Rizal</h1>
            <div style="float:left;font-weight:bolf;">CV. Marga Utama</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="dashboard-header fl-wrap">
        <div class="container">
            <div class="dashboard-header_conatiner fl-wrap">
                <div class="dashboard-header-avatar">
                    <img src="images/avatar/1.png" alt="">
                    <a href="dashboard-myprofile.html" class="color-bg edit-prof_btn"><i class="fal fa-edit"></i></a>
                </div>
                <div class="dashboard-header-stats-wrap">
                    <div class="dashboard-header-stats">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--  dashboard-header-stats-item -->
                                <div class="swiper-slide">
                                    <div class="dashboard-header-stats-item">
                                        <i class="fal fa-handshake-alt"></i>
                                        Total Transaksi	
                                        <span>21</span>
                                    </div>
                                </div>
                                <!--  dashboard-header-stats-item end -->
                                <!--  dashboard-header-stats-item -->
                                <div class="swiper-slide">
                                    <div class="dashboard-header-stats-item">
                                        <i class="fal fa-shopping-cart"></i>
                                        Total Keranjang
                                        <span>3</span>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  dashboard-header-stats  end -->
                </div>
                <!--  dashboard-header-stats-wrap end -->
                <a class="add_new-dashboard" href="<?=site_url('Users/buka_toko')?>">Buka Toko</a>
            </div>
        </div>
    </div>
    <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
    <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
    <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
        <div class="circle_bg-bal circle_bg-bal_small"></div>
    </div>
    <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
        <div class="circle_bg-bal circle_bg-bal_big"></div>
    </div>
    <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
        <div class="circle_bg-bal circle_bg-bal_big"></div>
    </div>
    <div class="circle-wrap" style="left:40%;bottom:-70px;"  >
        <div class="circle_bg-bal circle_bg-bal_middle"></div>
    </div>
    <div class="circle-wrap" style="right:40%;top:-10px;"  >
        <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
    </div>
    <div class="circle-wrap" style="right:55%;top:90px;"  >
        <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
    </div>
</section>
<!--  section  end-->
<!--  section  -->
<section class="gray-bg main-dashboard-sec" id="sec1">
    <div class="container">
        <!--  dashboard-menu-->
        <div class="col-md-3">
            <?php $this->load->view('frontend/page/users/_partials/sidebar')?>
        </div>
        <!-- dashboard-menu  end-->
        <!-- dashboard content-->
        <div class="col-md-9">
            <?php $this->load->view('frontend/page/users/'.$view_single);?>
        </div>
        <!-- dashboard content end-->
    </div>
</section>
<!--  section  end-->
<div class="limit-box fl-wrap"></div>
