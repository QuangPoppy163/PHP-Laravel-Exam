<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body  style="background-image: url('https://images.alphacoders.com/658/658090.jpg');background-repeat:no-repeat; font-family: tahoma;" >
<marquee style="font-family:tahoma;
  font-size:50px;
   text-shadow:#367512 20px 3px 4px;
   padding:0;
   margin-top:10px;" scrollamount="12">Akali   Riven    Zed    Jax    Jarvan</marquee>
<DIV >
    <DIV style="margin:5% 30%;border-radius: 7px;border:5px dashed #8d94a0; background-image: url('http://www.lol-wallpapers.com/wp-content/uploads/2017/02/Yasuo-by-Valkhar-League-of-Legends-Artwork-Wallpaper-lol.jpg'); background-repeat:no-repeat;">
        <DIV style="padding:5%;">
            <br />
            <h2 style="color:#ef604a;">Tài khoản:</h2> <input style="border-radius: 7px;" type= "text" id="valueA1"/>
            <h2 style="color:#ef604a;">Mật Khẩu:</h2> <input style="border-radius: 7px;" type= "password" id="valueB1"/><br /><br />
            <a href="file:///D:/html/html/tinh%25mo.html"><input type="button" value="Đăng Nhập" onclick="if((document.getElementById('valueA1').value == document.getElementById('valueA').value) &&(document.getElementById('valueB1').value == document.getElementById('valueB').value)){
     alert('Đăng nhập thành công!');
    }
   else{
     alert('Tài khoản hoặc mật khẩu không hợp lệ!');
     };"/></a>
            <a href="file:///D:/html/html/dangki.html"><input type="button" value="Đăng Ký Tài Khoản" onclik=""/></a>
            <input type="button" value="Quên Mật Khẩu"/><br /><br />

            <h1 style="color:#f72909;">Đăng kí tài khoản</h1>
            <p style="color:#f4666d;">Tài khoản:</p> <input style="border-radius: 7px;" type= "text;" id="valueA"/>
            <p style="color:#f4666d;">Mật Khẩu:</p> <input style="border-radius: 7px;" type= "password" id="valueB"/>
            <p style="color:#f4666d;">Số điện thoại:</p>  <input style="border-radius: 7px;" type= "text" id="valueC"/>
            <p style="color:#f4666d;">Địa chỉ e-mail:</p> <input style="border-radius: 7px;" style="border-radius: 10px;" type= "e-mail" id="valueD"/>
            <p style="color:#f4666d;">Số CMT:</p> <input style="border-radius: 7px;" type= "text" id="valueE"/><br /><br />
            <input style="border-radius: 7px;" type="button" value="Kiểm tra" onclick="kiemtra();"/>
            <input style="border-radius: 7px;" type="button" value="Đăng Ký" onclick="alert('Đăng kí tài khoản thành công.   ' + 'Tài khoản: ' + document.getElementById('valueA').value + '         Mật khẩu: ' + document.getElementById('valueB').value + '     Số điện thoại: '+ document.getElementById('valueC').value + '  Địa chỉ e-mail: '+ document.getElementById('valueD').value + '  Số CMT:'+ document.getElementById('valueD').value  );" />
        </DIV>
    </DIV>
</DIV>
</body>
</html>