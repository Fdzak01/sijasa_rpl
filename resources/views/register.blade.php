<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
        /* style.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #2d99c9, #61c2b8);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .login-container {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            width: 100%;
        }

        .logo-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('background.jpg');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .logo {
            max-width: 200px;
        }

        .logo-container h1 {
            font-size: 24px;
            margin: 0;
        }

        .login-form {
            flex: 1;
            padding: 40px;
        }

        .login-form h2 {
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .gender-options {
            display: flex;
            gap: 20px;
            align-items: center;
        }


        .input-group .show-password {
            position: absolute;
            right: 10px;
            top: 35px;
            cursor: pointer;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember-forgot a {
            text-decoration: none;
            color: #2d99c9;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #2d99c9;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-button:hover {
            background-color: #217a96;
        }

        .register-link {
            color: #2d99c9;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="{{ asset('assets/users/img/Logo.png') }}" alt="Logo" class="logo">
            <h1>SIJASA</h1>
        </div>
        <div class="login-form">
            <h2>Daftar</h2>
            <form action="{{ route('register.create') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="name">Nama</label>
                    <input type="name" name="name" id="name" placeholder="Nama" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="Kata Sandi" required>
                    <span class="show-password" onclick="togglePassword()">👁️</span>
                </div>
                <div class="input-group">
                    <label for="gender">Jenis Kelamin</label>
                    <div class="gender-options">
                        <label>
                            <input type="radio" name="jenkel" value="L" required> Laki-laki
                        </label>
                        <label>
                            <input type="radio" name="jenkel" value="P" required> Perempuan
                        </label>
                    </div>
                </div>

                <div class="input-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" rows="4" placeholder="Tulis bio Anda di sini..."></textarea>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> Ingat Aku
                    </label>
                    <a href="#" class="forgot-password">Lupa Kata Sandi</a>
                </div>
                <button type="submit" class="login-button">Daftar</button>
                <p>Sudah Punya Akun? <a href="{{ route('login') }}" class="register-link">Masuk</a></p>
            </form>
        </div>
    </div>
    <script>
        // script.js
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
        }
    </script>
</body>

</html>
