#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
$calendarbutton = '';
include 'producemenus.php';
?>
  <div class=rightbody>
    <h1 class=rightheader>Events at the &ldquo;Centre de Denis Papin&rdquo; of Oignies</h1>
<!--    <h2>We are open in 2023 on the following days 14:00 to 18:00</h2>                                     
    <div>
      <table class="calendar" id="the-event-info">
      <tr>
         <td COLSPAN="5"><span class="summary emphasis">CMCF Open Days 2023 </span><br>
           <span class="location"><a href=planandprices.htm>CMCF is in the town of Oignies  </a>close to Lille, France</span>,
           <br> and is <span  class="description">open one Sunday in each month May, June, July and October</span>
         </td>
      </tr>
      <tr>
        <td>May</td><td>June</td><td>July</td><td>September</td><td>October</td>
      </tr>
      <tr>
<!--       <td class="vevent"> <abbr class="dtend" title="2023-04-09T180000"><abbr class="dtstart" title="2023-04-09T140000">9th</abbr></abbr><a class="include" href="#the-event-info"></a></td>
       <td class="vevent"> <abbr class="dtend" title="2023-05-07T180000"><abbr class="dtstart" title="2023-05-07T140000">7th</abbr></abbr><a class="include" href="#the-event-info"></a></td>
       <td class="vevent"> <abbr class="dtend" title="2023-06-11T180000"><abbr class="dtstart" title="2023-06-11T140000">11th</abbr></abbr><a class="include" href="#the-event-info"></a></td>
       <td class="vevent"> <abbr class="dtend" title="2023-07-09T180000"><abbr class="dtstart" title="2023-07-09T140000">9th</abbr></abbr><a class="include" href="#the-event-info"></a></td>
<!--       <td class="vevent"> <abbr class="dtend" title="2023-08-13T180000"><abbr class="dtstart" title="2023-08-13T140000">13th</abbr></abbr><a class="include" href="#the-event-info"></a></td>
       <td class="vevent"> <abbr class="dtend" title="2023-09-10T180000"><abbr class="dtstart" title="2023-09-10T140000">16,17 10-18hrs</abbr></abbr><a class="include" href="#the-event-info"></a></td>
       <td class="vevent"> <abbr class="dtend" title="2023-10-08T180000"><abbr class="dtstart" title="2023-10-08T140000">8th</abbr></abbr><a class="include" href="#the-event-info"></a></td>
      </tr>
      </table>
      <p>In addition to the CMCF facilities (the building containing the winding engine, workshops and miniature railways;
      the workshop where the full sized Pacific is being restored and the ride-on steam trains), the mine museum and the SNCF postal carriage museums are also open.</p>
      <p><a href=planandprices.htm>Here </a> you will find the details of where we are located and the entry price for normal open days.</p>
      <hr class=allbelow> <hr/>
    </div> <!-- table of dates -->
