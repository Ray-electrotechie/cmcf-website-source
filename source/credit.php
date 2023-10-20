#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>

  <h1>Credits</h1>
  <p>L'ensemble 
  des photos et vid&eacute;os sur ce site appartiennent &agrave; l'Association 
  et sont prot&eacute;g&eacute;es. Elles ne peuvent en aucun cas &ecirc;tre utilis&eacute;es 
  sans l'accord de l'Association.</p>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
