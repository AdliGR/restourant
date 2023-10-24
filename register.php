<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="soft-ui-dashboard-main/assets/img/alien.png">
  <link rel="icon" type="image/png" href="soft-ui-dashboard-main/assets/img/alien.png">
  <title>
    Register Restoran Yakin Gile
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="soft-ui-dashboard-main/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="soft-ui-dashboard-main/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="soft-ui-dashboard-main/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="soft-ui-dashboard-main/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('soft-ui-dashboard-main/assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Silahkan mendaftar untuk masuk ke Dashboard</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Register with</h5>
              </div>
              <div class="card-body">
              <form action="register_proses.php" method="POST">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan</button>
                    <p class="text-sm mt-3 mb-0">Already have an account? <a href="login.php" class="text-dark font-weight-bolder">Sign in</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mx-auto text-center">
            <a href="https://github.com/AdliGR" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Shyehan Rafael Adlinugroho
            </a>
            <a href="https://github.com/DirsyaArsyad7" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Dirsya Arrosyid Arsyad
            </a>
            <a href="https://github.com/Eliezer223" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Eliezer Raphael
            </a>
            <br>
            <a href="https://github.com/DavidTheMarksmen" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              David Moses Mantiri Kalesaran
            </a>
            <a href="https://github.com/MichaelVallent" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Michael Vallent
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              <a href="https://github.com/AdliGR/To_Do_List_UTS">
                <h5>Kelompok 2</h5>
              </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="soft-ui-dashboard-main/assets/js/core/popper.min.js"></script>
  <script src="soft-ui-dashboard-main/assets/js/core/bootstrap.min.js"></script>
  <script src="soft-ui-dashboard-main/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="soft-ui-dashboard-main/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="soft-ui-dashboard-main/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>