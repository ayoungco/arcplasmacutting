<?php 
$heading = "Welcome to ArcPlasmaCutting!";
$title = "ArcPlasmaCutting";

include("includes/template_header.php"); ?>
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=532649100086294";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="coinslider/coin-slider.min.js"></script>
<link rel="stylesheet" href="coinslider/coin-slider-styles.css" type="text/css" />

<p class="shadow">Creating high-quality, and eye-catching metal designs is not only ArcPlasma Cutting's mission, but also our <em>passion.</em> Each of our creations is made using fine metal and paint along with cutting edge equipment. We are proud to create products that are an expression of each customer's appreciation for unique, high quality artwork.</p>

<table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top" width="580">
<div id='coin-slider'>
<?php
// display all featured images in cache
if ($handle = opendir('temp')) {
	while (false !== ($entry = readdir($handle))) {
		$pathinfo = pathinfo($entry);
		if ($pathinfo['extension'] == "jpg") {
		// make an entry
		echo "<a href=\"#\"><img src=\"temp/".$entry."\" /></a>";
		}
	}
	closedir($handle);
}
?>
</div>
</td>
<td valign="top" width="400" style="padding:5px;"><div class="fb-like-box" data-href="http://www.facebook.com/pages/Arcplasmacutting/230343546019" data-width="400" data-show-faces="false" data-stream="true" data-header="true"></div>
</td>
</tr>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$('#coin-slider').coinslider( { width: 580, height: 432, navigation: true, delay: 2200, effect: 'straight' } );
	});
</script>


	  
<div class="column">
	<img src="img/cat.jpg" alt="okc sign" width="288" height="217" class="polaroid" />
	<p class="shadow">ArcPlasmaCutting's precision equipment can bring even the most complex designs to life. Already have a design? A favorite team or company logo? We can create a workpiece from anything you can bring us, even just an idea.</p>
</div>
<div class="column">
	<img src="img/cutter.jpg" alt="okc sign" width="288" height="217" class="polaroid" />
    <p class="shadow">In addition to creating unique artwork, ArcPlasma works with local industries to produce specialized components for their individual industrial applications of sheet metal.</p>
</div>
<div class="column">
	<img src="img/powder.jpg" alt="okc sign" width="288" height="217" class="polaroid" />
    <p class="shadow">We have a spectrum of colors to choose from for powder coating, which will give your project a long lasting vibrance.</p>
</div>
<div style="clear:both"></div>
<div id="parchment">
<h2>A Background in Excellence</h2>
<img src="img/charlie.jpg" width="301" height="200" alt="Charlie Innerst" style="margin-right:10px;" align="left"/>
<p>Arc Plasma Cutting was established in 2006 by Charlie Innerst of Dallastown, PA. Charlie is an experienced sheet metal mechanic, with 40 years of service with a local sheet metal company. He saw a need for a business that was able to produce small components used by traditional sheet metal shops in their large jobs. Additionally, he saw the endless possibilities available in the decorative arts. Charlie's knowledge of and skill with metal allow him to create beautiful pieces to accent all areas. All art is created from new sheet metal and covered with an all weather powder coating paint. We guarantee our work and your satisfaction.</p>
</div>
<?php include("includes/template_footer.php"); ?>