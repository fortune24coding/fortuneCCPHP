
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>INCRIPTION-CANALSAT</h1>
</header>
 <main>
    <form method="POST" action="donneesinscript.php">
        <label for="nom_complet">NOM COMPLET:</label>
            <input type="text" id="nom_complet" name="nom_complet" required><br>

            
        <label for="adresse_email">ADRESSE EMAIL:</label>
            <input type="email" id="adresse_email" name="adresse_email" required><br>

        <label for="adresse_postale">ADRESSE POSTALE:</label>
            <input type="text" id="adresse_email" name="adresse_postale" required><br>
   
        <label for="options_paiement">OPTIONS PAIEMENT:</label><br>
            <input type="radio" id="mensuel" name="options_paiement" value="mensuel" checked>
            <label for="mensuel">Mensuel</labe><br>
   
            <input type="radio" id="annuel" name="options_paiement" value="annuel" checked>
            <label for="annuel">Annuel</labe><br>
        
            <label for="mot_de_passe">Saisissez Votre Mot de Passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
        
        <input type="submit"value="VALIDER">
        <input type="reset" value="ANNULER">
    </form>
 </main> 
 </body>
</html>
 