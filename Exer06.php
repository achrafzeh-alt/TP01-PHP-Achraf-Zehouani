<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
$produit = "Clavier";
$quantite = 3;
$prix = 120.50;
$disponible = true;

echo "Produit : " . $produit . "<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Prix : " . $prix . "<br>";
echo "Disponible : " . $disponible . "<br><br>";

var_dump($produit);
echo "<br>";
var_dump($quantite);
echo "<br>";
var_dump($prix);
echo "<br>";
var_dump($disponible);
?>
</body>
</html>