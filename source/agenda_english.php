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
<!--    <h2> Unfortunately you are too late for our 2022 festival. Our next public open day is 9th April 2023.</h2>
<h1>Our next public opening will be our Spring Festival 2023</a> <br> Saturday 25th and Sunday 26th March  from 10h to 18h </h2>
           <div id="hcalendar-Steam-Festival" class="vevent"style="float:left">
            <img src="images/festivalprintemps23bismini.jpg" height="406" onClick="parent.location='images/festivalprintemps23bis.jpg'" alt="2023 Spring Festival" style="float: left; margin-right: 30px">
            <h2>The Centre de la Mine et du Chemin de Fer de Oignies (62)
      	       will present on  <abbr title="2023-03-25T10:00+02:0000" class="dtstart">25th</abbr> and
      	    <abbr title="2023-08-26T18:00+02:00" class="dtend">26th</abbr> March 2023
      	      from 10h to 18h our Spring Festival of Model Railways </h2>
      	      <li>A steam Traction Engine giving rides around the complex (to be confirmed).</li> 
      	      <li>Snack Bar</li>-->
        <p>During every open day for the Centre Denis Papin the following attractions will be available (with extra attractions during Festivals):</p>
        <div class="description">
          <ul>
            <li>Steam and electric locomotives on a 700m circuit in 5&Prime; and 7&frac14;&Prime; gauges offering free rides for adults and children.</li>
            <li>Presentations of the clubs activities and the historical collections of CMCF will be available throughout the day on both days.</li>
            <li>Large railway layouts of various small gauges will be in operation.</li>
            <li>Access to the workshops where the SNCF Pacific Steam Locomotive is being restored will be available to all visitors.</li>
            <li>Six postal carriages containing the museum dedicated to the history of travelling sorting offices.</li>
            <li>A mine museum in the old mine training school.</li>
          </ul>
    <!--  <p> Festival Entrance fees: Adult 4&euro;, Child (6 to 16) 2&euro;, Free admission - Less than 6 years (accompanied).-->
            
       <hr class=allbelow>
       <!--<h1>Our next "normal" open Sunday will be 9th July 2023  from 14h00 to 18h00</h1> -->
    
    
    
   <?php
   echo "\r\n";
   $timeofcalc=date_create("now");
   $first = true;
   foreach ($opendates as $eventdate)
     {
       $firstday=date_create($eventdate[0]);
       $diff=date_diff($timeofcalc,$firstday);
       $secondday = clone $firstday;                #This is a deep copy of all attributes of firstday.
       $secondday->modify('+1 day');                #Then get the following day
       $firstdayday = $firstday->format('l');
       $firstdaynum = $firstday->format('jS');
       $firstdaymon = $firstday->format('M');
       $firstdayyear = $firstday->format('Y');
       $seconddayday = $secondday->format('l');
       $seconddaynum = $secondday->format('jS');
       $seconddaymon = $secondday->format('M');
       $seconddayyear = $secondday->format('Y');
       $days = $diff->format("%a days ");
       if ($firstday > $timeofcalc)
          { /*echo($eventdate[0]." which is a ".$days."future event \r\n");*/
          # Set up button text and diary
          switch ($eventdate[2])
             {
              case "normal":
                $button_text = 'Add CMCF open day to your diary';
                $button_subject = 'Visit: CMCF open day';
                break;
              case "spring":
                $button_text = 'Add CMCF spring festival to your diary';
                $button_subject = 'Visit: CMCF spring Festival';
                break;
              case "summer":
                $button_text = 'Add CMCF summer festival to your diary';
                $button_subject = 'Visit: CMCF summer festival';
                $more_info=<<<EOD
      <div>
            <img src="images/CMCF_Festival{$firstdayyear}_miniature.jpg" width="30%" onClick="parent.location='images/CMCF_Festival{$firstdayyear}.jpg'" alt="Festival of steam {$firstdayyear}" style="float: left; margin-right: 30px">
            <h2>Click the image to enlarge it</h2>
          <hr class=allbelow>   
        </div>
EOD;
                break;
              case "heritage":
                $button_text = 'Add CMCF heritage days to your diary';
                $button_subject = 'CMCF is open for Heritage days';
                break;
              case "specialevent":
                $button_text = 'Add Get out of the routine to your diary';
                $button_subject = 'CMCF is open for "get out of the routine" event';
                $more_info=<<<EOD
<!--      <div style="float:left"> for some reason this screws up all button or image clickons -->
      <div>
            <img src="images/sortez_train_train_fiche_mini.jpg" width="30%" onClick="parent.location='images/sortez_train_train_fiche_a4.jpg'" alt="Sortez du train-train" style="float: left; margin-right: 30px">
            <h2>CMCF is involved in a sepecial event "Get out of routine". <a href="images/sortez du train-train_flyer.pdf">Download the complete brochure</a> in .pdf form. It is only available  in French. </h2>
            <h2>Click any image to enlarge it</h2>
            <br><img src="images/train-train01_mini.jpg" width="25%" onClick="parent.location='images/sortez_du_train-train_flyer1.jpg'" alt="Sortez du train-train flyer p1" style="float: left; margin-right: 30px">
                <img src="images/train-train02_mini.jpg" width="25%" onClick="parent.location='images/sortez_du_train-train_flyer2.jpg'" alt="Sortez du train-train flyer p2" style="float: left; margin-right: 30px">
          <hr class=allbelow>   
        </div>
<!--      </div> -->
EOD;
             }
          if ($first) 
               {
                echo "<h1>Our next public opening will be";
                $close_heading = "</h1>\r\n";
                switch ($eventdate[2])
                 {
                  case "normal":
                    $opening_type = " our normal opening ";
                    break;
                  case "spring":
                    $opening_type = " our spring festival ";
                    break;
                  case "summer":
                    $opening_type = " our annual festival";
                    break;
                  case "heritage":
                    $opening_type = " for French heritage weekend";
                    break;
                  case "specialevent":
                    $opening_type = " for Get out of the routine";
                 }
               } else 
               {
                $close_heading = "</h2>\r\n";
                switch ($eventdate[2])
                 {
                  case "normal":
                    $opening_type = "<h2> Afternoon opening:";
                    break;
                  case "spring":
                    $opening_type = "<h2> Spring festival:";
                    break;
                  case "summer":
                    $opening_type = "<h2> Annual summer Festival: ";
                    break;
                  case "heritage":
                    $opening_type = "<h2> French heritage weekend:";
                    break;
                  case "specialevent":
                    $opening_type = " <h2> Get out of the routine:";                    
                 }
                
               }  
          switch ($eventdate[1])
            {
             case 1:
               $when_open = " on ".$firstdayday." the ".$firstdaynum." of ".$firstdaymon." ".$firstdayyear; 
               break;
             case 2:
               $when_open = " on ".$firstdayday." the ".$firstdaynum;
               if ($firstdaymon !== $seconddaymon) {$when_open = $when_open." of ".$firstdaymon;}
               $when_open = $when_open." and ".$seconddayday." the ".$seconddaynum." of ".$seconddaymon." ".$seconddayyear;
               break;
            }
          $when_open = $when_open.' from '.$eventdate[3].' to '.$eventdate[04];
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
                echo "<h1>Following the above our open days are: \r\n </h1>";
             }

          } # end of test for old dates. (dates MUST be in order)
          
     } # end of for loop through all dates

