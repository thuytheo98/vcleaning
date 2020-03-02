<div class="register">
    <div class="logo">
        <img src="../../image/logolev.png" alt="">
        <span>Vcleaning</span>
    </div>
    <div class="title">Tạo tài khoản Vcleaning</div>
    <form action="" method="">
        <div class="item">
            <div class="title-input">Tên đăng nhập:</div>
            <div class="container-input">
                <input type="text" class="input-custom" name="username" required>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Email:</div>
            <div class="container-input">
                <input type="email" class="input-custom" name="email" required>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Ngày sinh:</div>
            <div class="container-input">
                <select name="day" id="" class="input-custom dmy">
                    <?php
                    echo "<option>Ngày</option>";
                    for($i = 1;$i<=31;$i++){
                        echo "<option value=\"day-item\">$i</option>";
                    }
                    ?>
                </select>
                <select name="month" id="" class="input-custom dmy">
                    <?php
                    echo "<option>Tháng</option>";
                    for($i = 1;$i<=12;$i++){
                        echo "<option value=\"day-item\">$i</option>";
                    }
                    ?>
                </select>
                <select name="year" id="" class="input-custom dmy">
                    <?php
                    $year = getdate();
                    echo "<option class='dmy-title'>Năm</option>";
                    for($i = 1930;$i <= $year["year"];$i++){
                        echo "<option value=\"day-item\">$i</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Số điện thoại:</div>
            <div class="container-input">
                <input type="number" class="input-custom" name="phonenumber" required>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Mật khẩu:</div>
            <div class="container-input">
                <input type="text" class="input-custom" name="password" required>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Xác nhận mật khẩu:</div>
            <div class="container-input">
                <input type="text" class="input-custom" name="repassword" required>
            </div>
        </div>
        <p>Sử dụng mật khẩu với ít nhất 8 ký tự bao gồm chữ in hoa, chữ thường và chữ số</p>
        <div class="button-wrap">
            <div class=" btn btn-return">
                <button type="button">Trở về</button>
            </div>
            <div class=" btn btn-register">
                <button type="submit" name="submit" onclick="">Đăng ký</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<style type="text/css">
    .register{
        width: 500px;
        height: 600px;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: goldenrod;
        border-radius: 10px;
        padding: 10px 15px;
        border: 1px solid #6B6C6F;
    }
    .register .logo{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .register .logo span{
        margin-top: 7px;
        font-size: 24px;
    }
    .register .title{
        text-align: center;
        font-family: SansSerif;
        font-size: 24px;
        font-weight: 600;
        opacity: 0.5%;
    }
    .register .item{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0;
    }
    .register .item .title-input{
        font-size: 23px;
        font-weight: 500;
        width: 50%;
    }
    .register .item .input-custom{
        width: 250px;
        height: 30px;
        border: 1px solid #6B6C6F;
        border-radius: 10px;
        padding: 5px;
    }
    .register .item .dmy{
        width: 70px;
        margin-right: 10px;
        float: left;
        display: flex;
        justify-content: center;
    }
    .register .item .dmy:last-child{
        margin-right: 0;
    }
    register .item .dmy .dmy-title{
        font-size: 16px;
        padding: 5px;
        font-family: SansSerif;
    }
    .register .button-wrap{
        display: flex;
        justify-content:  flex-end;
        align-items: baseline;
    }
    .register .btn{
        box-sizing: border-box;
        margin-top: 5px;
        margin-right: 20px;
        float: left;
    }
    .register button{
        padding: 12px;
        border-radius: 7px;
        border: 1px solid #6B6C6F;
        font-size: 16px;
    }
    .register .btn-return button:hover{
        background-color: #ea704d;
        color: black;
        border: 1px solid #454543;
        cursor: pointer;
    }
    .register .btn-register button:hover{
        background-color: #ea704d;
        color: black;
        border: 1px solid #454543;
        cursor: pointer;
    }
</style>
