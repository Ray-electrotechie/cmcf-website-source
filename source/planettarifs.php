#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>

  <h1>Accueil du public</h1>                                                  
  <p>Le Centre est ouvert de Avril &agrave;  Octobre le 2e dimanche du  mois. Voir <a href='agenda.htm'> notre agenda</a></p>
  <p>L'accès au parc autour du Centre Denis Papin se fait par un wagon postal qui est équipé de rampes pour personnes à mobilité réduite.
     L'accès au Centre Denis Papin lui-même est au rez-de-chaussée du bâtiment et ne comporte aucune marche.
     Un ascenseur permet l'accès aux étages supérieurs.</p>
  <img src="images/plan.gif"; width="313"; height="538"; alt="Carte pour Centre Denis Papin" name="Map" style="float: left; margin-right: 30px">
  <h3>Arrivée par voiture</h3>
  <p>Il y a un grand parking pr&egrave;s du Centre Denis Papin.
  Voir <a href='http://maps.google.fr/maps?f=q&hl=en&geocode=&ie=UTF8&g=oignies&layer=x&t=h&ll=50.472771,2.997948&spn=0.00127,0.004056&z=18' TARGET="_blank"> Google maps</a> pour plus de détail. Notre adresse : <Q>Rue Emile Zola - 62590 OIGNIES, France</Q></p>
  <h3>Arrivée par Train </h3>
  <p>Oignies ne possède pas de gare à son nom, la plus proche est celle de
    <A title="Gare de Libercourt" href="http://fr.wikipedia.org/wiki/Gare_de_Libercourt">Libercourt</A> qui est desservie par le <A title="TER Nord-Pas-de-Calais" href="http://fr.wikipedia.org/wiki/TER_Nord-Pas-de-Calais">TER Nord-Pas-de-Calais</A> et qui donne sur <A title=Lille href="http://fr.wikipedia.org/wiki/Lille">Lille</A>, ><A title="Lens (Pas-de-Calais)" href="http://fr.wikipedia.org/wiki/Lens_(Pas-de-Calais)">Lens</A> et <A title=Douai
   href="http://fr.wikipedia.org/wiki/Douai">Douai</A>.
  <ul>
  <li> De la gare de Lille Flandres direction Libercourt : un voyage direct de 20 minutes</li>
  <li> Ensuite, c'est <a href="http://maps.google.co.uk/maps?f=d&saddr=50.480125,3.00858&daddr=D46%2FRue+Emile+Zola&hl=en&geocode=%3BFSsmAgMdeMItAA&mra=dme&mrcr=0&mrsp=0&sz=18&dirflg=w&sll=50.479616,3.008097&sspn=0.001748,0.004828&ie=UTF8&t=h&z=18">une promenade de 15 minutes de la gare de Libercourt,</a> au centre Denis Papin. Rue Emile Zola - 62590 OIGNIES
  </ul>
  <h2>Les Tarifs pour cette anne&eacute; sont :</h2> 
  <ol>
    <li>Adulte : 5&euro;</li>
    <li>Enfant accompagn&eacute; entre 6 et 16 ans : 2,5&euro;</li>
    <li>Enfant accompagn&eacute; de moins de 6 ans : GRATUIT</li>
    <li>Visites de groupes constitu&eacute;s tous les jours sur rendez-vous (minimum 20 personnes) : 4&euro; par personne (enfants 0-16  ans 2&euro;)</li>
    <li>La visite guid&eacute;e dure environ 2 heures. </li>
    <li>Pour prendre un rendez-vous : contactez 03 21 69 42 04 <a href="https://www.oignies.fr/pages/Centre-Denis-Papin"> Voir CMCF dans Centre Denis Papin</a></li>
  </ol>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>
