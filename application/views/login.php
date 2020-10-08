<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Aronox – Admin Bootstrap4 Responsive Webapp Dashboard Templat" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin site template, html admin template,responsive admin template, admin panel template, bootstrap admin panel template, admin template, admin panel template, bootstrap simple admin template premium, simple bootstrap admin template, best bootstrap admin template, simple bootstrap admin template, admin panel template,responsive admin template, bootstrap simple admin template premium"/>

		<!-- Title -->
		<title>Dashboard API</title>

		<!--Favicon -->
		<link rel="icon" href="<?=base_url()?>template/images/brand/matrik.png" type="image/x-icon"/>

		<!-- Style css -->
		<link href="<?=base_url()?>template/css/style.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?=base_url()?>template/plugins/iconfonts/font-awesome/font-awesome.min.css" rel="stylesheet">

		<!-- Skin css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?=base_url()?>template/skins/hor-skin/hor-skin1.css" />

	</head>

	<body class="h-100vh">
		<div class="page">
			<div class="page-single construction-body">
				<div class="container text-center single-page single-pageimage  ">
				    <div class="row justify-content-center">
						<div class="col-xl-5  col-lg-6 col-md-12">
                            <div class="col-md-11">
                                <?php if ($this->session->userdata('gagal')) { ?>
                                    <div class="alert alert-icon alert-warning pl-0 pr-0" role="alert">
                                        <?=$this->session->userdata('gagal')?>
                                    </div>
                                <?php } ?>
                            </div>
							<div class="col-lg-11">
								<div class="wrapper wrapper2">
									<form id="login" class="card-body" method="post" action="<?=site_url('adm/Login/proses_login')?>">
										<img src="<?=base_url()?>template/images/brand/logo-matrik.png" class="header-brand-img light-view mb-4" alt="Matrik logo">
										<p class="mb-6">Sign in to your Account</p>
										<div class="input-group mb-3">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
										<div class="input-group mb-4">
											<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
											<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
										<div class="row mb-0">
											<div class="col-12">
												<button type="submit" class="btn btn-primary btn-block">Login</button>
											</div>
											<div class="col-12 mb-0">
												<a href="forgot-password.html" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jquery js-->
		<script src="<?=base_url()?>template/js/vendors/jquery-3.4.0.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="<?=base_url()?>template/plugins/bootstrap/popper.min.js"></script>
		<script src="<?=base_url()?>template/plugins/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
