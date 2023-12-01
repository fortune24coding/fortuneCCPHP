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
          
            <th>ADRESSE EMAIL</th>
            <th>MOT DE PASSE</th>
         
            
        </tr>
        <tr>
            <!-- Utilisation de PHP pour afficher les données d'inscription -->
            
            <td><?php echo isset($_POST['adresse_email']) ? $_POST['adresse_email'] : ''; ?></td>
            <td><?php echo isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : ''; ?></td>

            
        </tr>
        
    </table>
    <main>
        <input type="submit"value="BIENVENUE">
    </main>
    <br>
    <div>


