<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="soft-ui-dashboard-main/assets/img/alien.png">
  <link rel="icon" type="image/png" href="soft-ui-dashboard-main/assets/img/alien.png">
  <title>
    Login Restoran Yakin Gile
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
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                  <p class="mb-0">Silahakan Masukan Email dan Password</p>
                </div>
                <div class="card-body">
                    <form action="login-process.php" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="captcha">Captcha:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="captcha" required>
                                <div class="input-group-append">
                                    <img src="captcha-generate.php" alt="Captcha Image">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                    </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Belom Punya akun
                    <a href="register.php" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('soft-ui-dashboard-main/assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
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
  <!--   Script Tambahan   -->
  
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