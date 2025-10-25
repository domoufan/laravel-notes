<!-- resources/views/auth/connexion.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Page de connexion</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label>Email :</label>
        <input type="email" name="email" required><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required><br>

        <button type="submit">Se connecter</button>
    </form>

    <p>Pas encore inscrit ? <a href="{{ route('register.show') }}">Créer un compte</a></p>
</body>
</html>
