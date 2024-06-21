<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logare și Creare Cont Cabinet Veterinar</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/paws.png">

    <link rel="stylesheet" href="assets/css/login.css">

</head>
<body>


<div class="container">
    <div class="form-container" id="login-container">
        <h2>Logare</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" name="email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Parolă</label>
                <input type="password" id="login-password" name="password" required>
            </div>
            <button type="submit">Logare</button>
        </form>
        <p id="login-error-message" class="error-message"></p>
        <p>Nu ai cont? <a href="#" onclick="toggleForms()">Crează unul aici</a></p>
    </div>

    <div class="form-container" id="register-container" style="display: none;">
        <h2>Creare Cont</h2>
        <form id="registerForm">
            <div class="form-group">
                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Parolă</label>
                <input type="password" id="register-password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmă parola</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Creare Cont</button>
        </form>
        <p id="register-error-message" class="error-message"></p>
        <p>Ai deja cont? <a href="#" onclick="toggleForms()">Loghează-te aici</a></p>
    </div>
</div>

<script src="assets/js/vendor/login.js"></script>
</body>
</html>
