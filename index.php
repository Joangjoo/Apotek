<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <!-- Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Css -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <div class="forms">
      <div class="form login">
        <span class="title">Login</span>
        <form action="action/action_login.php" method="POST">
          <div class="input-field">
            <input type="text" placeholder="email" name="email" required>
            <i class="ri-user-fill icon"></i>
          </div>
          <div class="input-field">
            <input type="password" class="password" placeholder="Password" name="password" required>
            <i class="ri-lock-fill icon"></i>
            <i class="ri-eye-off-fill showHidePw"></i>
          </div>
          <div class="checkbox-text">
            <div class="checkbox-content">
              <input type="checkbox" name="" id="logCheck">
              <label for="logCheck" class="text">Ingat Saya</label>
            </div>
            <a href="#" class="text">Lupakan Password</a>
          </div>
          <div class="input-field button">
         <button type="submit">  <input type="button" value="Login"></button> 
          </div>
        </form>
        <div class="login-signup">
          <span class="text">Belum Registrasi?
            <a href="regis.php" class="text signup-text">Klik Disini</a>
          </span>
        </div>
        <div class="input-field buttonn">
          <input type="button" value="Facebook">
          <div class="fb">
            <i class="ri-facebook-circle-fill"></i>
          </div>
        </div>
        <div class="input-field buttoon">
          <input type="button" value="Google" style="color: rgb(141, 139, 139);">
          <img src="gogle.png" class="button-icon">
        </div>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>

</html>