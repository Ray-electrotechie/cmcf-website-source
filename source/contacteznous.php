#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
<div id=leftbanner class="tooltip">
	<img class=home src="images/cmcfadhere2023.jpg"onClick="parent.location='images/cmcfadhere2023.pdf'" alt="Adhesion CMCF" >
	<div class=splash><a href='https://www.openstreetmap.org/#map=18/50.47259/2.99778' TARGET="_blank"> La carte OpenStreetMap pour Centre Denis Papin et CMCF<br>
	    <img class=home src="images/carte.jpg"></a> </div>
</div>
  <h1>Vous souhaitez devenir membre de notre association?</h1>
  
  
  <p>Si vous souhaitez joindre notre association, merci de cliquer sur l'image à gauche pour une version pdf ou veuillez remplir le 
  	<a href="images/cmcfadhere.jpg" download="cmcfadhere.jpg">formulaire d'adh&eacute;sion en jpg</a>
  	et l'envoyer avec votre versement &agrave; l'adresse ci-dessous. </p>
  	<p>Si vous avez des difficultés à télécharger, essayez <a href="images/cmcfadhere2023.zip">ceci</a>.</p
  	
  <h1>Vous d&eacute;sirez avoir plus de renseignements? </h1>
  <h2>Contactez nous !</h2>
  <p>Centre Denis Papin<br> rue Emile Zola <br> 62590 OIGNIES</p>
  <p>T&eacute;l&eacute;phone : 0321694204<br>
    <br>
    Des remarques ou des suggestions pour le site, n'h&eacute;sitez 
    pas &agrave; contacter le webmaster (en Francais ou en Anglais) : webmaster@cmcf-oignies.com <br>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
