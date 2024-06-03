<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $car_model = $_POST["car_model"];
    $pick_up_date = $_POST["pick_up_date"];
    $drop_off_date = $_POST["drop_off_date"];
    
    // Здесь можно добавить дополнительную логику для сохранения данных в базу данных или отправки уведомлений
    
    echo "Спасибо, $name! Ваша заявка на бронирование авто модели $car_model с $pick_up_date по $drop_off_date принята.";
}
?>