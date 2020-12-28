
<?php
  
  $tab = array(1=>1,3=>4,10=>12);





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


$size = sizeof($tab);

if ($size != 0){
foreach ($tab as $cle => $val) {
  
$somme = $val+$cle;
$parite ="";



      if ($somme%2 == 1){
      $parite = "impair";
      }
     else{
     $parite = "paire";
      }


   
        echo "<tr>";
        echo "<td>".$cle."</td>";
        echo "<td>".$val."</td>";
        echo "<td>" .$somme."</td>";
        echo "<td>".$parite.  "</td>";
        echo "</tr>";
    
}
echo "</table>";
}
else{
    echo "rien a afficher";  
}
?>