
<?php
$userId = isset($_GET['userId']) ? base64_decode($_GET['userId']) : '';

?>


<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="../../assets/images/logo1.png">

    <!-- Title -->
    <title>Dashboards-Donor</title>

    <!-- *************
			************ Common Css Files *************
		************ -->

    <!-- Animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.min.css">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

  </head>

  <body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
      <div class="spinner">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
        <div class="line5"></div>
        <div class="line6"></div>
      </div>
    </div>
    <!-- Loading wrapper end -->

    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Sidebar wrapper start -->
      <nav class="sidebar-wrapper">

        <!-- Sidebar brand starts -->
        <div class="sidebar-brand">
          <a href="index.html" class="logo">
            NGO-AOMSYS
          </a>
        </div>
        <!-- Sidebar brand starts -->

        <!-- Sidebar menu starts -->
        <div class="sidebar-menu">
          <div class="sidebarMenuScroll">
          <ul>
  <li class="sidebar-dropdown active">
    <a href="#">
      <i class="bi bi-house"></i>
      <span class="menu-text">Dashboards</span>
    </a>
    <div class="sidebar-submenu">
      <ul>
        <li>
          <!-- إذا تم النقر على الرابط، ستتم إضافة معرّف المستخدم المشفر إلى الرابط -->
          <a href="index.php" onclick="addUserIdToLink(this)">HOME</a>
        </li>
        <li>
        </li>
      </ul>
    </div>
  </li>
  <li class="sidebar-dropdown">
    <a href="#">
      <i class="bi bi-gem"></i>
      <span class="menu-text">Other</span>
    </a>
    <div class="sidebar-submenu">
      <ul>
        <li>
          <!-- إذا تم النقر على الرابط، ستتم إضافة معرّف المستخدم المشفر إلى الرابط -->
          <a href="profile.php" onclick="addUserIdToLink(this)">Profile</a>
        </li>
        <li>
          <!-- إذا تم النقر على الرابط، ستتم إضافة معرّف المستخدم المشفر إلى الرابط -->
          <a href="checkout.php" onclick="addUserIdToLink(this)">Donation form</a>
        </li>
      </ul>
    </div>
  </li>
</ul>

<script>
  function addUserIdToLink(link) {
    // استخراج معرف المستخدم المشفر من الرابط الحالي
    var params = new URLSearchParams(window.location.search);
    var userId = params.get('user_id');

    // إذا كان هناك معرف مستخدم، أضفه إلى عنوان الرابط المقصود
    if (userId) {
      var linkHref = link.getAttribute('href');
      if (linkHref.includes('?')) {
        linkHref += '&user_id=' + userId;
      } else {
        linkHref += '?user_id=' + userId;
      }
      link.setAttribute('href', linkHref);
    }
  }
</script>

          </div>
        </div>
        <!-- Sidebar menu ends -->

      </nav>
      <!-- Sidebar wrapper end -->

      <!-- *************
				************ Main container start *************
			************* -->
      <div class="main-container">

        <!-- Page header starts -->
        <div class="page-header">

          <div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

          <!-- Breadcrumb start -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <i class="bi bi-house"></i>
            </li>
            <li class="breadcrumb-item breadcrumb-active" aria-current="page">HOME</li>
          </ol>
          <!-- Breadcrumb end -->

          <!-- Header actions ccontainer start -->
          <div class="header-actions-container">

            <!-- Search container start -->
            <div class="search-container">

              <!-- Search input group start -->
              
              <!-- Search input group end -->

            </div>
            <!-- Search container end -->

            <!-- Header actions start -->
            <ul class="header-actions">

              <!-- Messages start -->
              

          
              <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                  <span class="user-name d-none d-md-block"></span>
                  <span class="avatar">
                  <img src="https://img.freepik.com/free-psd/3d-rendering-avatar_23-2150833576.jpg" alt="user">

                    <span class="status busy"></span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                  <div class="header-profile-actions">
                    <a href="profile.html?userId=<?php echo base64_encode($userId); ?>">Profile</a>
                    <a href="http://localhost/Donations/index.html">Logout</a>
                </div>
                <script>
                  var userId = atob(window.location.search.split('userId=')[1]);

                </script>
                </div>
              </li>
            </ul>
            <!-- Header actions end -->

          </div>
          <!-- Header actions ccontainer end -->

        </div>
        <!-- Page header ends -->

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

          <!-- Content wrapper start -->
          <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gx-3">
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                  <div class="sale-icon shade-blue">
                    <i class="bi bi-pie-chart"></i>
                  </div>
                  <div class="sale-details">
                    <h3 class="text-blue">$0</h3>
                    <p>Donations</p>
                  </div>
                  <div class="sale-graph">
                    <div id="sparklineLine1"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                  <div class="sale-icon shade-yellow">
                    <i class="bi bi-emoji-smile"></i>
                  </div>
                  <div class="sale-details">
                    <h3 class="text-yellow">0</h3>
                    <p></p>
                  </div>
                  <div class="sale-graph">
                    <div id="sparklineLine2"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                  <div class="sale-icon shade-red">
                    <i class="bi bi-box-seam"></i>
                  </div>
                  <div class="sale-details">
                    <h3 class="text-red">0</h3>
                    <p></p>
                  </div>
                  <div class="sale-graph">
                    <div id="sparklineLine3"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-sm-6 col-12">
                <div class="stats-tile">
                  <div class="sale-icon shade-green">
                    <i class="bi bi-handbag"></i>
                  </div>
                  <div class="sale-details">
                    <h3 class="text-green">$0</h3>
                    <p></p>
                  </div>
                  <div class="sale-graph">
                    <div id="sparklineLine4"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gx-3">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Earnings</div>
                  </div>
                  <div class="card-body">

                    <!-- Row start -->
                    <div class="row gx-3">
                      <div class="col-sm-8 col-12">
                        <div id="world-map-markers2" class="chart-height"></div>
                      </div>
                      <div class="col-sm-4 col-12">
                        <div class="global-sales">
                          <h3><i class="bi bi-globe icon"></i>$2,75,000 <i
                              class="bi bi-arrow-up-right text-primary"></i>
                          </h3>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->

                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
           


          <!-- App Footer start -->
          <div class="app-footer">
            <span>© NGO-AOMSYSD 2024. All rights reserved to <a href="https://web.facebook.com/mubramjoonpro">TAHA IRSHAID</a>, Programmer</span>


          </div>
          <!-- App footer end -->

        </div>
        <!-- Content wrapper scroll end -->

      </div>
      <!-- *************
				************ Main container end *************
			************* -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/moment.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/sales/sparkline.js"></script>
    <script src="assets/vendor/apex/custom/sales/salesGraph.js"></script>
    <script src="assets/vendor/apex/custom/sales/revenueGraph.js"></script>
    <script src="assets/vendor/apex/custom/sales/taskGraph.js"></script>

    <!-- Vector Maps -->
    <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="assets/vendor/jvectormap/world-mill-en.js"></script>
    <script src="assets/vendor/jvectormap/gdp-data.js"></script>
    <script src="assets/vendor/jvectormap/custom/world-map-markers2.js"></script>

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

  </body>

</html>