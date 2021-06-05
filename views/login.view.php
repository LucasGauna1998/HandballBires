<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1937d054cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
     <img src="../img/logo-baires.webp" alt="" class="logo-login">
    <div class="container-login">
        <div class="container-title ">
            <p class="title-login">
                Login
             
            </p>
        </div>
        <p class="welcome-text">
            Welcometo the private area. Please, provide login credential to proceed and have access to all our services.
        </p>
        <div class="error">
            Todos Los Campos Son Obligatorios
        </div>
        <form method="POST" action ="modelo.login.php" class="form-login" id="login">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            
            <div class="container-btn">
                <input type="hidden" value="login" id="accion" name="accion">
                <input type="submit" class="btn-login"value="Sing in" id="btnEnviar">
            </div>
            <div class="social-icon">
                <a href="#"><i class="fab fa-google"></i>
                </a>
                <a href="#"><i class="fab fa-instagram"></i></i>
                </a>
                <a href="#"><i class="fab fa-facebook"></i>
                </a>
            </div>
        </form>
    </div>

</body>

</html>