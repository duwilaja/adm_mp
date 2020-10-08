<aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="../../index.html" class="aside-logo">App <span>ETLE</span></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <div class="aside-loggedin">
          <div class="d-flex align-items-center justify-content-start">
            <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
            <div class="aside-alert-link">
              <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
              <a href="<?=site_url('api/logout')?>" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
            </div>
          </div>
          <div class="aside-loggedin-user">
            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
              <h6 class="tx-semibold mg-b-0"><?= $this->session->userdata('namanya') ?></h6>
              <i data-feather="chevron-down"></i>
            </a>
            <p class="tx-color-03 tx-12 mg-b-0">Menu</p>
          </div>
          <div class="collapse" id="loggedinMenu">
            <ul class="nav nav-aside mg-b-0">
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>Lihat Profile</span></a></li>
              <li class="nav-item"><a href="<?=site_url('api/logout')?>" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
            </ul>
          </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
          <li class="nav-label">Dashboard</li>
          <li class="nav-item <?= $this->uri->segment(2) == "dashboard" ? 'active' : ''?>"><a href="<?=site_url('admin/dashboard')?>" class="nav-link"><i data-feather="bar-chart-2"></i> <span>Main</span></a></li>
          

          <li class="nav-label mg-t-25">Halaman</li>
          <li class="nav-item <?= $this->uri->segment(2) == "validasi_pelanggaran" ? 'active' : ''?>"><a href="<?=site_url('admin/validasi_pelanggaran')?>" class="nav-link"><i data-feather="alert-triangle"></i> <span>Validasi Pelanggaran</span></a></li>
          <!-- <li class="nav-item "><a href="<?=site_url('admin/data_pelanggaran')?>" class="nav-link"><i data-feather="clipboard"></i> <span>Data Pelanggaran</span></a></li> -->
          <li class="nav-item with-sub <?= $this->uri->segment(2) == "data_pelanggaran" ? 'active show' : ''?>">
            <a href="" class="nav-link"><i data-feather="clipboard"></i> <span>Data Pelanggaran</span></a>
            <ul>
              <li><a href="<?=site_url('admin/data_pelanggaran')?>">Semua</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/1')?>">Tervalidasi</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/2')?>">Terberkas</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/3')?>">Dikirim</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/4')?>">Diterima</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/5')?>">Terkonfirmasi & Belum Bayar</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/6')?>">Expired</a></li>
              <li><a href="<?=site_url('admin/data_pelanggaran/7')?>">Lunas</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </aside>