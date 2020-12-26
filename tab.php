
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

  
foreach ($tab as $cle => $val) {
  
$somme = $val+$cle;

   
        echo "<tr>";
        echo "<td>".$cle."</td>";
        echo "<td>".$val."</td>";
        echo "<td>" .$somme."</td>";
        
        echo "</tr>";
    
}
echo "</table>";
?>