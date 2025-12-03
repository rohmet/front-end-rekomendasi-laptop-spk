<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - SPK Laptop</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="auth-body">

    <div class="auth-container">
        <div class="auth-card">
            <span class="auth-brand">COMEL. MAGAZINE</span>

            <h1 class="auth-title">Welcome Back.</h1>
            <p class="auth-subtitle">Please enter your details to access your personalized collection.</p>
            
            <div id="alert-box" class="editorial-alert" style="display: none; background-color: #f8d7da; color: #721c24;"></div>

            <form onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="editorial-input" placeholder="Try 'admin' or 'user'" required autofocus>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="editorial-input" placeholder="••••••••" required>
                </div>
                
                <label class="editorial-check">
                    <input type="checkbox" name="remember" id="remember">
                    <span>Keep me signed in</span>
                </label>

                <button type="submit" class="btn-editorial">
                    Sign In
                </button>
            </form>
            
            <div class="auth-footer">
                Don't have an account? <a href="register.php">Buat akun</a>
                <br><br>
                <a href="../index.php" style="color: #bbb; font-size: 0.8rem;">&larr; Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script>
        function handleLogin(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.toLowerCase();
            const alertBox = document.getElementById('alert-box');

            const btn = document.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerText = "Checking...";
            btn.disabled = true;

            setTimeout(() => {
                if (username === 'admin') {
                    window.location.href = '../admin/dashboard.php';
                } else {
                    window.location.href = '../user/recommendation.php';
                }
            }, 1000);
        }
    </script>
</body>
</html>