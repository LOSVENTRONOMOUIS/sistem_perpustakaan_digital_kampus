<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Perpustakaan Digital</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            /* Menggunakan gambar ilustrasi perpustakaan gratis dari Unsplash */
            background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Lapisan gelap agar form login tetap terbaca jelas */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 32, 39, 0.75); 
            z-index: 1;
        }

        /* Desain kotak login */
        .login-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 360px;
            text-align: center;
            z-index: 2;
            position: relative;
        }

        .icon-book {
            font-size: 45px;
            margin-bottom: 10px;
            color: #2980b9;
        }

        .login-card h2 {
            color: #2c3e50;
            margin: 0 0 5px 0;
            font-size: 26px;
        }

        .login-card p {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #34495e;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #2980b9;
            box-shadow: 0 0 5px rgba(41, 128, 185, 0.3);
            outline: none;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-login:hover {
            background-color: #1f618d;
        }
    </style>
</head>
<body>

    <div class="overlay"></div>

    <div class="login-card">
        <div class="icon-book">📚</div>
        <h2>Masuk</h2>
        <p>Sistem Perpustakaan Digital</p>
        
        <form action="" method="">
            <div class="form-group">
                <label for="username">Username / NIM</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username Anda" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
            </div>

            <button type="submit" class="btn-login">Masuk ke Perpustakaan</button>
        </form>
    </div>

</body>
</html>