# TP01-PHP-Achraf-Zehouani
 TP 01 PHP — Programmation Web 2 — 2026/2027.

# TP 01 PHP — Programmation Web 2 — 2026/2027

- Nom et Prénom : Achraf Zehouani 
- Groupe : 3
- Titre du TP : TP 02 PHP — Programmation Web

# Exercice 03: 
    -Observation du code source : Non, on ne voit pas les instructions PHP (<?php echo ... ?>) dans le code source de la page dans le navigateur. On voit uniquement le résultat HTML généré (Ce texte est généré par PHP.).

    -Explication : Le code PHP est exécuté côté serveur. Le serveur ne transmet au navigateur que le HTML final, protégeant ainsi le code source du script.

# Exercice 06:
    -Ce que l'on remarque avec echo $disponible : Lorsque la variable booléenne est true, echo affiche 1. Si elle est false, echo n'affiche rien (chaine vide). C'est pour cela qu'on utilise var_dump() pour voir le vrai type et la valeur exacte.