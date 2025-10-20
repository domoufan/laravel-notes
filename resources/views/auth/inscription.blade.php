<!-- resources/views/auth/inscription.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Page d'inscription</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" required><br>

        <label>Email :</label>
        <input type="email" name="email" required><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required><br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
