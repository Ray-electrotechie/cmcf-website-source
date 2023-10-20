#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
  <h1 class=rightheader>Les activit&eacute;s au sein de l'Association</h1>
  <p>Les activit&eacute;s au sein de l'Association comprennent trois sections : &quot;les 
     petites &eacute;chelles&quot;, &quot;la vapeur vive&quot; et &quot;la voie normale&quot;. </p>
  <hr class=allbelow> <hr/>
  <div  style="float:left">
    <img src="images/rotonde.JPG" width="212" height="156" alt="Rotonde" name="Petitechelles" style="float: left; margin-right: 30px"> 
    <h2>Les  petites &eacute;chelles</h2>                                                                                              
    <p>La  section des petites &eacute;chelles a pour objet de reproduire sous forme de                                                
    maquettes et de modèles réduits des réseaux et des machines ferroviaires à cinq                                                    
    échelles différentes.</p>                                                                                                          
    <p><a href="petitesechelles.htm" class="lien">Cliquez ici pour en savoir plus</a> </p>                                             
    <hr class=allbelow> <hr/>
  </div>
  <div  style="float:right">                                                                                                                        
    <img src="images/Oignies%20002.jpg" width="192" height="249" alt="locomotive à la vapeur" name="5/7" style="float: right; margin-left: 30px"> 
    <h2>La Vapeur Vive</h2>                                                                                                                       
    <p>La section &quot;vapeur vive&quot;  reproduit aux &eacute;chelles                                                                          
    allant du 1/11e au 1/3e, des locomotives à la vapeur (eau et charbon) et des                                                                  
    locomotives élecriques. Ces machines qui peuvent circuler sur voie de 5&quot;                                                                 
    (127 mm) ou 7&quot;1/4 (184 mm), sont construitespar les membres de l'Association                                                             
    au sein d'un atelier qui leur est tout particuli&egrave;rement r&eacute;serv&eacute;. </p>
    <a href="vapeurvive.htm" class="lien">Cliquez ici pour en savoir plus</a>
    <hr class=allbelow> <hr/>                                                                                     
  </div>
  <div  style="float:left">
    <img src="images/BB16506ETBB12068LDCT17.11.06.JPG-6-.jpg" width="212" height="156" alt="BB16506 et BB12068" name="locomotives" style="float: left; margin-right: 30px">
    <h2>La voie normale</h2>
    <p>L’objectif de cette section est avant tout la conservation du patrimoine ferroviaire de 
  la région Nord à taille réelle. La SNCF, mais également des particuliers, confient 
  régulièrement au CMCF la rénovation et la préservation de machines telle que 
  la Pacific, train royal en 1938. 
    <a href="voienormale.htm" class="lien">Cliquez ici pour en savoir plus </a>
    <hr class=allbelow> <hr/>
  </div>

  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
