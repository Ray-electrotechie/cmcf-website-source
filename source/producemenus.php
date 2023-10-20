<?php
$foot = array(0=>"<div class=footer>"); /*array to contain footnotes. Use $foot[]= to add to end.*/
$footnumber = 0; /*increment before adding footnote and use for ref if wished*/
function footer()
{ global $lang; global $foot;
	if ($lang == "fr")
	{
		setlocale(LC_TIME, "fr_FR.utf8");
    $foot[]= '<p class=copyright>&copy; CMCF OIGNIES'.htmlentities(strftime(" %X %e %B, %Y "), ENT_SUBSTITUTE, "UTF-8").'- <a href="oigniesfrench.htm">Oignies</a> bouge la vie</p>';
  } else
  { 
    setlocale(LC_TIME, "en_GB.utf8");
    $foot[]= '<p class=copyright>&copy; CMCF OIGNIES'.htmlentities(strftime(" %X %e %B, %Y "), ENT_SUBSTITUTE, "UTF-8").'- <a href="oigniesenglish.htm">Oignies</a> bouge la vie</p>';
  };
  foreach($foot as $val)
  {
    print "\n$val";
  } print "\n</div>\n";
};
/*If a file defines the variable calendar button then a call to */
if (isset($calendarbutton)) {$insertcalscript = "\r\n<script src=\"https://cdn.jsdelivr.net/npm/add-to-calendar-button@2\" async defer></script>";} else {$insertcalscript = "\r\nfred";}
/* must enter with $thisfilnam being set to the name of the file corresponding to the menus*/
$tabspaces = 4;
$basepadding = 2; /* how many spaces to tab out on ALL the menu items (pretty print only)*/
$opendates = array(array('2023-10-09',1,'normal','14:00','18:00'),
                   array('2024-04-13',2,'spring','10:00','18:00'),
                   array('2024-05-05',1,'normal','14:00','18:00'),
                   array('2024-06-09',1,'normal','14:00','18:00'),
                   array('2024-07-14',1,'normal','14:00','18:00'),
                   array('2024-08-31',2,'summer','10:00','18:00'),
                   array('2024-09-21',2,'heritage','10:00','18:00'),
                   array('2024-10-13',1,'normal','14:00','18:00')
                  );
/* Menu structure
          index is internal name - must be unique and in order of menus
                  the first three items of array are the levels of submenu 0 is topmost.
                  then  the human label in French
                  then the file name for french
                  then the human label for English
                  then the file name for english
                  one null filename is permitted, the other will be used.
                  never repeat filenames*/
$menus = array( 
               'welcome' => array(1, 0 , 0, "Accueil","accueil.htm", "Welcome","welcome.htm"),
               'activities' => array(2, 0 , 0, "Les activit&eacute;s","activites.htm", "Activities",NULL),
                     'petitesechelles' => array(2, 1 , 0, "Les petites &eacute;chelles","petitesechelles.htm", "Small scale",NULL),
                     'vapeurvive' => array(2, 2 , 0, "La Vapeur Vive","vapeurvive.htm", "Live Steam",NULL),
                     'voienormale' => array(2, 3 , 0, "La Voie Normale","voienormale.htm", "Main Line",NULL),
                          'electrique' => array(2, 3 , 1, "&Eacute;lectrique","locoelectrique.htm", "Electric",NULL),
                          'diesel' => array(2, 3 , 2, "Diesel","locodiesel.htm", "Diesels",NULL),
                          'vapeur' => array(2, 3 , 3, "Vapeur","locoavapeur.htm", "Steam",NULL),
                          'voiture' => array(2, 3 , 4, "Voitures voyageur","voituresvoyageurs.htm", "Carriages",NULL),
                          'wagons' => array(2, 3 , 5, "Wagons","wagonsdemarchandises.htm", "wagons",NULL),
                    'projects' => array(3, 0 , 0, "Projets","projets.htm","Projects","projects.htm"),
                    'pacific' => array(3, 1 , 0, "La Super Pacific","pacific.htm", "Super Pacific",NULL),
                    'machinedextraction' => array(3, 2 , 0, "Machine d'extraction","machinedextraction.htm", "Winding machine",NULL),
/*                    'gare' => array(3, 3 , 0, "Gare a quai","gare.htm", "Station platform",NULL), */
               'diary' => array(4, 0 , 0, "Agenda","agenda.htm","Diary","agenda_english.htm"),
                   'festival23' => array(4, 1 , 0, "Festival 2023","festival2023francais.htm","Festival 2023","festival2023en.htm"),
                   'festival12' => array(4, 2 , 0, "Festival 2012","festival2012fr.htm","Festival 2012","festival2012en.htm"),
                    'festival11' => array(4, 3 , 0, "Festival 2011","festival2011francais.htm","Festival 2011","festival2011english.htm"),
                    'festival09' => array(4, 4 , 0, "Festival 2009","festival2009francais.htm","Festival 2009","festival2009english.htm"),
/*                      'festivals1' => array(4, 3 , 1, "Festival 2009","festival2009francais.htm","Festival 2009","festival2009english.htm"),
                        'festivals2' => array(4, 3 , 2, "Festival 2009","festival2009francais.htm","Festival 2009","festival2009english.htm"), */
/*                  'festival23' => array(4, 4 , 0, "Festival 2023","festival2023francais.htm","Festival 2023","festival2023en.htm"), */
               'news' => array(5, 0 , 0, "News","news.htm","News",NULL),
               'links' => array(6, 0 , 0, "Liens","lien.htm","Links",NULL),
               'infos' => array(7, 0 , 0, "Informations practiques","infos.htm","Where & who are we?","infos_english.htm"),
                     'plan' => array(7, 1 , 0, "Plan et Tarifs","planettarifs.htm","Visit Us","planandprices.htm"),
                     'association' => array(7, 2 , 0, "L'Association","bureauetmembres.htm","The Association",NULL),
                     'oignies' => array(7, 3 , 0, "Ville de Oignies","oigniesfrench.htm","The town Oignies","oigniesenglish.htm"),      
                     'contact' => array(7, 4 , 0, "Contactez-nous!","contacteznous.htm","Contact Us",NULL),
                     'credit' => array(7, 5 , 0, "Credits","credit.htm","Credits",NULL),
/*               'heritage' => array(8, 0 , 0, "Patrimoine",NULL,"Heritage","heritage.htm"), 
               'cheminots' => array(8, 1 , 0, "Vie des Cheminots","cheminots.htm","Life of Railwaymen","railwaymen.htm"), 
               'reseau' => array(8, 2 , 0, "Le Reseau","reseau.htm","The Network","network.htm") */
               
             );
