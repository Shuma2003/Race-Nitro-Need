<?php
include '../inludes/auth.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="../css/registration.css">
<link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../media/favicon/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница авторизации</title>
</head>
<body>
 <h1>Авторизация</h1>
 <div class="container">
  <div class="form-container">
      <form id="login-form" class="auth-form">
          <h2>Авторизация</h2>
          <input type="email" id="email" placeholder="Email" required>
          <input type="password" id="password" placeholder="Пароль" required>
          <button type="submit"><a href="../src/profile.php" style="text-decoration: none; color:white;">Войти</a></button>
      </form>
<script src="../js/save-data.js"></script>
</body>
</html>