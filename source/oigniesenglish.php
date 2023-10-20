#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>

  <h1 class=rightheader>The Town of Oignies</h1>
  <p>The town of Oignies has an excellent <a href="http://www.oignies.fr/" TARGET="_blank">Web site</a> where you will find
    a great deal of information on the town (in French).
    If you look at <a href='http://maps.google.co.uk/maps?f=q&hl=en&geocode=&q=rue+emile+zola,+Oignies,+france&sll=53.800651,-4.064941&sspn=13.313739,39.550781&ie=UTF8&ll=50.472416,2.997766&spn=0.001748,0.004828&t=h&z=18' TARGET="_blank">
    	google maps and satellite images </a>, you will see "Centre Denis Papin" (the large red-roofed building) between Rue Emile Zola and Avenue des Sports.
    	It is also possible to see the standard gauge railway lines entering the club site.</p>
  <p>There is also a good entry for Oignies in <a href="http://en.wikipedia.org/wiki/Oignies" TARGET="_blank">Wikipedia</a> </p>
   <hr/>                                            
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