?> 
  <!--  (doesn't work) <add-to-calendar-button
  name="Subscribe to CMCF public calendar"
  startDate="2023-10-23"
  subscribe
  icsFile="https://calendar.google.com/calendar/u/0?cid=Ym44c2lncDIwMTVpanNuOWh0YXJ2NjZqbXNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ"
  options="'Apple','Google','iCal','Outlook.com','Microsoft 365','Microsoft Teams','Yahoo'"
  lightMode="bodyScheme"
></add-to-calendar-button>   

    <h1>Our next public opening will be our Spring festival Saturday 13th and Sunday 14th April 2024 from 10am to 6pm</h1>
        <add-to-calendar-button 
  name="CMCF spring festival"
  description="Centre Denis Papin open days, model railways, ride on railways, Coal Mine museum, Postal Carriages museum."
  startDate="2024-04-13"
  startTime="10:00"
  endTime="18:00"
  timeZone="Europe/Paris"
  location="Centre Denis Papin, Oignies, France"
  recurrence="daily"
  recurrence_interval="1"
  recurrence_count="2"
  options="'Apple','Google','iCal','Outlook.com','Yahoo','Microsoft365','MicrosoftTeams'"
  buttonStyle="3d"
  size="4"
  label="Add CMCF Spring Festival"
      ></add-to-calendar-button>

<add-to-calendar-button 
  name="CMCF summer festival"
  description="Centre Denis Papin open days, model railways, ride on railways, Coal Mine museum, Postal Carriages museum, food, bar"
  startDate="2024-08-31"
  startTime="10:00"
  endTime="18:00"
  timeZone="Europe/Paris"
  location="Centre Denis Papin, Oignies, France"
  recurrence="daily"
  recurrence_interval="1"
  recurrence_count="2"
  options="'Apple','Google','iCal','Outlook.com','Yahoo','Microsoft365','MicrosoftTeams'"
  buttonStyle="3d"
  size="4"
  label="Add to diary: CMCF summer festival"
></add-to-calendar-button> -->
    <br><br>
<!--    <div id="hcalendar-Steam-Festival" class="vevent"style="float:left">
      <img src="images/CMCF_Festival23vraiminiature.jpg" height="406" onClick="parent.location='images/CMCF_Festival23vrai.jpg'" alt="2022 festival flyer" style="float: left; margin-right: 30px">
      <!-- <p>Although you may visit on our "normal" Sunday open days to view the museum, the models and ride on the miniature trains, our main event is the annual &ldquo;Festival of steam&rdquo;.
      Make a note in your diary for our next festival of steam:
      
      <h2 class="summary">The 2023 Festival of Steam</h2>
      <p> On <abbr title="2023-08-26T10:00+02:0000" class="dtstart">Saturday 26th </abbr>
        and <abbr title="2023-08-27T18:00+02:00" class="dtend">Sunday 27th August 2023</abbr> the
        &ldquo;Centre de la Mine et du Chemin de Fer de Oignies (62)&rdquo; will hold its 28<sup>th</sup> Festival of Steam.
        Full sized and model railways will be exhibited at the <span class="location">Centre Denis Papin</span>.
        The Festival will be open from 10am until 6pm each day. Click the image opposite for a larger view of the poster.</p>
     <!--    <p>The special event during the 2014 festival was the visit of the locomotive &ldquo;Yvonne&rdquo; from the  <a href="http://www.stoomcentrum.be/"> Stoomcentrum (Steam Centre) Maldegem</a>. In the poster to the left (click to enlarge) Yvonne is followed by our <a href="http://fr.wikipedia.org/wiki/Draisine">&ldquo;draisine&rdquo;</a> (works vehicle). Yvonne, number 947 is one of 20 constructed in 1893 by St-L&eacute;onard of Li&egrave;ge. It's weight is 15 Tonnes. The working pressure of the boiler (the original) is 10 bar. The locomotive, owned by a member of Stoomcentrum, has been entirely restored. It arrived by road from its home in Stoomcentrum and stayed for the duration of the steam festival. Despite the limited accomodation, the locomotive was kept busy during both days giving short rides on our connection to the main lines.</p>
  This year the <a href="http://www.cav-escarbille.com/" TARGET="_blank">Confr&eacute;rie des Amateurs de la Vapeur</a>
      (Steam Enthusiasts Federation) held their annual general meeting at Oignies.-->
      <!--<p>The theme for the 2019 Festival is not yet decided.
      	<p>The theme for the 2015 Festival was the train in the world of toys and games from the perspective of the collector.
      	Thus visitors were able to re-visit their childhood memories of electric and wind-up trains, puzzles and other gadgets such as bottle openers, phones, decorative items and lighters.</p> -->
      <!--<p> The theme for this year is &ldquo;The Marshall plan and its locomotives&rdquo;. </p>
      <p>On show will be the diesel locomotive type A1A A1A 62094, manufactured by Baldwin in Philiadelphia in 1946 and supplied to France under the Marshall plan. Based at the Lens depot, this machine was transfered to CMCF in 1996 after its retirement.</p>
      <p>As a special attraction the wartime vehicle society based at Wingles, <a href='https://www.facebook.com/VehiculesMemoirePassionWingles/' TARGET="_blank"> Association V&eacute;hicules M&eacute;moire Passion de Wingles</a>, will display a number of military vehicles which illustrate those participating in the D day landings of June 1944. A Dodge, equipped with railway wheels, will be displayed in front of the Pacific workshop and will offer short rides to our visitors.</p>
      <p>There will of course be our normal attractions:</p>
       <div class="description">
         <ul>
      	<li>Steam and electric locomotives on a 700m circuit in 5&Prime; and 7&frac14;&Prime; gauges offering free rides for adults and children.</li>
     <!-- 	<li>A steam Traction Engine giving rides around the complex (to be confirmed).</li>
      	<li>Presentations of the clubs activities and the historical collections of CMCF will be available throughout the day on both days.</li>
      	<li>Large railway layouts of various small gauges will be in operation.</li>
      	<li>Access to the workshops where the SNCF Pacific Steam Locomotive is being restored will be available to all visitors.</li>
      	<!--
      	<li>The formal handover of two 7&frac14;&Prime; gauge locomotives belonging to the Cit&eacute; du Train
      	    which have been restored to running condition by CMCF (a Bo-Bo diesel modelled on the mines' shunting machines
      	    and an 0-4-0 'Progr&egrave;s' type Decauville steam locomotive).</li>
      	-->
   <!--   	<li>Stalls where you can buy from specialist suppliers will be open on both days.</li>
      	<li>Six postal carriages containing the museum dedicated to the history of travelling sorting offices.</li>
      	<li>A mine museum in the old mine training school.</li>
   <!--   	<li>Drinks and food stalls. </li>
         </ul>
   <!--      <p>Entrance fee for the Festival of Steam: Adults 6 euros, juniors (6 to 16 years) 3 euros, accompanied children 6 and under - no charge.
         	Group visit (minimum 20 persons) 3 euros. PROSITEC members holding a pass 3 euros.(all to be confirmed)</p>
        <div class=buttoncontainer>
        <div class="atcb" style="display:none;">
            {"name":"Rail Festival - full scale and models",
            "description":"With: Market,Several networks in different guages,\n Access to the workshop restoring a Pacific steam locomotive\n Visit to the museum of postal wagons\n Visit to the mine museum  ",
            "startDate":"08-26-2023",
            "endDate":"08-27-2023",
            "startTime":"10:00",
            "endTime":"18:00",
            "location":"www.cmcf-oignies.com , Centre Denis Papin, Oignies",
            "label":"Add this rail Festival<br>to my diary",
            "options":[
              "Apple",
              "Google",
              "iCal",
              "Microsoft365",
              "Outlook.com",
              "Yahoo"
            ],
            "timeZone":"Europe/Berlin",
            "trigger":"click",
            "inline":true,
            "iCalFileName":"cmcf_rail_festival_23"}
        </div>
        </div>
         <p><a href=festival2012en.htm>Some photos of the 2012 festival</a> illustrate the range of locomotives and other attractions at our steam festival.</p>
         <p>We welcome visitors with their own 5 inch or 7&frac14;&Prime; locomotives, trams and rolling stock (whether steam or not).</p>
         <p>Our site has room to accommodate caravans and camper vans with their own toilet facilities for the duration of the open weekend.
                 Unfortunately we cannot accomodate tents since the only toilet and washing facilites we have are in a building which is secured and alarmed overnight.
                 Also, if you are holidaying on Continental Europe you can deposit your locomotive with us we will gladly store it for
                 the duration of your holiday (unfortunately at your risk). </p>
         <p>If you wish to bring something, store it or put your caravan on our site please <a href=mailto:secretaire@cmcf-oignies.com>contact us</a> at least 3 weeks in advance. </p>
         <p>Both the <a href=festival2012en.htm>2012 festival</a> and the <a href=festival2011english.htm>2011 festival</a> included steam traction engine rides around the compound.
         <a href=festival2009english.htm>The 2009 festival </a>contained an important moment for the society; the lifting of the boiler of the Super Pacific.</a> </p>
       </div> <!-- description -->
       <hr class=allbelow> <hr/>
    </div> <!-- all festival -->

<!-- <h1 class=rightheader>External events in which CMCF participates</h1>
    <a name="external"></a>
    <ul>
    	<li>Come and meet us at <a href="http://www.trainsmania.com/" TARGET="_blank">Trainsmania</a> on 28/29/30 April in Lille where we will be showing some of our activities; a locomotive driving simulator, 1/32 scale models and the restoration of full-size machines. We will also be operating a live steam track in 5 inch/127 mm. </li>
    </ul>
    <!-- <li>Weekend of 20 et 21 April &mdash; Spring Festival at Beaucamps-Ligny with the Steam Traction engine and passenger wagons;</li>
    <li>Weekend of 20 and 21 April &mdash; Maubeuge - Five inch gauge circuit with Steam traction;</li>
    <li>Weekend of 27 and 28 April &mdash; <a href="http://www.fetevapeur.fr"> Steam Festival</a>  of the  "Chemin de Fer de la Baie de Somme" ;</li>
<li>Weekend of 27 and 28 April &mdash; Opening meeting of the season <a href="http://ptvf.fte2.org/">PTVF de Forest &agrave; Bruxelles</a> ;</li> 
<li>Sunday 19 May (Pentecost (Whit Sunday)) &mdash; stand at (<a href="http://appeva.perso.neuf.fr/fest.htm">Le P&apos;tit train de la Haute Somme)</a> ;</li>
<li>Weekend of 29 and 30 June &mdash; Five inch guage circuit at "la Ferme du Gauquier &agrave; Lys-lez-Lannoy" ;</li>
<li>Weekend of 05 and 06 October &mdash; Last meeting of the season at <a href="http://ptvf.fte2.org/">PTVF de Forest &agrave; Bruxelles</a> ;</li>
<li>Saturday 02 November &mdash; Five inch gauge circuit on the forecourt of the H&ocirc;tel de ville of Lens (to be confirmed) ;</li>
<li>Weekend of 23 and 24 November &mdash; Five inch gauge circuit at the Christmas Market, Oignies ;</li>
    </ul> -->
    <hr class=allbelow> <hr/>
  </div> <!-- rightbody -->
</div> <!-- mainbody -->
<script src="./assets/js/atcb.min.js" defer></script>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
   
</body>
</html>