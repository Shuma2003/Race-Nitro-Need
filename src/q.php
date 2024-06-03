<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="../css/q.css">
    <link rel="stylesheet" href="../css/style.css">
  <title>Оформление заказа автомобиля</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Оформление заказа автомобиля</h1>
  
  <form>
    <label for="carModel">Модель автомобиля:</label>
    <select name="" id="">
      <option value="">Выберите автомобиль</option>
      <option value="">BMW gtr m3</option>
      <option value="">Dodge-Challenger  </option>
      <option value="">Ferrari SF90</option>
      <option value="">Ford GT</option>
      <option value="">Dodge</option>
      <option value="">Lamborhini Sian</option>
    </select>    
    <label for="pickupDate">Дата получения:</label>
    <input type="date" id="pickupDate" name="pickupDate" required>
    
    <label for="returnDate">Дата возврата:</label>
    <input type="date" id="returnDate" name="returnDate" required>

    <label for="lessons">Урок</label>
    <select name="" id="">
      <option value="">Выберите урок</option>
      <option value="">Контраварийное управление</option>
      <option value="">Спортивное вождение</option>
      <option value="">Оффроуд вождение</option>
    </select>


    <input type="submit" value="Оформить заказ">
  </form>
</body>
</html>



