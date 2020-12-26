
<?php
  
$tab_caracteristique_dupont = array("prénom" => "PAUL","profession" =>
"ministre","age" => 50);
$tab_caracteristique_durand = array("prénom" => "ROBERT","profession" =>
"agriculteur","age" => 45);
$tab_personne['0'] = $tab_caracteristique_dupont;
$tab_personne['DURAND'] = $tab_caracteristique_durand;
echo "<table border=\"1\">";
echo "<tr><td>";
echo "Item 1";
echo "</td><td colspan= \"1\">";
echo "Item 2";
echo "</td><td colspan= \"1\">";
echo "Item 1 + Item 2";
echo "</td><td colspan= \"1\">";
echo "Paire / Impaire";
echo "</td></tr>";

  
foreach ($tab_personne as $cle => $val) {
    //$cle correspond à DUPONT ou DURAND
$nombreligne = count($val)+1; //nombre de lignes à afficher =
//nombre d’éléments dans le tableau + en-tête
    
//boucle sur le tableau $val correspondant à $tab_caracteristique_dupont
//ou $tab_caracteristique_durand
    foreach ($val as $cle2 => $val2) {
        echo "<tr>";
        echo "<td>".$cle2."</td>";
        echo "<td>".$val2."</td>";
        echo "<td>"$cle2+$val2"</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>