<?php 
// require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sarabun:300,400,500,600,700">
</head>

<body>
    <div class="login-page">
        <div class="login-frame">
            <div class="bg-left">
                <img src="{{ asset('storage/images/bg_left.svg') }}" alt="bg-left" />
            </div>
            <div class="logo">
                <img src="{{ asset('storage/images/logo.svg') }}" alt="logo" />
            </div>
            <h1>ยินดีต้อนรับสู่ระบบศาลแพ่ง</h1>
            <h3 class="title-second">กรอกรหัสผ่านเพื่อเข้าสู่ระบบ</h3>
            <div class="authentication-form">
                <div class="login-form-box d-flex flex-column justify-center align-center">
                    <div lcass="login-community">
                        <div class="username">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input type="input" class="username" id="username" placeholder="ชื่อผู้ใช้งาน">
                        </div>
                        <div class="password">
                            <label for="password">รหัสผ่าน</label>
                            <div class="password-input-container">
                                <input type="password" class="password-input" id="password" placeholder="รหัสผ่าน">
                                <img src="{{ asset('storage/images/hide.svg') }}" alt="hide" class="toggle-password"
                                    id="togglePasswordBtn" onclick="togglePasswordVisibility()" />
                            </div>
                        </div>
                        <button class="btn-login" onclick="login()">เข้าสู่ระบบ</button>
                        <h3 class="forgot-password">ลืมรหัสผ่าน ?</h3>
                    </div>
                </div>
                <div class="bg-right">
                    <img src="{{ asset('storage/images/bg_right.svg') }}" alt="bg-right" class="img-bg-right" />
                </div>
            </div>
        </div>

    </div>
    <div class="logo-frame">
        <div class="login-description-box">
            <div class="logo_right">
                <img src="{{ asset('storage/images/logo_right.svg') }}" alt="logo_right" />
            </div>
        </div>
    </div>
    </div>
    <script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePasswordBtn.src = 'storage/images/show.svg';
            togglePasswordBtn.alt = 'show';
        } else {
            passwordInput.type = 'password';
            togglePasswordBtn.src = 'storage/images/hide.svg';
            togglePasswordBtn.alt = 'hide';
        }
    }

    function login() {
        window.location.href = 'list';
    }
    </script>
</body>


</html>