<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Carwash Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/select2/select2.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" />
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')?>" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="<?= base_url('admin/index'); ?>"><img src="<?= base_url('assets/images/logo.svg')?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="<?= base_url('admin/index'); ?>"><img src="<?= base_url('assets/images/logo-mini.svg')?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item" style="margin-top: 15px">
            <a class="nav-link" href="<?= base_url('admin/index'); ?>">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/packages">
              <i class="mdi mdi-package menu-icon"></i>
              <span class="menu-title">Packages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/transactions">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Transactions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/users">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <ul class="mt-4 pl-0">
                  <li><i class="mdi mdi-exit-to-app menu-icon"></i>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="<?= base_url('assets/images/faces/face1.jpg')?>" />
                  <span class="profile-name"><?= session()->get('adminName') ?? 'Administrator'; ?></span>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel" style="min-height:800px">
            <?= $this->renderSection('admin'); ?>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sheila Syandana 2025</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">made with codeigniter</span>
                </div>
            </footer>
        </div>
      </div>
    </div>
    <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <script src="<?= base_url('assets/vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot/jquery.flot.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot/jquery.flot.resize.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot/jquery.flot.categories.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot/jquery.flot.fillbetween.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot/jquery.flot.stack.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot/jquery.flot.pie.js')?>"></script>
    <script src="<?= base_url('assets/js/off-canvas.js')?>"></script>
    <script src="<?= base_url('assets/js/hoverable-collapse.js')?>"></script>
    <script src="<?= base_url('assets/js/misc.js')?>"></script>
    <script src="<?= base_url('assets/js/dashboard.js')?>"></script>
  </body>
</html>