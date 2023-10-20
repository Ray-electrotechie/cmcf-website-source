#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
  <h1 class=rightheader>La Voie Normale</h1>
  <p> La section de la voie normale est charg&eacute;e de restaurer les vraies locomotives 
  et voitures voyageurs dans le but de les faire agr&eacute;er et de faire rouler 
  une rame essentiellement constitu&eacute;e de mat&eacute;riels Nord (voir page 
  projet).</p>
  <h2>Notre mat&eacute;riel</h2>
  <div style="width:70%;float:right">

<img src="images/BB13044.JPG" alt="BB13044" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/BB13044.JPG'">
<img src="images/BB16506ETBB12068LDCT17.11.06.JPG-6-.jpg" alt="BB16506 et BB12068" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/BB16506ETBB12068LDCT17.11.06.JPG-6-.jpg'">
<img src="images/CC65506.jpg" alt="CC65506" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/CC65506.jpg'">
<img src="images/A1AA1A62094.JPG" alt="A1AA1A62094" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/A1AA1A62094.JPG'">
<img src="images/draisine.jpg" alt="draisine" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/draisine.jpg'">
<img src="images/231C78.jpg" alt="231C78" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/231C78.jpg'">
<img src="images/FOURGON26.JPG" alt="FOURGON26" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/FOURGON26.JPG'">
<img src="images/VOITUR25.JPG" alt="Voiture 25" style="float: right; margin: 5px" height="124" width="162" onClick="parent.location='images/VOITUR25.JPG'">
</div>
  
  <p>Notre mat&eacute;riel est constitu&eacute; de locomotives (<a href="locoelectrique.htm">&eacute;lectrique</a>, <a href="locodiesel.htm"> diesel</a>, 
  et <span class="lien"><a href="locoavapeur.htm" class="lien">vapeur</a></span>), 
  de <a href="voituresvoyageurs.htm">voitures voyageur</a> et de <a href="wagonsdemarchandises.htm">wagons</a>.</p>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
