<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 25/11/2018
 * Time: 12:34
 */

include 'ConnexionPDO.php';
$cnxPDO = ConnexionPDO::getInstance();


$requete = "Select * from utilisateur where age<30";
$reponse= $cnxPDO->query($requete);
/*var_dump($reponse->fetchAll(PDO::FETCH_OBJ));*/
while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['nom']) . '</strong> : ' . htmlspecialchars($donnees['age'])
        .'</p>';
}
echo'<br>';

$requete1 ="Select * from utilisateur ORDER BY age DESC ";
$reponse1= $cnxPDO->query($requete1);
/*var_dump($reponse1->fetchAll(PDO::FETCH_OBJ));*/
while ($donnees = $reponse1->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['age']) . '</strong> : ' . htmlspecialchars($donnees['nom'])
        .'</p>';
}

echo '<br>';
$requete2 ="Select * from utilisateur GROUP BY nom";
$reponse2= $cnxPDO->query($requete2);
/*var_dump($reponse1->fetchAll(PDO::FETCH_OBJ));*/
while ($donnees = $reponse2->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['age']) . '</strong> : ' . htmlspecialchars($donnees['nom'])
        .'</p>';
}


