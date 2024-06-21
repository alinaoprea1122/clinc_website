document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;

    // Într-un caz real, aici ai trimite datele către server pentru verificare
    if (email === 'admin@yahoo.com' && password === 'password123') {
        alert('Logare reușită!');
        window.location.href = 'Carnet-de-Sanatate.php';
    } else {
        document.getElementById('login-error-message').textContent = 'Nume utilizator sau parolă incorectă.';
        alert("Nume utilizator sau Parola Incorecta");
    }
});

document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('register-email').value;
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (password !== confirmPassword) {
        document.getElementById('register-error-message').textContent = 'Parolele nu se potrivesc.';
        return;
    }

    // Într-un caz real, aici ai trimite datele către server pentru înregistrare
    // Vom simula crearea contului
    alert('Cont creat cu succes!');
    // Aici poți redirecționa utilizatorul sau face alte acțiuni
    window.location.href ='Carnet-de-Sanatate.php';
});

function toggleForms() {
    const loginContainer = document.getElementById('login-container');
    const registerContainer = document.getElementById('register-container');

    if (loginContainer.style.display === 'none') {
        loginContainer.style.display = 'block';
        registerContainer.style.display = 'none';
    } else {
        loginContainer.style.display = 'none';
        registerContainer.style.display = 'block';
    }
}
