<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title> Dang Nhap </title>
    <link rel="stylesheet" href="style/style-form.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/login.css"> 
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
	<div class="container">
	<h3 class="text-center ">
    <p>Đăng nhập để truy cập</p>
    <form action ="loginthem.php" method= "post" >
		<input placeholder="Username" type="text" name="username" class='form-control' required="" style="border-radius: 8px;"><br>
		<input placeholder="Password" type="password" name="password" class='form-control' required="" style="border-radius: 8px;"><br>
		<input type="submit" class="btn btn-block btn-info " style="border-radius: 8px;">
	</form><br>
    <button onclick="openForm()">Đăng ký người dùng</button>
    </h3>
    <div id="myForm" style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #f9f9f9; padding: 20px; border: 1px solid #ccc; box-shadow: 0px 0px 10px 0px #000000;" >
    <form action="process.php" method="post" style="text-align: center;">
       
        <label for="username" style="display: block; margin-bottom: 10px;"></label>
        <input placeholder="Username" type="text" id="username" name="username" required style="width: 100%; padding: 10px; margin-bottom: 10px; box-sizing: border-box; border-radius: 8px;"><br>

        <label for="password" style="display: block; margin-bottom: 10px;"></label>
        <input placeholder="password" type="text" id="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 20px; box-sizing: border-box; border-radius: 8px;"><br>

        <label for="name" style="display: block; margin-bottom: 10px;"></label>
        <input placeholder="Tên" type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin-bottom: 20px; box-sizing: border-box; border-radius: 8px;"><br>
        
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">Đăng ký</button>
        <button type="button" onclick="closeForm()" style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer; margin-left: 10px;">Đóng</button>
    </form>
    </div>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
</div>
</body>
</html>
