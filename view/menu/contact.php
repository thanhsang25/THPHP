<!DOCTYPE html>
<html>
<head>
<style>
body {
background:rgb(30,30,40);
}
.form {
text-align: center;
margin-top: 40px;
max-width:420px;
margin:50px auto;
height: 320px;
}
#form1 input[type=text] {
color:white;
font-family: sans-serif;
font-weight:500;
font-size: 18px;
border-radius: 5px;
line-height: 22px;
background-color: transparent;
border:2px solid #CC6666;
transition: all 0.3s;
padding: 13px;
margin-bottom: 15px;
width:100%;
box-sizing: border-box;
outline:0;
}

#form1 #fcontent {
height: 100px;
}
#form1 input[type=submit] {
color:white;
font-family: sans-serif;
font-weight:500;
font-size: 18px;
border-radius: 5px;
line-height: 22px;
background-color: #CC6666;
border:2px solid #CC6666;
transition: all 0.3s;
padding: 13px;
margin-bottom: 15px;
width:100%;
box-sizing: border-box;
outline:0;
}
#form1 input[type="submit"]:hover {
background:#CC4949;
}
</style>
</head>
<body>

<div class="form">
<form  id="form1" method="POST" action="view/menu/xuly.php">
<input type="text" id="name" name="name" placeholder="Họ tên"><br>
<input type="text" id="email" name="email" placeholder="Địa chỉ Email"><br>
<input type="text" id="content" name="content" placeholder="Nội dung yêu cầu"><br>
<td colspan="2"><input class="submit-btn" type="submit" name="addcontract" value="Gửi yêu cầu"></td>
</form>
</div>
</body>
</html>