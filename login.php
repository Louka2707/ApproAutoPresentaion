<?php
$identifiant = 'invite';
$passWord = 'A@Ga2e45';

// Vérifier si les champs "identifiant" et "password" existent dans $_POST
if (isset($_POST["identifiant"]) && isset($_POST["password"])) {
    if ($_POST["identifiant"] === $identifiant && $_POST["password"] === $passWord) {
        header('Location: http://localhost:8000/index.html');
        exit();
    } else {
        $error_message = "Identifiant ou mot de passe incorrect.";
    }
} else {
    $error_message = "Veuillez remplir tous les champs.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login-styles.css">
</head>
<body>
    <form method="POST" action="/login.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Identifiant</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="identifiant" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <div class="input-group">
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            <button type="button" class="btn btn-outline-secondary" id="togglePassword">🙈</button>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Se Connecter</button>
      </form>

    <script>
        const togglePasswordButton = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('exampleInputPassword1');

        togglePasswordButton.addEventListener('click', function () {
            // Vérifie le type de l'input et le change
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Change l'icône ou le texte du bouton
            togglePasswordButton.textContent = type === 'password' ? '🙈' : '👁️';
        });
    </script>
</body>
</html>
