<?php
$servername = "localhost"; //домен к которому мы подсоединяемся, поскольку все происходит на одной машине - это localhost
$username = "root"; //имя пользователя которое мы ставили на шаге установки mysql
$password = "password"; //пароль пользователя

// создание соединения
$conn = new mysqli($servername, $username, $password);
// проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // сообщение об ошибке
}

$sql = "SELECT VERSION()"; //запрос для выборки версии MySQL
$result = $conn->query($sql); // результат запроса

if ($result->num_rows > 0) {
    // вывести данные из каждого столбца, но поскольку их 1 то и выведется только одна строка
    while($row = $result->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo "0 results";
}
$conn->close(); //закрываем соединение с базой данных
?>