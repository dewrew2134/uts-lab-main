<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand">
        <img src="../pics/toDo-pedia.png" alt="Logo" height="150">
    </a>
</nav>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../pics/WorkFromHome.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="../backend/prosesRegister.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Register Here</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>
            <!-- Username input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" id="form3Example3" class="form-control form-control-lg"
              placeholder="Username" />
            <label class="form-label" for="form3Example3">Username</label>
          </div>


          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="Submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"  onclick="CheckCaptcha(); Submit()">Register</button>
              <div class="mt-4 text-center">
				<p>
					Sudah punya akun?
					<a href="login.php" class="text-blue-500 hover:underline">Login!</a>
				</p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary fixed-bottom">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
    <!-- Footer -->
  </div>

</section>
<script src="js/jquery.js"></script>
<script src="js/captcha.js"></script>
</body>
</html>
