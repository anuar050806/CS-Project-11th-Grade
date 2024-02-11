<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="light-theme.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lancelot&display=swap" rel="stylesheet">
        <title>Moona Dance Studio</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="background-block">
                <img src="res/img/—Pngtree—golden light spot flowing oblique_6093757.png" class="background">
                <header>

                </header>
                <main>
                    <div class="wrapper-registration-block">
                        <!--<span class = 'icon-close'><ion-icon name="close-outline"></ion-icon></span>-->
                
                        <div class="form-box login">
                            <h2>Login</h2>
                            <form action="registration-page.php" method="get"></form>
                                <div class="input-box">
                                    <span class = 'icon'><ion-icon name="mail"></ion-icon></span>
                                    <input type = 'text' required name='email' value="<?php echo $email; ?>">
                                    <label>Email</label>
                                </div>
                                <div class="input-box">
                                    <span class = 'icon'><ion-icon name="lock-closed"></ion-icon></span>
                                    <input type = 'password' required name='password' value="<?php echo $password; ?>">
                                    <label>Password</label>
                                </div>
                                <div class="remember-forgot">
                                    <label><input type="checkbox">Remember me</label>
                                    <a href = "#">Forgot password?</a>
                                </div>
                                <button type = 'submit' class = 'btn'>Login</button>
                                <div class="login-registration">
                                    <p>Don't have an account? <a href = '#' class = 'registration-link'>Register</a></p>
                                </div>
                            </form>
                        </div>

                        <div class="form-box registration">
                            <h2>Registration</h2>
                            <form action="registration-page.php" method="post">
                                <div class="input-box">
                                    <span class = 'icon'><ion-icon name="person"></ion-icon></span>
                                    <input type = 'text' required name='login' value="<?php echo $login; ?>">
                                    <label>Username</label>
                                </div>
                                <div class="input-box">
                                    <span class = 'icon'><ion-icon name="mail"></ion-icon></span>
                                    <input type = 'text' required name='email' value="<?php echo $email; ?>">
                                    <label>Email</label>
                                </div>
                                <div class="input-box">
                                    <span class = 'icon'><ion-icon name="lock-closed"></ion-icon></span>
                                    <input type = 'password' required name='password' value="<?php echo $password; ?>">
                                    <label>Password</label>
                                </div>
                                <div class="remember-forgot">
                                    <label><input type="checkbox">I agree to the terms & conditions</label>
                                </div>
                                <button type = 'submit' class = 'btn'>Register</button>
                                <div class="login-registration">
                                    <p>Already have an account? <a href = '#' class = 'login-link'>Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
                <footer>
                    <p>Lorem ipsum dolor sit.</p>
                </footer>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="script.js"></script>
    </body> 
</html>