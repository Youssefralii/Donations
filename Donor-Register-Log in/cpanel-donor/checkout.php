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
          <form action="process_form.php" method="post">
    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-sm-8 col-12">
            <!-- Row start -->
            <div class="row gx-3">
                <div class="col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" required>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" required>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" value="Turkey" readonly>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone" required>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                  <div class="mb-3">
                      <label class="form-label">Donation Type</label>
                      <input type="text" class="form-control" name="donation_type" id="donationTypeInput">
                      <small class="text-danger" id="donationTypeError" style="display: none;">Please specify the type of donation to clarify: money, clothes, food, homemade food, etc</small>
                  </div>
              </div>

                <div class="col-xxl-12">
                    <div class="mb-2">
                        <label class="form-label">Occupation</label>
                        <input type="text" class="form-control" name="occupation" required>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="mb-2">
                        <label class="form-label">Address</label>
                        <textarea rows="3" class="form-control" name="address" required></textarea>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="mb-2">
                        <label class="form-label">Notes</label>
                        <textarea rows="3" class="form-control" name="notes"></textarea>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="saveAddress">
                        <label class="form-check-label" for="saveAddress">Save this Address</label>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </div>
    <!-- Row end -->

    <button type="submit" class="btn btn-success btn-lg">Send</button>
    <!-- Row end -->
</form>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        var donationTypeInput = document.getElementById('donationTypeInput');
        var donationTypeError = document.getElementById('donationTypeError');

        if (donationTypeInput.value.trim() === '') {
            event.preventDefault(); 
            donationTypeError.style.display = 'block'; 
        }
    });
</script>

<!-- JavaScript to handle dropdown item selection -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownMenu = document.querySelector('.dropdown-menu');
        const donationTypeInput = document.getElementById('donationTypeInput');

        dropdownMenu.addEventListener('click', function (e) {
            e.preventDefault();
            if (e.target.classList.contains('dropdown-item')) {
                const selectedValue = e.target.getAttribute('data-value');
                donationTypeInput.value = selectedValue;
            }
        });
    });
</script>

                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
    // استمع إلى النقرات على العناصر المنسدلة
    var dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var value = this.getAttribute('data-value');
            // قم بتعيين قيمة العنصر المخفي
            document.getElementById('donationTypeInput').value = value;
            // قم بتغيير نص زرار السقوط
            document.getElementById('donationTypeDropdown').innerText = this.innerText;
        });
    });
});

              </script>
          </div>
          <!-- Content wrapper end -->

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

    <!-- Main Js Required -->
    <script src="assets/js/main.js"></script>

    <!-- Product Js -->
    <script src="assets/js/product.js"></script>

  </body>

</html>