<?php
// Kết nối đến database
$conn = new mysqli('localhost','root', '', 'btlcsdl');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$Title = $_POST['Title'];
$Genre = $_POST['Genre'];
$Director = $_POST['Director'];
$Actor = $_POST['Actor'];
$Ratings = $_POST['Ratings'];

// Thực hiện truy vấn để lưu dữ liệu vào database
$sql = "INSERT INTO them (Title, Genre, Director, Actor, Rating) VALUES ('$Title','$Genre','$Director','$Actor','$Ratings')";
if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/Webfilm/index.php');
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
    header('Location: http://localhost/Webfilm/index.php');
}
// Đóng kết nối
$conn->close();
?>