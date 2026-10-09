<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $nom = "El Amri";
    $prenom = "Youssef";
    $filiere = "MIP";
    $annee = "2ème Année";
    $age = 21;
    ?>

    <h1>Fiche étudiant</h1>
    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Filière : <?php echo $filiere; ?></li>
        <li>Année : <?php echo $annee; ?></li>
    </ul>

    <p>
        <?php 
        echo "Je m'appelle $prenom $nom, je suis en $annee filière $filiere et j'ai $age ans."; 
        ?>
    </p>
</body>
</html>