<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/book.css">
    <link rel="shortcut icon" href="../media/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка на бронирование</title>
</head>
<body>
    <div class="container">
      <h2>Бронирование гоночного автомобиля</h2>
      <form action="../inludes/booking.php" method="post">
 
  
        <label for="car">Выберите автомобиль:</label>
        <select id="car" name="car" required="">        <option value="">Выберите автомобиль</option>        <option value="car1">BMW gtr m3</option>        <option value="car2">Dodge</option>        <option value="car3">Ferrari</option>  <option value="car4">Mustang GT</option>  <option value="car5">Dodge-Challenger</option>  <option value="car6">Lamborhini Sian</option>   </select>
  
        <label for="date">Дата бронирования:</label>
        <input type="date" id="date" name="date" required="">
  
  
        <button type="submit">Отправить заявку</button>
      </form>
    </div>
    <script src="../js/send.js"></script>
</body>
</html>