#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
//Removed Responsable section 2e &eacute;tage
//Removed voie normale
//Removed Jean Michel Deledicq
//Removed Jean-Claude Dhilly
//Removed Jean-Luc Hoffmann
//Removed  	<tr><td>Charg&eacute; de communication:</td><td>Maurice Vroman</td><td></td></tr>
//Removed   	<tr><td>Vice-Pr&eacute;sident:</td><td>Jean-Marie Craye<td></td></td><td></td></tr>
//Added Mateo Berck and changed secretary to Damien Nottebaert (March 22)
// removed Pierre Mortreux
?>
  <div class=rightbody>

  <h1>Composition du conseil d'administration du CMCF 2023:</h1>                                                  
    <table cellspacing=0 cellpadding=10em>
  	<tr><td>Pr&eacute;sident:</td><td>Julien Defournier<td></td></td></tr>
  	<tr><td>Vice-Pr&eacute;sident:</td><td>Bernard Ritter<td> Responsable vapeur vive 5&Prime; et 7&Prime; </td></td></tr>
  	<tr><td>Vice-Pr&eacute;sident:</td><td>Christophe Moronvalle</td><td>Responsable section petites &eacute;chelles</td></td><td></td></tr>
	<tr><td>Tr&eacute;sorier:</td><td>Pierre Bocquet</td><td></td></tr>
  	<tr><td>Secr&eacute;taire:</td><td>Damien Nottebaert</td><td></td></tr>
  	<tr><td>Administrateurs: </td><td>: Mat&eacute;o Berck</td><td></td></tr>
  	<tr><td></td><td>Alain Berck</td></tr>
	<tr><td></td><td>Alain Braquart</td></tr>
  	<tr><td></td><td>Jean-Pascal Delbart</td></tr>
  	<tr><td></td><td>François Gauthier</td></tr>
  	<tr><td></td><td>Laurent Gosselin<td>Responsable Atelier de Restauration</td></tr>
  	<tr><td></td><td>Pascal Houart</td></tr>
  </table>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>