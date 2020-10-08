<div class="container-fluid">
        <nav class="navbar navbar-expand-lg sticky-top justify-content-center">
            <div class="col-md-10">
                <br>
                <div class="row">
                    <div class="col-md-6 col-5">
                        <!-- <a class="navbar-brand"><img src="<?= base_url('template/');?>custom/img/logo-etle-pmj.png" alt="" style="width: 80%;"></a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-md-6 col-7">
                        <div class="float-right">
                            <button id="btnnav" class="btn btn-light"  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><i class="fas fa-bars"></i></button> 
                            
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul id="my-nav" class="navbar-nav" style="margin-top: 10px;">
                                    <li class="nav-item <?= $this->uri->segment(2) == "index" ? 'active' : ''?>">
                                        <a class="nav-link" href="<?=site_url('frontend/index');?>">Home</a>
                                    </li>
                                    <li class="nav-item <?= $this->uri->segment(2) == "about" ? 'active' : ''?>">
                                        <a class="nav-link" href="<?=site_url('frontend/about');?>">About ETLE</a>
                                    </li>
                                    <li class="nav-item <?= $this->uri->segment(2) == "contact" ? 'active' : ''?>">
                                        <a class="nav-link" href="<?=site_url('frontend/contact');?>">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div>

