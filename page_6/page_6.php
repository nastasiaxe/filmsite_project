<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Регистрация\Вход</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<nav class="navigation">
  <ul class="main-nav">
      <li class="main-nav-item"><a class="nav-item" href="../page_1/page_1.html"><p class="logo nav-text">MOVIEMINDS <img src="../page_1/images/pin.png" width="32" height="16"></p></a></li>
      <li class="main-nav-item"><a class="nav-item" href="../page_1/page_1.html"><p class="nav-text">Главная</p></a></li>
      <li class="main-nav-item"><a class="nav-item" href="#"><p class="nav-text">Подборка</p></a></li>
      <li class="main-nav-item"><a class="nav-item" href="#"><p class="nav-text">Фильмы</p></a></li>
      <li class="main-nav-item"><a class="nav-item" href="page_6.php"><p class="nav-text">Регистрация/Вход</p></a></li>
  </ul>
</nav>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Регистрация</a></li>
        <li class="tab"><a href="#login">Вход</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Регистрация</h1>
          
          <form action="sign_up.php" method="post" enctype="multipart/form-data">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Имя<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
              Аватар профиля<span class="req">*</span>
              </label>
              <input type="file" name="pic" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Придумайте пароль<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
            Подтвердите пароль<span class="req">*</span>
            </label>
            <input type="password" name="confirm_password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">Зарегистрироваться</button>
          
          <p>
            У вас уже есть аккаунт? <a href="#">Войти</a>
          </p>

          <?php
            if (isset($_SESSION['message'])) {
              echo '<p>' . $_SESSION['message'] . '</p';
            }
            unset($_SESSION['message']);
          ?>

          </form>

        </div>
        
        <div id="login">   
          <h1>Вход</h1>
          
          <form action="sign_in.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email_us" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Пароль<span class="req">*</span>
            </label>
            <input type="password" name="password_us" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Забыли пароль?</a></p>
          
          <button class="button button-block">Войти</button>
          
          <p>
             У вас еще нет аккаунта? <a href="#">Зарегистрироваться</a>
         </p>

          <?php
            if (isset($_SESSION['message'])) {
              echo '<p>' . $_SESSION['message'] . '</p';
            }
              unset($_SESSION['message']);
          ?>

          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
   

    <script src="js/index.js"></script>

</body>
</html>
