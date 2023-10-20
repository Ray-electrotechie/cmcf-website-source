#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
  <!-- Rightbody is the container the interesting content to the right of the selector. -->
  <p class=rightheader>Welcome to CMCF</p>
<?php /*create a new footnote*/
  $assoc = ++$footnumber; /*get a new footnote number for this page and remember it, then use it below.*/
	$foot[]= '  <p class=footnote>
	   <sup>[<a name="foot.id'.$assoc.'" href="#id'.$assoc.'">'.$assoc.'</a>]</sup>
  Association formed under the law of July 1901 which defines right and responsibilities of members
  and protects them from liabilities beyond their membership dues</p>';
?>                                                 
  <p class="texte">"CMCF Oignies" is an association<sup>[<a name="id<?php echo $assoc;?>" href="#foot.id<?php echo $assoc;?>"><?php echo $assoc;?></a>]</sup>                
   dedicated to the preservation of                                                                                   
  	the heritage of the railway company "Compagnie du Nord" which subsequently                            
  	became "SNCF région Nord". Active since 1993, there are numerous activities                           
  	and projects which you can discover on this site.                                                     
  </p>                                                                                                                
  <img src="images/P1050576.jpg" alt="Centre Denis Papin" name="Centre" style="float: right; margin-left: 30px">      
  <p class="texte"> Although the association is entirely French-language based<sup>[<a name="id<?php echo $summary;?>" href="#foot.id<?php echo $summary;?>"><?php echo $summary;?></a>]</sup>,                                       
  	there is much here to interest a railway and steam enthusiast speaking any language.                  
  	At our annual <a href="agenda_english.htm">festival</a> you will                                        
  	certainly find someone to show you around                                                             
  	the site and explain our on-going projects in English.                                                
  	Riding on the narrow gauge steam trains does not require explanations!                                
  </p>                                                                                                                
  <p class="texte">CMCF is based at the "Centre Denis Papin" (site photo on the right),                               
  	originally pit-head number 2 of a huge coal mine at                                                   
  	<a href="oigniesenglish.htm">Oignies</a> (pronounced                                              
  	wannee), a small town near Lille in France.                                                          
  	Our building, which is an historic monument,                                                          
  	retains the huge winding engines of the now-defunct mine as well as our workshops,                    
  	model rail layouts and narrow gauge railways. The grounds of the site are extensive                   
  	with room for our extensive narrow gauge layout as well as full size locomotives.                     
  	The site is connected to the French National railway network.                                         
  </p>                                                                                                                
  <p class="texte">                                                                                                   
  	We share these facilities with two other clubs, "Friends of the mine" who                             
  	have constructed a simulated mine and "Assocation of Postal Rail Carriages"                           
  	(approximate English translations of course) who preserve (for example)                               
  	the wagons used as rolling postal sorting offices. The attractions of both of                         
  	these clubs are accessible to you during the annual <a href=agenda_english.htm>festival of steam</a>.                                            
  </p>                                                                                                                
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
<?php	footer(); ?>
</body>
</html>
