<?php

$title = "Contact Us - ArcPlasmaCutting";
$heading = "Contact Us";
include("includes/template_header.php");


?>
<div>Questions? Comments? Have a design in mind? We can make your idea a reality, no matter how simple, or complex!</div>

<div style="padding:10px; width:700px; margin:10px auto;">
<form action="mail.php" method="post">
  <table width="600" style="margin:0 auto;" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Name:</td>
    <td><input class="brown" name="name" type="text" size="40"/></td>
  </tr>
  <tr>
    <td>Email Address:</td>
    <td><input class="brown" name="email" type="text" size="40"/></td>
  </tr>
  <tr>
    <td>Message:</td>
    <td><textarea class="brown" name="text" cols="75" rows="7" size="2000"></textarea></td>
  </tr>
  <tr>
    <td>How did you find us?:</td>
    <td>Internet ad<input name="internet" type="checkbox" value="1" /> Other advertising<input name="internet" type="checkbox" value="1" /></td>
  </tr>
  <tr>
  	<td>Are you human?</td>
    <td> <?php
      		require_once('recaptchalib.php');
      		$publickey = getenv('RECAPTCHA_PUBLIC_KEY');
     		if ($publickey) {
     			echo recaptcha_get_html($publickey);
     		}
    	?></td>
  </td>
  <tr>
    <td>&nbsp;</td>
    <td><input name="sub" type="submit" /></td>
  </tr>
</table>
</form>
    <div style="text-align:center">Alternatively, you may <a href="mailto:arcplasmacutting@verizon.net">use your email client.</a></div>

</div><h1>Partner Links</h1>
<p>Visit our partners' links, and tell them Charlie sent you!</p>
<div class="cbar"><a href="http://www.mandraracing.com/" target="_blank">MANDRA: MidAtlantic Nostalgic Drag Racing Association</a></div>
<div class="cbar"><a href="http://www.millerplantfarm.com/" target="_blank">Miller Plant Farm</a></div>
<div class="cbar"><a href="http://www.outbacktoystore.com/" target="_blank">Outback Toys</a></div>
<div class="cbar"><a href="http://www.grandmasholidaycrafts.com/" target="_blank">Grandma`s Holiday Crafts</a></div>
<div class="cbox">
    <h2><a href="http://www.facebook.com/embroidered.image?ref=ts">Embroidered Image</a></h2>
    2142 Carlisle Road<br /> 
    York, PA 17408<br /> 
    PH# 717-764-9784<br /> 
    <a href="mailto:embimage@comcast.net">embimage@comcast.net</a><br />
    Visit Rob at Embroidered Image for all your embroidery needs, whether it's for personal, business, clubs or school sports.
</div>
<div class="cbox">
	<h2>Hilltop Country Barn</h2>
    6146 York Road<br /> 
    Spring Grove, PA 17362<br />
	(717) 225-4352
</div>
<div class="cbox">
	<h2>Triple Creek Rod & Gun</h2>
    914 Landisburg Rd<br /> 
    Landisburg, PA<br /> 
    (717) 789-3308
</div>
<div class="cbox">
	<h2>Mt. Airy Junction</h2>
	13831 Mount Airy Road<br />
	New Freedom, PA 17349<br />
    (717) 235-0749
</div>
<?php include("includes/template_footer.php"); ?>
