#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>
  <h1 class=rightheader>Some projects of CMCF Oignies</h1>
  <p>There are many projects on the go at any one time at CMCF Oignies. Below we illustrate two of our largest and most ambitious projects.</p>
  <hr class=allbelow> <hr/>
  <div  style="float:left">
    <img src="images/ludlow%20231C.JPG" height="250" alt="Super Pacific" name="Superpacific" style="float: left; margin-right: 30px"> 
    <h2>Restauring the "Super Pacific".</h2>                                                                                              
    <p>CMCF hosts the "Super Pacific du Nord" 3.1280 (which became 231C78 at the creation of SNCF), the locomotive which, in 1938, pulled the train in which the British sovreign visited Paris in a visit cementing the "Entente Cordiale".
    Allocated to CMCF by SNCF, once restaured it will be put in it's orignial livery, that is to say, the colour of chocolate. It is intended to make the locomotive operational and capable of heading a rake of carriages exclusively from the "Nord" company.</p>                                                                                                          
    <p><a href="pacific.htm" class="lien">Click here to know more (in French)</a> </p>                                             
    <hr class=allbelow> <hr/>
  </div>
  <div  style="float:right">                                                                                                                        
    <img src="images/DSCN1977.JPG" height="250" alt="machine d'extraction" name="machineextraction" style="float: right; margin-left: 30px"> 
    <h2>Making the winding engine turn</h2>                                                                                                                       
    <p>The building which houses CMCF Oignies was built around the steam powered winding engine constructed in 1939. It is being restored (albeit slowly) by members of CMCF with the intention of demonstrating it turning using an electric motor.
    	</p>
    <a href="machinedextraction.htm" class="lien">Click here to learn more (in French)</a>
    <hr class=allbelow> <hr/>                                                                                     
  </div>
<!--  <div  style="float:right">                                                                                                                        
    <img src="images/draisine.jpg" height="250" alt="gare" name="gare" style="float: right; margin-left: 30px"> 
    <h2>Création d'une gare à 6 voies et 2 quais</h2>                                                                                                                       
    <p>Les locomotives ainsi que tout le parc des voitures voyageurs seront mis en
valeur dans une véritable gare terminus avec ses voies à quai et son dépôt.
Pour cela, l'association n'a pas hésité une seconde quand la SNCF lui a proposé
de sauvegarder la plaque tournante du dépôt de la Plaine Saint-Denis. </p>
    <a href="gare.htm" class="lien">Cliquez ici pour en savoir plus</a>
    <hr class=allbelow> <hr/>                                                                                     
  </div> -->
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
