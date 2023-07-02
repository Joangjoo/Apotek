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
                <span class="title">Registrasi</span>
                <form action="action/action_regis.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Nama" name="nama" required>
                        <i class="ri-user-fill icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="email" name="email" required>
                        <i class="ri-user-fill icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Password" name="password" required>
                        <i class="ri-lock-fill icon"></i>
                        <i class="ri-eye-off-fill showHidePw"></i>
                    </div>
                    <div class="input-field button">
                        <button type="submit"> <input type="button" value="submit"></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>