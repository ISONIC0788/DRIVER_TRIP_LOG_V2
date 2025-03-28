<?php
include("../pages/conn.php");
session_start();

?>

<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Registeration | Driver Trip log System</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/bus.png" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" />

<!-- for the icon boost  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<!-- end foe  -->

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="../assets/images/bus.png" alt="" class="logo " height="50px"  width="50px"/> <b>Driver Trip</b> 
        </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Dashboard</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="../dashboard/index.php" class="pc-link"
            ><span class="pc-micon"><i class="ti ti-dashboard"></i></span><span class="pc-mtext">Default</span></a
          >
        </li>

        <li class="pc-item pc-caption">
          <label>Elements</label>
          <i class="ti ti-apps"></i>
        </li>
       <!-- [for  links and other ] -->
       <li class="pc-item">
        <a href="../other/users.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-person-lines-fill"></i></span>
          <span class="pc-mtext">Users</span>
        </a>
      </li>
      <li class="pc-item">
        <a href="../other/drivers.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-people"></i></span>
          <span class="pc-mtext">Drivers</span>
        </a>
      </li>
      <li class="pc-item">
        <a href="../other/vehicles.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-bus-front"></i></span>
          <span class="pc-mtext">Vehicles</span>
        </a>
      </li>
      <li class="pc-item">
        <a href="../other/trip.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-geo-alt"></i></span>
          <span class="pc-mtext">Trips</span>
        </a>
      </li>
      
      <li class="pc-item">
        <a href="../other/financial.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-bar-chart"></i></span>
          <span class="pc-mtext">Financial</span>
        </a>
      </li>
      <li class="pc-item">
        <a href="../other/mentainace.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-wrench"></i> </span>
          <span class="pc-mtext">Mentainance</span>
        </a>
      </li>
      <li class="pc-item">
        <a href="../other/logsactivity.php" class="pc-link">
          <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
          <span class="pc-mtext">logs</span>
        </a>
      </li>
    
        <!-- [end for the link ] -->
        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li>
    
        <li class="pc-item">
          <a href="" target="_blank" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Other</label>
          <i class="ti ti-brand-chrome"></i>
        </li>
     
        <li class="pc-item">
          <a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-brand-chrome"></i></span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li>

      </ul>
    
      <div class="w-100 text-center">
        <div class="badge theme-version badge rounded-pill bg-light text-dark f-12"></div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"><!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <li class="pc-h-item header-mobile-collapse">
      <a href="#" class="pc-head-link head-link-secondary ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . ." />
        <button class="btn btn-light-secondary btn-search"><i class="ti ti-adjustments-horizontal"></i></button>
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-bell"></i>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all read</a>
          <h5>
            All Notification
            <span class="badge bg-warning rounded-pill ms-1">01</span>
          </h5>
        </div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="user-avtar bg-light-success"><i class="ti ti-building-store"></i></div>
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3 min ago</span>
                  <h5>Store Verification Done</h5>
                  <p class="text-body fs-6">We have successfully received your request.</p>
                  <div class="badge rounded-pill bg-light-danger">Unread</div>
                </div>
              </div>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar" />
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">10 min ago</span>
                  <h5>Joseph William</h5>
                  <p class="text-body fs-6">It is a long established fact that a reader will be distracted</p>
                  <div class="badge rounded-pill bg-light-success">Confirmation of Account</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">Mark as all read</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
        <span>
          <i class="ti ti-settings"></i>
        </span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <h4>
            Good Morning,
            <span class="small text-muted"><?php if($_SESSION) {print_r($_SESSION['username']);} ?></span>
          </h4>
          <p class="text-muted">Project Admin</p>
          <hr />
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 280px)">
            <div class="upgradeplan-block bg-light-warning rounded">
              <h4>Explore full code</h4>
              <p class="text-muted">Buy now to get full access of code files</p>
              <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank" class="btn btn-warning">Buy Now</a>
            </div>
            <hr />
            <a href="../application/account-profile-v1.html" class="dropdown-item">
              <i class="ti ti-settings"></i>
              <span>Account Settings</span>
            </a>
            <a href="../application/social-profile.html" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Social Profile</span>
            </a>
            <a href="../pages/login-v1.html" class="dropdown-item">
              <i class="ti ti-logout"></i>
              <span>Logout</span>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col">
                <div class="page-header-title">
                  <h5 class="m-b-10">Register</h5>
                </div>
              </div>
              <div class="col-auto">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Basic UI</a></li>
                  <li class="breadcrumb-item" aria-current="page">Register</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ Typography ] start -->
       
         
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Rigister User <i class="ti ti-user-plus "></i> </h5>
              </div>
              <div class="card-body pc-component">
                <p class="lead m-t-0">Your title goes here</p>
                <!-- [start for registraion for user ] -->
                <a href="./userregister.php" class="pc-link">
                     <button class="btn btn-primary">
                       <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
                       <span class="pc-mtext">Start Register</span>
                      </button> 
                    </a>
                 <!-- [end for start for registraion for user ] -->
                
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Register Vehicle <i class="ti ti-truck"></i></h5>
              </div>
              <div class="card-body pc-component">
                <!-- [registration for vehicles] -->
                <a href="./vehicleregiister.php" class="pc-link">
                     <button class="btn btn-primary">
                       <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
                       <span class="pc-mtext">Start Register</span>
                      </button> 
                </a>
                <!-- [ end for registration for vehicles] -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5>Register Driver <i class="ti ti-users"></i></h5>
              </div>
              <div class="card-body pc-component">
                  <!-- [registration for drivers] -->
                  <a href="./driveregistration.php" class="pc-link">
                     <button class="btn btn-primary">
                       <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
                       <span class="pc-mtext">Start Register</span>
                      </button> 
                    </a>
                <!-- [ end for registration for drivers ] -->
              
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5>Financial Records <i class="ti ti-report-money"></i></h5>
              </div>
              <div class="card-body pc-component">
                  <!-- [registration for financial record ] -->
                  <a href="../other/logsactivity.php" class="pc-link">
                     <button class="btn btn-primary">
                       <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
                       <span class="pc-mtext">Start Register</span>
                      </button> 
                    </a>
                <!-- [ end for registration for finacial vehicles] -->
                
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5>Mentainance Record <i class="bi bi-wrench"></i></h5>
              </div>
              <div class="card-body pc-component">
                  <!-- [registration for mentainance record ] -->
                  <a href="../other/logsactivity.php" class="pc-link">
                     <button class="btn btn-primary">
                       <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
                       <span class="pc-mtext">Start Register</span>
                      </button> 
                    </a>
                <!-- [ end for registration for mentaince record ] -->
             
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Trip Log Register <i class="bi bi-geo-alt"></i></h5>
              </div>
              <div class="card-body pc-component">
              <a href="./tripregister.php" class="pc-link">
                <button class="btn btn-primary">
                  <span class="pc-micon"><i class="bi bi-clock-history"></i></span>
                  <span class="pc-mtext">Start Register</span>
                </button> 
              </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Horizontal Description</h5>
              </div>
              <div class="card-body pc-component">
                <dl class="dl-horizontal row">
                  <dt class="col-sm-3">Description lists</dt>
                  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                  <dt class="col-sm-3">Euismod</dt>
                  <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                  <dd class="col-sm-9">Donec id elit non mi porta gravida at eget metus.</dd>

                  <dt class="col-sm-3">Malesuada porta</dt>
                  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                  <dd class="col-sm-9">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- [ Typography ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 my-1">
            <p class="m-0">
              Berry &#9829; crafted by Team
              <a href="https://isonic0788.github.io/myProject_one/" target="_blank">Ebedi</a>
            </p>
          </div>
          <div class="col-sm-6 ms-auto my-1">
            <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
              <li class="list-inline-item"><a href="../index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.gitbook.io/berry-bootstrap/" target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.support-hub.io/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
 <!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/icon/custom-font.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>

   
<script>
  layout_change('light');
</script>
   
<script>
  font_change('Roboto');
</script>
 
<script>
  change_box_container('false');
</script>
 
<script>
  layout_caption_change('true');
</script>
   
<script>
  layout_rtl_change('false');
</script>
 
<script>
  preset_change('preset-1');
</script>


  </body>
  <!-- [Body] end -->
</html>
