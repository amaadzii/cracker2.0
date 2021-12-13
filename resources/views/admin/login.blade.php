<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Admin Cracker 2.0</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="image/favicon.svg"/>
  <!-- Custom CSS -->
  <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="image/logo.svg" width="150">
              </a>
            </div>
            <h5 class="card-title text-center pb-0 fs-4">Login Admin Page</h5>
            <p class="text-center small">Enter your username & password to login</p>
            <div class="card-body">
              <form class="row g-3 needs-validation" action="/admin/dashboard">
                <div class="col-12">
                  <label for="yourUsername" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="yourUsername">
                  <div class="invalid-feedback">Please enter your username!</div>
                </div>
                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="passwword" class="form-control" id="yourPassword">
                  <div class="invalid-feedback">Please enter your password!</div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>