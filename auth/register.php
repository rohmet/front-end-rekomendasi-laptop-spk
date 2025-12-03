<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us - SPK Laptop</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="auth-body">

    <div class="auth-container">
        <div class="auth-card">
            <span class="auth-brand">MEMBERSHIP</span>

            <h1 class="auth-title">Join the Club.</h1>
            <p class="auth-subtitle">Create an account to curate your favorite tech recommendations.</p>
            
            <div id="alert-box" class="editorial-alert" style="display: none;"></div>

            <form onsubmit="handleRegister(event)">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="editorial-input" placeholder="Choose a unique username" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="editorial-input" placeholder="Min. 6 characters" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="editorial-input" placeholder="Repeat your password" required>
                </div>

                <button type="submit" class="btn-editorial">
                    Create Account
                </button>
            </form>
            
            <div class="auth-footer">
                Already a member? <a href="login.php">Sign In</a>
            </div>
        </div>
    </div>

    <script>
        function handleRegister(e) {
            e.preventDefault();
            
            const pass = document.getElementById('password').value;
            const confirmPass = document.getElementById('confirm_password').value;
            const alertBox = document.getElementById('alert-box');

            if (pass !== confirmPass) {
                alertBox.style.display = 'block';
                alertBox.style.backgroundColor = '#f8d7da';
                alertBox.style.color = '#721c24';
                alertBox.innerText = "Password confirmation does not match!";
                return;
            }

            alertBox.style.display = 'block';
            alertBox.style.backgroundColor = '#d4edda';
            alertBox.style.color = '#155724';
            alertBox.innerText = "Account created successfully! Redirecting...";

            setTimeout(() => {
                window.location.href = 'login.php';
            }, 1500);
        }
    </script>

</body>
</html>