$exact = true;
//We are given the filename which must be unique so look up the menu entry we are doing and the language.
foreach($menus as $pageid=>$logicalpage)
   { $entry=array_search($thisfilnam,$logicalpage,$exact); //Look for the filename given in the menu array but make it exact.
     $lang = ($entry == 4 ) ? "fr" : (($entry == 6) ? "en" : null);
     if ($lang != null) break;
   }
if ($lang == null) exit("Filename not recognised\n");
if ($lang == "en") {$title = $menus[$pageid][5];} else {$title = $menus[$pageid][3];}
if ($lang == "en")
  { $summary = ++$footnumber;
  	$foot[]= '  <p class=footnote>
    <sup>[<a name="foot.id'.$summary.'" href="#id'.$summary.'">'.$summary.'</a>]</sup>
       Pages shown <img class="flag" src="images/uk1.png" alt="English"> have an English summary
  </p>';
  };
?>
<!-- 
*
*
*This file is generated using producemenus.php DO NOT EDIT. 
*
*
*-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YMP9SB62DY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YMP9SB62DY');
</script>

<?php echo '  <title>'.'CMCF '.$title."</title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=iso-8859-1\">
  <link rel=\"stylesheet\" href=\"cmcfstyle.css\">
  <link rel=\"stylesheet\" href=\"./assets/css/atcb.min.css\">
  <link rel=\"shortcut icon\" href=\"http://www.cmcf-oignies.fr/images/favicon.ico\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"zoomwall.css\" />".$insertcalscript."
</head>
<body>
<div id=\"fb-root\"></div>
<script>(function(d, s, id) { //script to load the javascript sdk from Facebook.
  var js, fjs = d.getElementsByTagName(s)[0]; // look for the first script.
  if (d.getElementById(id)) return; //if facebook-jssdk exists, hop it.
  js = d.createElement(s); js.id = id; //create an element and name it facebook-jssdk
  js.src = \"//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4\"; //get the source of the script
  fjs.parentNode.insertBefore(js, fjs); //and shove it before the first script.
}(document, 'script', 'facebook-jssdk'));</script>
 <div id=masthead>
   <div id=cmcflogo>
      <a href=\"index.html\"><img class=home src=\"images/cmcf_logo1.png\" alt=\"cmcf logo\"></a>
   </div>" ;
// Next see if there is an alternative to this page in the other language
if ($lang == "en")
   { echo '
   	<div class=maintitle>
   <p class="center entrytitle-english">Welcome to the Railway and Mining Museum of <a href="oigniesenglish.htm">Oignies</a>
 </div>';
   
   $langchoice = "<a href=\"accueil.htm\">Consultez les pages fran&ccedil;aises</a>\n"; // give an escape to the other language set.
     if ($menus[$pageid][4]!=null) {$langchoice = "<a href=\"".$menus[$pageid][4]." \">Cette page en <img class=\"flag\" src= \"images/fr1.png\" alt=\"French\" ></a>";}
   } else 
   { echo '
 	   <div class=maintitle>
       <p class="center entrytitle">Bienvenue au Centre de la Mine <br> et du Chemin de Fer de <a href="oigniesfrench.htm">Oignies</a>
     </div><!--maintitle -->';
   	
   	
   	$langchoice = "<a href=\"welcome.htm\">English pages<img class=\"flag\" src= \"images/uk1.png\" alt=\"Anglais\"></a>\n";
     if ($menus[$pageid][6]!=null) {$langchoice = "<a href=\"".$menus[$pageid][6]." \">This page in <img class=\"flag\" src= \"images/uk1.png\" alt=\"Anglais\"></a>";}
   }
   echo "
   <div class=cmcfacebook>
     <div class=\"fb-page\" data-href=\"https://www.facebook.com/c.m.c.f.oignies\" data-tabs=\"timeline\" data-width=\"252\" data-height=\"150\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\">
     	 <div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"https://www.facebook.com/c.m.c.f.oignies\"><a href=\"https://www.facebook.com/c.m.c.f.oignies\">CMCF Oignies,Centre de la Mine et du Chemin de Fer.</a></blockquote>
     	 </div>
     </div>
  </div>
