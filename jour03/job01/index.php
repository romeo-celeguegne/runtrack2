<?php //ouvrir php
$nombres= array(200, 204, 173, 98, 171, 404, 459); // Crée un tableau et y insère ses valeurs 
foreach ($nombres as $nombre) //Pour chaque valeur 
if ($nombre % 2 == 0) //si nombre divisé par 2 = 0, nombre est paire
{
   echo "$nombre est paire <br>"; //afficher "-------" puis revenir à la ligne (<br>)
}
else //si nombre divisé par 2 est différent de 0, nombre est impaire
{
   echo "$nombre est impaire <br>"; //afficher "-------" puis revenir à la ligne (<br>)
} 
//fermer php ?> 