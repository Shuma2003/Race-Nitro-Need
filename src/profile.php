<?php
// Начинаем сессию
session_start();

// Проверяем, были ли переданы данные из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные от пользователя
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Сохраняем данные в сессии
    $_SESSION['fio'] = $fio;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/profile.css">
    <link rel="shortcut icon" href="../media/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
</head>
<body>
  <?php
// Проверяем, были ли сохранены данные в сессии
if (isset($_SESSION['fio']) && isset($_SESSION['email']) && isset($_SESSION['phone'])) {
    echo "<h1>Данные пользователя:</h1>";
    echo "<p><strong>ФИО:</strong> " . $_SESSION['fio'] . "</p>";
    echo "<p><strong>Email:</strong> " . $_SESSION['email'] . "</p>";
    echo "<p><strong>Телефон:</strong> " . $_SESSION['phone'] . "</p>";
} else {
    echo "<p>Введите данные в форму ниже:</p>";
}
?>
  <div class="exit-profile">
    <a href="./index.php" class="nav-link" >На главную</a>
  </div>
  <div class="profile-container">
    <img src="../media/img/activate-better.png" alt="Фото профиля" class="profile-image" style="margin-left: 190px;">
    <div class="profile-info">
      <div class="profile-info-item">
        <div class="profile-info-label">ФИО:</div>
        <div>Иван Иванов</div>
      </div>
      <div class="profile-info-item" style="margin-left: 30px;">
        <div class="profile-info-label">Email:</div>
        <div>ivan.ivanov@example.com</div>
      </div>

      <div class="profile-info-item" style="margin-left: 50px;">
        <div class="profile-info-label">Телефон:</div>
        <div>+7 (999) 123-45-67</div>
      </div>
    </div>
  </div>


 <menu>
<li><a href="./catalog-auto.php">Каталог автомобилей</a></li>
    <li><a href="./lessons.php">Уроки</a></li>
    <li><a href="./rewiews.php">Отзывы</a></li>
    <li><a href="./support.php">Поддержка</a></li>
</menu>

<div class="about-content">
  <div class="about-image">
      <img src="../media/img/photo_2024-06-02_13-08-42.jpg" alt="Фотография команды" > 
  </div>
  <div class="about-text">
      <p style="font-size: 30px; text-align:justify;">Уважаемый Пользователь!<br><br>
        Поздравляем, Вы успешно прошли регистрацию и получили доступ к личному кабинету Race Nitro Need.<br>
        </p>
      <p style="font-size: 30px; text-align:justify"><br>Здесь у Вас есть возможность детально ознакомиться с Парком автомобилей, изучить их параметры и сделать бронь на удобное время.<br>
        В разделе Уроки вождения Вы можете выбрать подходящий курс и оставить заявку на его прохождение.<br>
        В случае возникновения вопросов обратитесь в Поддержку.<br>
        
  </p>
      <p style="font-size: 30px; text-align:justify; margin-left:-187px"><br>Будем признательны за Отзывы о работе нашей компании.</p>
  </div>
</div>
</div>
</body>
</html>