<!--    <h2> Unfortunately you are too late for our 2022 festival. Our next public open day is 9th April 2023.</h2>-->
         
         
         
        <p>Lors de chaque journ&eacute;e portes ouvertes du Centre Denis Papin, les attractions suivantes seront propos&eacute;es (avec des attractions suppl&eacute;mentaires pendant les Festivals) :</p>
        <div class="description">
          <ul>
            <li>Des locomotives &agrave; vapeur et &eacute;lectriques sur un circuit de 700 m en &eacute;cartement 5&Prime; et 7&frac14;&Prime; offrant des trajets gratuits pour les adultes et les enfants.</li>
            <li>Des pr&eacute;sentations des activit&eacute;s des clubs et des collections historiques du CMCF seront propos&eacute;es tout au long de la journ&eacute;e les deux jours.         </li>
            <li>De grands r&eacute;seaux ferroviaires de diff&eacute;rents petits &eacute;cartements seront en exploitation.                                                              </li>
            <li>L'acc&egrave;s aux ateliers de restauration de la locomotive &agrave; vapeur Pacific de la SNCF sera ouvert &agrave; tous les visiteurs.                                  </li>
            <li>Six wagons postaux abritant le mus&eacute;e consacr&eacute; &agrave; l'histoire des bureaux de tri ambulants.                                                             </li>
            <li>Un mus&eacute;e de la mine dans l'ancienne &eacute;cole de formation des mineurs.                                                                                  </li>
          </ul>
         
   <?php
   $day = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi");
   $month = array("none","janvier", "f&eacute;vrier", "mars", "avril", "mai", "juin", "juillet", "ao&ucirc;t", "septembre", "octobre", "novembre", "d&eacute;cembre"); 
   echo "\r\n";
   $timeofcalc=date_create("now");
   $first = true;
   foreach ($opendates as $eventdate)
     {
       $firstday=date_create($eventdate[0]);
       $diff=date_diff($timeofcalc,$firstday);
       $secondday = clone $firstday;                #This is a deep copy of all attributes of firstday.
       $secondday->modify('+1 day');                #Then get the following day
       $firstdayday = $day[$firstday->format('w')];
       $firstdaynum = $firstday->format('j');
       $firstdaymon = $month[$firstday->format('n')];
       $firstdayyear = $firstday->format('Y');
       $seconddayday = $day[$secondday->format('w')];
       $seconddaynum = $secondday->format('j');
       $seconddaymon = $month[$secondday->format('n')];
       $seconddayyear = $secondday->format('Y');
       $days = $diff->format("%a days ");
       if ($firstday > $timeofcalc)
          { /*echo($eventdate[0]." which is a ".$days."future event \r\n");*/
          # Set up button text and diary
          switch ($eventdate[2])
             {
              case "normal":
                $button_text = 'Ajoutez la journ&eacute;e portes ouvertes du CMCF &agrave; votre agenda';
                $button_subject = 'Visite : journ&eacute;e portes ouvertes CMCF';
                break;
              case "spring":
                $button_text = 'Ajoutez la f&ecirc;te du printemps du CMCF &agrave; votre agenda';
                $button_subject = 'Visite : F&ecirc;te du printemps du CMCF';
                break;
              case "summer":
                $button_text = "Ajoutez le festival d'&eacute;t&eacute; du CMCF &agrave; votre agenda";
                $button_subject = "Visite : Festival d'&eacute;t&eacute; du CMCF";
                $more_info=<<<EOD1
      <div>
            <img src="images/CMCF_Festival{$firstdayyear}_miniature.jpg" width="30%" onClick="parent.location='images/CMCF_Festival{$firstdayyear}.jpg'" alt="Festival {$firstdayyear}" style="float: left; margin-right: 30px">
            
            <h2>Cliquez sur l'image pour voir une version agrandie.</h2>
            
          <hr class=allbelow>   
        </div>
EOD1;
                break;
              case "heritage":
                $button_text = 'Ajoutez les journ&eacute;es du patrimoine CMCF &agrave; votre agenda';
                $button_subject = 'Le CMCF est ouvert pour les Journ&eacute;es du Patrimoine';
                break;
              case "specialevent":
                $button_text = 'Ajoutez le Sortez du train-train &agrave; votre agenda';
                $button_subject = 'Le CMCF est ouvert pour Le Sortez du train-train';
                $more_info=<<<EOD2
<!--      <div style="float:left"> for some reason this screws up all button or image clickons -->
      <div>
            <img src="images/sortez_train_train_fiche_mini.jpg" width="30%" onClick="parent.location='images/sortez_train_train_fiche_a4.jpg'" alt="Sortez du train-train" style="float: left; margin-right: 30px">
            <h2>CMCF contribue &agrave; un &eacute;v&eacute;nement sp&eacute;cial "Sortez du train-train". <a href="images/sortez du train-train_flyer.pdf">T&eacute;l&eacute;chargez la brochure compl&egrave;te</a> au format PDF pour en savoir plus sur l'&eacute;v&eacute;nement d'une journ&eacute;e. </h2>
            <h2>Cliquez sur n'importe quelle image pour voir une version agrandie.</h2>
            <br><img src="images/train-train01_mini.jpg" width="25%" onClick="parent.location='images/sortez_du_train-train_flyer1.jpg'" alt="Sortez du train-train flyer p1" style="float: left; margin-right: 30px">
                <img src="images/train-train02_mini.jpg" width="25%" onClick="parent.location='images/sortez_du_train-train_flyer2.jpg'" alt="Sortez du train-train flyer p2" style="float: left; margin-right: 30px">
          <hr class=allbelow>   
        </div>
<!--      </div> -->
EOD2;
             }
          if ($first) 
               {
                echo "<h1>Notre prochaine journ&eacute;e portes ouvertes aura ";
                $close_heading = "</h1>\r\n";
                switch ($eventdate[2])
                 {
                  case "normal":
                    $opening_type = " notre ouverture normale ";
                    break;
                  case "spring":
                    $opening_type = " notre festival de printemps ";
                    break;
                  case "summer":
                    $opening_type = " notre festival annuel";
                    break;
                  case "heritage":
                    $opening_type = " pour les journ&eacute;es du patrimoine";
                    break;
                  case "specialevent":
                    $opening_type = " le Sortez du train-train";
                 }
               } else 
               {
                $close_heading = "</h2>\r\n";
                switch ($eventdate[2])
                 {
                  case "normal":
                    $opening_type = "<h2> Ouverture l'apr&egrave;s-midi:";
                    break;
                  case "spring":
                    $opening_type = "<h2> Festival de printemps:";
                    break;
                  case "summer":
                    $opening_type = "<h2> Festival d'&eacute;t&eacute; annuel: ";
                    break;
                  case "heritage":
                    $opening_type = "<h2> Les journ&eacute;es du patrimoine:";
                    break;
                  case "specialevent":
                    $opening_type = " <h2> le Sortez du train-train";
                 }
                
               }  
          switch ($eventdate[1])
            {
             case 1:
               $when_open = " le ".$firstdayday." ".$firstdaynum." ".$firstdaymon." ".$firstdayyear; 
               break;
             case 2:
               $when_open = " le ".$firstdayday." le ".$firstdaynum;
               if ($firstdaymon !== $seconddaymon) {$when_open = $when_open." ".$firstdaymon;}
               $when_open = $when_open." et ".$seconddayday." le ".$seconddaynum." ".$seconddaymon." ".$seconddayyear;
               break;
            }
          $when_open = $when_open.' de '.$eventdate[3].' &agrave; '.$eventdate[04];
          echo "$opening_type$when_open$close_heading";
          if (isset($more_info)) {
             echo $more_info;
             unset($more_info);
          }
          echo "    <add-to-calendar-button 
    name=\"$button_subject\"
    description=\"Centre Denis Papin open days, model railways, ride on railways, Coal Mine museum, Postal Carriages museum.\"
    startDate=\"$eventdate[0]\"
    startTime=\"$eventdate[3]\"
    endTime=\"$eventdate[4]\"
    timeZone=\"Europe/Paris\"
    location=\"Centre Denis Papin, Oignies, France\" ";
if ($eventdate[1] != 1)
{
    echo "   recurrence=\"daily\"
             recurrence_interval=\"1\"
             recurrence_count=\"$eventdate[1]\" ";
}
echo "\r\n    options=\"'Apple','Google','iCal','Outlook.com','Yahoo','Microsoft365','MicrosoftTeams'\"
    buttonStyle=\"3d\"
    size=\"4\"
    label=\"$button_text\">
    </add-to-calendar-button> \r\n";
             
          if ($first)
             {
                $first = false;
                echo "<h1>Suite &agrave; ce qui pr&eacute;c&egrave;de, nos journ&eacute;es portes ouvertes sont: \r\n </h1>";
             }

          } # end of test for old dates. (dates MUST be in order)
          
     } # end of for loop through all dates

?> 
    <br><br>

       <hr class=allbelow> <hr/>
    </div> <!-- all festival -->


    <hr class=allbelow> <hr/>
  </div> <!-- rightbody -->
</div> <!-- mainbody -->
<script src="./assets/js/atcb.min.js" defer></script>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
   
</body>
</html>