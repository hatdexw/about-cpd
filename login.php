<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - About CPD</title>
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/login.css">
    
    <style>
        .wrapper{
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn{
            30% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                animation: translateX(0);
                opacity: 1;
            }
        }

        
    </style>
    

</head>
<body>
    
    <main>
        <section class="login">
            <div class="wrapper">

                <img src="./img/logo-login.png" alt="Logo Portal" class="login_logo">
                <h1 class="login_title">LOGIN</h1>

                <form action="verify_login.php" method="POST">
                    <label class="login_label">
                        <span>usuário</span>
                        <input type="text" name="username" class="input">
                            <?php
                                if(isset($_SESSION['user_incorreto'])):
                            ?>
                            <div class="login_incorreto" role="alert">
                                usuário incorreto
                            </div>
                            <?php
                                endif;
                                unset($_SESSION['user_incorreto']);
                            ?>
                    </label>
                        
                    <label class="login_label">
                        <span>senha</span>
                        <input type="password" name="password" class="input">
                            <?php
                                if(isset($_SESSION['senha_incorreta'])):
                            ?>
                            <div class="login_incorreto" role="alert">
                                senha incorreta
                            </div>
                            <?php
                                endif;
                                unset($_SESSION['senha_incorreta']);
                            ?>
                    </label>


                    <div class="wrapper">
                        <button type="submit" class="login_button" disabled>
                        <svg role="img" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-labelledby="forward" class="sc-hLseeU idnFbI sc-iAEyYk ciBkas"><title id="forward">forward icon</title><path d="M22.8011 14.75L14.2234 6.70971L16.0474 5L26.8695 15.1441C27.3732 15.6163 27.3732 16.3817 26.8695 16.8538L16.0474 26.998L14.2234 25.2883L22.7989 17.25H4.75V14.75H22.8011Z"></path>
                        </svg>
                        </button>
                        <a href="register.php" class="login_link">criar conta</a>
                    </div>
                </form>
                
            </div>
            

        </section>
        <section class="wallpaper">


        </section>
    </main>
    <script src="./js/login.js"></script>
</body>
</html>
