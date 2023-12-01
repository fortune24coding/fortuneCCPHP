<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1>CONNEXION-CANALSAT</h1>
</header>
 <main>
    <form method="POST" action="donneesconnexions.php">
        <label for="adresse_email">ADRESSE EMAIL:</label>
            <input type="email" id="adresse_email" name="adresse_email" required><br>

         <label for="mot_de_passe">MOT DE PASSE:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
      
            <input type="submit" value="ENVOYER">
      <input type="reset" value="ANNULER">
            
</body>
</html>