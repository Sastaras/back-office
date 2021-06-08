<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
</head>
<body>
    <form action="register-form-handler.php" method="post">
<div>
<label for="input-username">Nom  : </label>
<input type="text" name="username" id="input-username">
</div>
<div>
<label for="input-email">Email  : </label>
<input type="email" name="email" id="input-email">
</div>
<div>
<label for="input-password"> Mot de passe  : </label>
<input type="password" name="password" id="input-password">
</div>
<div>
<label for="input-confirmation">Vérif mot de passe  : </label>
<input type="password" name="confirmation" id="input-confirmation" required>
<span id='error'></span>
</div>
<div>
   <input type="submit" value="envoyer" id="submit">
</div>

</form>
  <script src="main.js"></script>
</body>
</html>