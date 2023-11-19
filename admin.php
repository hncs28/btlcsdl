<?php

$conn = new mysqli('localhost', 'root','','btlcsdl');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra và tạo thư mục uploads
    $upload_directory = 'uploads';
    if (!file_exists($upload_directory)) {
        if (!mkdir($upload_directory, 0777, true)) {
            die('Không thể tạo thư mục uploads');
        }
    }
// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $director = $_POST['director'];
    $actor = $_POST['actor'];
    $plot = $_POST['plot'];
    $release = $_POST['release'];
    $language = $_POST['language'];
    $ratings = $_POST['ratings'];
    $link = $_POST['link'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["poster"]["name"]);

    if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
        // Nếu di chuyển file thành công, thêm dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO movie (Title, Poster, Genre, Director, Actor, Plot, ReleaseDate, Language, Ratings, Link) VALUES ('$title', '$target_file', '$genre', '$director', '$actor', '$plot', '$release', '$language', '$ratings', '$link')";

        if ($conn->query($sql) === TRUE) {
            header('Location: http://localhost/Webfilm/admin.php');
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Lỗi khi di chuyển tệp tin.";
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý Movie</title>
    <link rel="stylesheet" href="style/style-admin.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <h2 style="padding-left: 25%; padding-right: 30%; font-size: 20px;">Thêm Movie</h2><br>
        <div class="title row">
            <P style="padding-right: 58px; font-family: var(); font-weight: bold;font-size: 15px;">Title</P> <input type="text" name="title" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <div class="poster row">
            <P style="padding-right: 41px; font-family: var(); font-weight: bold; font-size: 15px;">Poster</P> <input type="file" name="poster" style="border-radius: 5px;">
        </div><br>
        <div class="genre row">
            <P style="padding-right: 42px; font-family: var(); font-weight: bold;font-size: 15px;">Genre</P> <input type="text" name="genre" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <div class="director row">
            <P style="padding-right: 31px; font-family: var(); font-weight: bold;font-size: 15px;">Director</P> <input type="text" name="director" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <div class="actor row">
            <P style="padding-right: 48px; font-family: var(); font-weight: bold;font-size: 15px;">Actor</P> <input type="text" name="actor" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <div class="plot row">
            <P style="padding-right: 59px; font-family: var(); font-weight: bold;font-size: 15px;">Plot</P> <textarea name="plot" style="border-radius: 5px; border: none; background-color: #ddd; height: 30px;"></textarea>
        </div><br>
        <div class="release row">
            <P style="padding-right: 28px; font-family: var(); font-weight: bold;font-size: 15px;">Release</P> <input type="date" name="release" style="border-radius: 5px; border: none; background-color: #ddd; height: 25px;">
        </div><br>
        <div class="language row">
            <P style="padding-right: 14px; font-family: var(); font-weight: bold;font-size: 15px;">Language</P> <input type="text" name="language" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <div class="ratings row">
            <P style="padding-right: 31px; font-family: var(); font-weight: bold;font-size: 15px;">Ratings</P> <input type="text" name="ratings" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <div class="link row">
            <P style="padding-right: 55px; font-family: var(); font-weight: bold;font-size: 15px;">Link</P> <input type="text" name="link" style="border-radius: 5px; border: none; background-color: #ddd; width: 50%; height: 25px;">
        </div><br>
        <input type="submit" value="Submit" style="text-align: center; font-family: var(); font-weight: bold;">
    </form>


<div style="text-align: center; font-family: var(); font-weight: bold;">
<button onclick="chuyenTrang()">Về trang chủ</button>

<script>
    function chuyenTrang() {
        window.location = "index.php"; 
    }
</script>
</body>
</html>
