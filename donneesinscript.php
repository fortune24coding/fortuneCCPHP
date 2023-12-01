<!DOCTYPE html>
<html>
<head>
    <title>INSCTIPTION</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <!-- Le tableau pour afficher les données -->
    <table>
        <tr>
            <th>NOM COMPLET</th>
            <th>ADRESSE EMAIL</th>
            <th>ADRESSE POSTALE</th>
            <th>OPTIONS PAIEMENT</th>
         
            
        </tr>
        <tr>
            <!-- Utilisation de PHP pour afficher les données d'inscription -->
            <td><?php echo isset($_POST['non_complet']) ? $_POST['nom_complet'] : ''; ?></td>
            <td><?php echo isset($_POST['adresse_email']) ? $_POST['adresse_email'] : ''; ?></td>
            <td><?php echo isset($_POST['adresse_postale']) ? $_POST['adresse_postale'] : ''; ?></td>
            <td><?php echo isset($_POST['options_paiement']) ? $_POST['options_paiement'] : ''; ?></td>
            
        </tr>
        
    </table>
      <main>
      <div class="bt1"><button><a href="connexion.php">LANCER L'ABONNEMENT</a></button></div>
    </main>
    <br>
    <div>


