<?php
/**
  *  @author navarro
  *  @version 1.0
*/

  /**
    * Función cuadrado
    * @param int $num
    * @return float
  */

   function cuadrado($núm){
    return $núm * $núm;
}
echo cuadrado(4); 

  /**
    * Función FamiliaNombreyAño
    * @param varchar2 $name
    * @return varchar2
  */
  
   function FamiliaNombre ($name, $year){
  	FamiliaNombre("$name, $year");
  	return "$name, $year" 
 }

FamiliaNombre("Navarro, 1959");
echo "$fname Refsnes. Born in $year <br>";

@internal: Soloparadesarrolladores;
?>
