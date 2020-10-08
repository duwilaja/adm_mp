<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php $this->load->view('adm/_partials/head'); ?>
</head>
<style>
    .bg-dafault{
        background: #EEE;
    }
    .bg-dafault{
        background: #EEE;
    }
    
    #map {
        height: 100%;
    }
</style>
<body class="app">
    
    <!---Global-loader-->
    <div id="global-loader" >
        <img src="<?=base_url();?>template/images/svgs/loader.svg" alt="loader">
    </div>
    
    <div class="page">
        <div class="page-main">
            
            <?php $this->load->view('adm/_partials/navbar'); ?>
            
            <div class="app-content page-body">
                <?php $this->load->view('adm/'.$view); ?>
            </div><!-- end app-content-->
        </div>
        
        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2020 <a href="#">PT Madina Mitra Teknik</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div>
    
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <?php $this->load->view('adm/_partials/js'); ?>
</body>
</html>