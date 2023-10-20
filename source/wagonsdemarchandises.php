#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
  <h1 class=rightheader>La voie normale/ les wagons de marchandises</h1>
  <p>Voici les wagons de marchandises que le Centre poss&egrave;de.</p>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
