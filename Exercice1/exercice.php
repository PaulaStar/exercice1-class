<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "CompteBancaire.class.php";

    $compte1 = new CompteBancaire("1251541", 500);
    $compte1->afficher();
    //changer le solde
    $compte1->setSolde (9000);
    //afficher le solde (l'obtenir d'abord)
    echo "<br><br>Le solde de \$compte1 est :" . $compte1->getSolde();

    //rajouter un montant
    $compte1->rajouterSolde (250);

    //diminuer le solde d'un montant
    $compte1->retirerSolde (30);

    $compte1->afficher();

    $compte1->bloquer();




?>
</body>
</html>