<?php

$loi=array(
   " Un robot ne peut porter atteinte � un �tre humain, ni, en restant passif, permettre qu'un �tre humain soit expos� au danger.",
   "Un robot doit ob�ir aux ordres que lui donne un �tre humain, sauf si de tels ordres entrent en conflit avec la Premi�re loi.",
   "Un robot doit prot�ger son existence tant que cette protection n'entre pas en conflit avec la Premi�re ou la Deuxi�me loi."
);

$l=$_GET["l"];
echo"<u>Loi de la robotique N�".$l."</u>:<br/>".$loi[$l-1];

echo ("Bonne correction les Github man");