<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>đăng nhập</title>
</head>
<body>
<div class="login">
    <div class="logo-login">
        <img src="../image/logolev.png" alt="">
        <span>Vcleaning</span>
    </div>
    <div class="title">Chào mừng đến với hệ thống quản trị</div>
    <form action="" method="POST">
        <div class="item">
            <div class="title-input">Tên đăng nhập:</div>
            <div class="container-input">
                <input type="text" placeholder="Username" class="input-custom" id="username" required>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Mật khẩu:</div>
            <div class="container-input">
                <input type="password" placeholder="password" class="input-custom" id="password" required>
            </div>
        </div>
        <div class="btn-login">
            <button type="submit" name="login" onsubmit="validateForm()">Đăng nhập</button>
        </div>
    </form>
</div>
<style type="text/css">
    .login{
        background-color: #ECC74E;
        width: 400px;
        height: 200px;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        position: absolute;
        border: 1px solid #6B6C6F;
        border-radius: 10px;
        padding: 10px 10px;
        font-family: arial;
    }
    .login .title{
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        opacity: 1;
    }
    .login .logo-login{
        display: flex;
        justify-content: center;
    }
    .login .logo-login span{
        margin-left: 10px;
        font-weight: 600;
        text-align: center;
        font-size:26px;
    }

    .login .item{
        margin-top: 15px;
        justify-content: space-between;
        display: flex;
        align-items: center;
    }
    .login.item .title-input{
        font-size :18px;
        color: #6B6C6F;
        font-weight: 500;
        width: 50%;
    }
    .login .item .container-input .input-custom{
        border-radius: 4px;
        width: 250px;
        height: 37px;
        border: 1px solid #6B6C6F;
    }
    .login .btn-login{
        margin-top: 15px;
        float: right;
    }
    .login .btn-login button{
        border: 1px solid #6B6C6F;
        height: 33px;
        border-radius: 6px;
        cursor: pointer;
    }
</style>
<script !src="" type="text/javascript">
    function validateForm() {
        var txtusername = document.getElementById("username").value;
        var txtpassword = document.getElementById("password").value;
        if(txtusername==""){
            alert("Please enter your username");
        }else if(txtpassword==""){
            alert("Please enter your password");
        }else{
            console.log(txtusername);
            console.log(txtpassword);
        }
    }
</script>
</body>
</html>
