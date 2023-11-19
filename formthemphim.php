<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Thêm phim</title>
  <link rel="stylesheet" href="style/style-add.css">
  <link rel="stylesheet" href="style/search-styles.css">
 
</head>
<body >
<div>  
<form action="xulythem.php" method ="post">
          <h2 style="font-size: 20px; text-align:center;">Thêm phim</h2><br>
          <label for="Title" style="display: block; margin-bottom: 5px; margin-left: 20px; ">Tên phim</label>
          <input placeholder="Nhập tên phim ..." type="text" id="Title" name="Title" required="false" style="width: 90%; padding: 10px; margin-bottom: 20px; margin-left: 20px; box-sizing: border-box; font-family: var();"><br>

          <label for="Genre" style="display: block; margin-bottom: 5px; margin-left: 20px;">Thể loại</label>
          <input placeholder="Nhập thể loại phim ..." type="text" id="Genre" name="Genre" style="width: 90%; padding: 10px; margin-bottom: 20px; margin-left: 20px; box-sizing: border-box; font-family: var();"><br>
          
          <label for="Director" style="display: block; margin-bottom: 5px; margin-left: 20px;">Đạo diễn</label>
          <input placeholder="Nhập tên đạo diễn ..." type="text" id="Director" name="Director" style="width: 90%; padding: 10px; margin-bottom: 20px; margin-left: 20px; box-sizing: border-box; font-family: var();"><br>
          
          <label for="Actor" style="display: block; margin-bottom: 5px; margin-left: 20px;">Diễn viên chính</label>
          <input placeholder="Nhập tên diễn viên chính ..." type="text" id="Actor" name="Actor" style="width: 90%; padding: 10px; margin-bottom: 20px; margin-left: 20px; box-sizing: border-box; font-family: var();"><br>

          <label for="Ratings" style="display: block; margin-bottom: 5px; margin-left: 20px;">Đánh giá</label>
          <input type="number" id="Ratings" name="Ratings" style="width: 90%; padding: 10px; margin-bottom: 20px; margin-left: 20px; box-sizing: border-box; font-family: var();"><br>
        
          <button type="submit" style="background-color: #4CAF50; font-weight: bold; border-radius: 8px; border:none; color: white; padding: 8px 20px; cursor: pointer; margin-left:40% ; margin-bottom:20px;">Thêm</button><br>
          <button onclick="chuyenTrang()" style="background-color:aquamarine; font-weight: bold; border-radius: 8px; border:none; color:black; padding: 8px 20px; cursor: pointer; margin-left:35% ; margin-bottom:20px;">Về trang chủ</button>

</form>
</div>

<script>
    function chuyenTrang() {
        window.location = "index.php"; 
    }
</script>
</body>
</html>