<?php 
  session_start(); 

  if (!isset($_SESSION['login'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: registration-page.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['login']);
  	header("location: registration-page.php");
  }
?>
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
    <header>
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
    </header>
    <body>
        <div class="wrapper">
            <div class="background-block">
                <img src="res/img/—Pngtree—golden light spot flowing oblique_6093757.png" class="background">
                <header>

                </header>
                <main>
                    <div class="main-text-block">
                        <p class="main-title">Moona Dance Studio</p>
                        <p class="main-description">Welcome to your favorite community!</p>
                    </div>
                    <div class="address-block">
                        <img src="res/img/Untitled-1.png" alt="location" class="location-sign">
                        <p class="address-text">ТД ЦУМ ​Проспект Абылай хана, 6 этаж<br>
                            <a class="address-link" href="https://go.2gis.com/79myr">https://go.2gis.com/79myr</a></p>
                        <img src="res/img/изображение 1.png" class="entrance-img">
                    </div>
                    <div class="interaction-block">
                        <img src="res/img/IMG_3927.PNG" class="main-page-wallpaper">
                        <table class="interaction-table">
                            <tr>
                                <th><a href="" class="registration-link"></a><button class="registration-button">registration</button></a></th>
                                <th><a href="" class="login-link"></a><button class="login-button">Log in</button></a></th>
                            </tr>
                        </table>
                    </div>
                </main>
                <footer>
                    <p>Lorem ipsum dolor sit.</p>
                </footer>
            </div>
        </div>
    </body> 
</html>