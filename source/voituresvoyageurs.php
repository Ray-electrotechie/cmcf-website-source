#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
  <h1 class=rightheader>La Voie Normale/ Les Voitures Voyageurs</h1>
  <p>Voici les voitures voyageurs que le Centre poss&egrave;de.</p>
  <hr class=allbelow> <hr/>
  <div class=subleft>
    <h2>Les Voitures Transatlantiques</h2>
    <table width="50%" border="1" style="float:right; margin-left: 20px">
    <tr>
      <td width="54%">Ann&eacute;e de construction</td>
      <td width="46%">1931</td>
    </tr>
    <tr>
      <td width="54%">N&deg;</td>
      <td width="46%">50.87.48378223</td>
    </tr>
    <tr>
      <td width="54%">Nombre de voitures construites</td>
      <td width="46%">50</td>
    </tr>
    <tr>
      <td width="54%">Vitesse maxi</td>
      <td width="46%">140 km/h</td>
    </tr>
    <tr>
      <td width="54%">Service assur&eacute;</td>
      <td width="46%">Trains paquebot et Trains de nuit</td>
    </tr>
    <tr>
      <td width="54%">Dernier lieu d'affectation</td>
      <td width="46%">Paris-Massena</td>
    </tr>
    <tr>
      <td width="54%">Date de radiation</td>
      <td width="46%">1984</td>
    </tr>
  </table>
    <p>Les 
  voitures Transatlantiques ont été construites en 1931 pour circuler sur les 
  relations Paris-St-Lazare - Le Havre - Cherbourg - Dieppe. Elles étaient peintes 
  en trois couleurs : toiture blanche, trumeau vert clair et bas de face vert 
  foncé. Vers 1950, ces voitures sont engagées sur Paris-Lille. A la suite de 
  ces liaisons, les voitures sont modifiées en voitures couchettes 1er classe 
  avant d'être retirées du service dans les années 1980. La voiture sauvegardée 
  puis restaurée par le CMCF en 1999 a été rachetée à l'A.J.E.C.T.A en 1993 avant 
  d'arrivée au Centre Denis Papin en 1996.</p>
    <img src="images/VoitureTransatlantique.JPG" alt="Voiture Transatlantique 1" style="float:left; margin-right: 5px" height="124"  onClick="parent.location='images/VoitureTransatlantique.JPG'"> 
    <img src="images/VOITURE2.JPG" alt="Voiture Transatlantique 2" style="float:left; margin-right: 5px" height="124"  onClick="parent.location='images/VOITURE2.JPG'"> 
    <img src="images/VOITURE3.JPG" alt="Voiture Transatlantique 3" style="float:left; margin-right: 5px" height="124"  onClick="parent.location='images/VOITURE3.JPG'"> 
    <hr class=allbelow> <hr/>                                                                                     
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
