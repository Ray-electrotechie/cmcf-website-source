#!/usr/bin/php
<?php
$thisfilnam = basename(__FILE__, '.php').'.htm'; /*Set up variable to tell testmenus which to output*/
include 'producemenus.php';
?>
  <div class=rightbody><script language="JavaScript" type="text/JavaScript"> 
function bigpic(filnam){ 
document.getElementById('baseimage').setAttribute('src','images/'+filnam+'.jpg') 
} 
</script> 

  <h1 class=rightheader>Diary/Festival 2008</h1>
  <p>Put your mouse pointer on the pictures below to see our Festival in 2008.
  </p>
  <table width=95% border="0"> 
  <tr> 
    <td>
      <a href="javascript.htm" onmouseover="bigpic('DSCN0180_modifie-1');" onclick="return false;"><img src="images/DSCN0180_modifie-1thumb.jpg" alt="*" ></a>
      <a href="javascript.htm" onmouseover="bigpic('IMG_3666');"           onclick="return false;"><img src="images/IMG_3666thumb.JPG" alt="*" ></a>
      <a href="javascript.htm" onmouseover="bigpic('IMG_6115bis');"        onclick="return false;"><img src="images/IMG_6115bisthumb.JPG" alt="*" ></a>
      <a href="javascript.htm" onmouseover="bigpic('Festival_1_030_modifie-1');" onclick="return false;"><img src="images/Festival_1_030_modifie-1thumb.jpg" alt="*" ></a>
      <a href="javascript.htm" onmouseover="bigpic('Festival_1_031_modifie-1');" onclick="return false;"><img src="images/Festival_1_031_modifie-1thumb.jpg" alt="*" ></a>
      <a href="javascript.htm" onmouseover="bigpic('IMG_6153bis');" onclick="return false;"><img src="images/IMG_6153bisthumb.JPG" alt="Super Pacific" ></a>
      <a href="javascript.htm" onmouseover="bigpic('IMG_3657');" onclick="return false;"><img src="images/IMG_3657thumb.JPG" alt="*" ></a>
    </td>
  </tr>
  </table> 
<img id="baseimage" src="images/DSCN0180_modifie-1.jpg" width=90% height=90%>
  <hr class=allbelow> <hr/>
  </div>
</div>
<!-- The horizontal rule below is invisible and used to ensure that the lowest div is below the others. -->
<hr class=allbelow>
<div class=footer>
<p class=footnote>
	<sup>[<a name="foot.id98" href="#id98">1</a>]</sup>
Pages shown <img class="flag" src="images/uk1.png" alt="English"> have an English summary</p>

<p class=copyright>© CMCF OIGNIES 9 Jan 2012 - <a href="http://www.oignies.fr/">Oignies</a> bouge la vie</p>
</div>
</body>
</html>