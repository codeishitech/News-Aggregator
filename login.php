<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">News aggregator</div>
    </nav>

    <div class="login-wrapper">
        <div class="login-card">
            <h2>Welcome</h2>
            <?php
            session_start();
            $error = "";
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = trim($_POST["username"] ?? "");
            $password = $_POST["password"] ?? "";
            $users = [
            "ishita" => "123",
            "ishani" => "123",
            "ishu" => "123"
                ];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}

            if ($error): ?>
                <div class="error-msg"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <span class="toggle-password" onclick="togglePassword()">Show</span>
                </div>
                <button type="submit" class="login-btn">Sign In</button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            const toggle = document.querySelector(".toggle-password");
            if (input.type === "password") {
                input.type = "text";
                toggle.textContent = "Hide";
            } else {
                input.type = "password";
                toggle.textContent = "Show";
            }
        }
    </script>

</body>
</html>
