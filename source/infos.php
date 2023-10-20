#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>

  <h1 class=rightheader>Les Informations Pratiques</h1>
  <h2>Plan et Tarifs</h2>
  <p> Vous trouverez sur cette page le plan d'acc&egrave;s au Centre Denis Papin ainsi 
que les tarifs des visites du Centre et ses horaires d'ouverture. </p>
   <a href="planettarifs.htm" class="lien">Cliquez ici pour en savoir plus </a>
   <hr/>
  <h2>L'Association</h2>
  <p> Cette page pr&eacute;sente le conseil d'administration et l'effectif de l'association. </p>
  <a href="bureauetmembres.htm" class="lien">Cliquez ici pour en savoir plus</a>
  <hr/>
  <h2>Contactez-nous!</h2>
  <p> Pour tout renseignement compl&eacute;mentaire ou pour rejoindre l'association, n'h&eacute;sitez 
pas &agrave; nous contacter ! </p>
  <a href="contacteznous.htm" class="lien">Cliquez ici pour en savoir plus</a>
  <hr/>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