</div><!-- masthead -->
<hr class=allbelow>
<!-- Add class=off to turn make images invisible -->
<div class=mainbody>
  <div class=selector>
    <ul class=menu1>";
$top = $menus[$pageid][0];
$mid = $menus[$pageid][1];
$bot = $menus[$pageid][2];
$tablevel = 0; /* this variable counts how far in the current file is tabbed. May or may not correspond to the needs of the current menu item in the loop.*/

 foreach($menus as $val)
    {   $text = NULL;//the text to use for the current menu entry.
        $filnam = null; //The filename to trigger for the current menu entry.
        $flag = NULL; //the string containing the flag name to use with each menu entry on English pages.
        if ($lang == "fr")
        {$text = $val[3];
        $filnam = $val[4];
        $flag="fr";
        if ($filnam == NULL) { $filnam = $val[6]; $flag="en"; }
        }elseif ($lang == "en")
         {$text = $val[5];
         $filnam = $val[6];
         $flag="en";
          if ($filnam == NULL) { $filnam = $val[4]; $flag = "fr"; }
         } else {exit("Language not recognised");}
$doingmyselftop = ($top == $val[0]);
$doingmyselfmid = ($mid == $val[1] & $doingmyselftop);
$doingmyselfbot = ($bot == $val[2] & $doingmyselfmid );
$midhighlevel = ($val[1] == 0);
$bothighlevel =($val[2] == 0);
$notindented = $val[1] == 0 & $val[2] == 0;
$firstindent = $val[1] != 0 & $val[2] == 0;
$secondindent = $val[1] != 0 & $val[2] != 0;
$indentlevel = $notindented ? 0 : ($firstindent ? 1:2);
/*use smaller wheels for indented menus*/
$wheel = $notindented ? "roue2.png" : ($firstindent ? "roue3.png" : "roue4.png");

/* remove the wheel if the menu item is the page being produced*/
$visible = "";
if ($doingmyselftop)
     { /* Must be outputting the same top level or do not remove wheel */
      if (($midhighlevel & $bothighlevel) or ($doingmyselfmid & $bothighlevel ) or ($doingmyselfmid & $doingmyselfbot ) ){ $visible = "class=off";}
     }

If ($notindented or ($firstindent & $doingmyselftop) or ($secondindent & $doingmyselfmid))
     {

       $indent = str_pad("", $basepadding+($tabspaces*$indentlevel));
/*before outputting the li must ensure that the tab level is correct.
     if in tab2 and need !tab2 then put out backout to tab1.
     if in tab1 and need !tab1 then  if need tab 3 then go there else back out.
*/
      if ($tablevel == 2 & !$secondindent)
           { echo str_pad("", $tabspaces*($tablevel+$basepadding))."</ul>\n"; $tablevel -= 1;
           }
      if ($tablevel == 1 & !$firstindent )
           { if ($secondindent)
                 { echo "$indent<ul class=menu3>\n"; $tablevel += 1;
                 } else
                 {  echo str_pad("", $tabspaces*$tablevel+$basepadding)."</ul>\n"; $tablevel -= 1;
                 }
           }
     if ($tablevel == 0 & !$notindented )
           { echo "$indent<ul class=menu2>\n"; $tablevel = 1;
           }
         /* now put out the menu item with flags if appropriate*/
         if ($flag == "en") { $flagpic = '<img class="flag" src= "images/uk1.png" alt="English" >'; }
        /* if ($flag == "fr") { $flagpic = '"images/fr1.png" alt="French"'; }*/
         if ($flag == "fr") { $flagpic = '<img class="flag" src= "images/fr1.png" alt="french" >'; }
         if ($lang == "fr") {$flagpic = null;} /* do not put out flag in case of french pages*/
         echo "$indent<li><a href=\"$filnam\" ><img $visible src=\"images/$wheel\" alt=\"*\" >$text $flagpic </a></li>\n"; 
         
      }
} /* next leave the html in a good state and backout all <ul> */
      for ($loopcount = $tablevel; $loopcount > 0; $loopcount -=1)
           { echo str_pad("",$basepadding + $tabspaces*$tablevel)."</ul>\n"; $tablevel -= 1;
           }
?>
    </ul>

   <div id=credits>
 <?php 
    echo "$langchoice\n";
 ?>
      <br>
      <br>
          <a href="credit.htm">Credits</a>
   </div>
  </div>