#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody>  <script language="JavaScript" type="text/JavaScript"> 
function bigpic(filnam,logo){ 
document.getElementById('baseimage').setAttribute('src','images/'+filnam+'.jpg');
//document.getElementById('photologo').innerHTML = logo;
} 
</script>
  <h1 class=rightheader>Agenda/Le Festival Vapeur 2008</h1>
  <p>Placer le pointeur de votre souris sur une des vignettes ci-dessous pour l'agrandir.
  </p>
  <table width=95% border="0"> 
  <tr> 
    <td>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('DSCN0180_modifie-1','1');" onclick="return false;"><img src="images/DSCN0180_modifie-1thumb.jpg" alt="*" ></a>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('IMG_3666','2');"           onclick="return false;"><img src="images/IMG_3666thumb.JPG" alt="Rotunde avec plaque tournante 1/87" ></a>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('IMG_6115bis','3');"        onclick="return false;"><img src="images/IMG_6115bisthumb.JPG" alt="*" ></a>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('Festival_1_030_modifie-1','4');" onclick="return false;"><img src="images/Festival_1_030_modifie-1thumb.jpg" alt="*" ></a>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('Festival_1_031_modifie-1','5');" onclick="return false;"><img src="images/Festival_1_031_modifie-1thumb.jpg" alt="*" ></a>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('IMG_6153bis','La Super Pacific');" onclick="return false;"><img src="images/IMG_6153bisthumb.JPG" alt="Super Pacific" ></a>
      <a href="javascriptfrancais.htm" onmouseover="bigpic('IMG_3657','7');" onclick="return false;"><img src="images/IMG_3657thumb.JPG" alt="*" ></a>
    </td>
  </tr>
  </table><br>
 <!--   <p id="photologo"> <nbr></p> <br> -->
<img id="baseimage" src="images/DSCN0180_modifie-1.jpg" width=90% height=90%>
  <hr class=allbelow> <hr/>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
   <?php footer(); ?>
</body>
</html>