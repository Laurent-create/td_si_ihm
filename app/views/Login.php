<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="<?= Flight::get('vendor.base_url') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= Flight::get('assets.base_url') ?>/css/Login.css" rel="stylesheet">
</head>
<body>

<!-- Lien Sign Up en haut à droite -->
<a href="<?= Flight::get('base_url') ?>signup" class="signup-link">Sign Up →</a>

<div class="login-container">
    <h3>Here you can Login</h3>
    <p>Let's join us :)</p>
    <form action="<?= Flight::get('base_url') ?>home" method="get">
        <div class="mb-3 text-start">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-login">LOGIN</button>
        <a href="#" class="forgot-password">Forgot your password?</a>
    </form>
</div>

</body>
</html>
