#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>

  <h1 class=rightheader>La Ville de Oignies</h1>
<p>La ville d'Oignies est propriétaire du "Centre Denis Papin" dans lequel se trouve CMCF. En savoir plus sur le centre <a href="https://www.oignies.fr/pages/Centre-Denis-Papin/" TARGET="_blank">ici</a>.</p>
<p>La ville de OIGNIES a un excellent <a href="https://www.oignies.fr/" TARGET="_blank">site Web </a>où vous trouverez tout au sujet de la ville et de son histoire.</p>
<p> Si vous regardez <a href='http://maps.google.fr/maps?f=q&hl=en&geocode=&ie=UTF8&g=oignies&layer=x&t=h&ll=50.472771,2.997948&spn=0.00127,0.004056&z=18' TARGET="_blank">les images de carte et de satellite de google </a>, vous verrez le CENTRE DENIS PAPIN (le grand bâtiment avec la toiture rouge) entre la Rue Emile Zola et l'Avenue des Sports.</p>
<p>Il est possible, également, de voir les lignes ferroviaires de mesure standard qui entrent dans notre emplacement.</p>
<p>Il y a un bon résumé de l'histoire d'OIGNIES sur <a href=" http://fr.wikipedia.org/wiki/Oignies_(Pas-de-Calais)" TARGET="_blank">Wikipedia</a> </p>
   <hr/>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
