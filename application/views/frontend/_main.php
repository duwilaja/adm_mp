<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php $this->load->view('frontend/_partials/head'); ?>
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
            <?php $this->load->view('frontend/_partials/header'); ?>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <?php $this->load->view('frontend/page/'.$view);?>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
            <?php $this->load->view('frontend/_partials/footer'); ?>
            <!--footer end -->                 
            <!--register form -->
            <?php $this->load->view('frontend/_partials/form'); ?>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>     
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <?php $this->load->view('frontend/_partials/js'); ?>
    </body>
</html>