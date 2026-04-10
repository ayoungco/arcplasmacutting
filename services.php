<?php
$title = "Services";
$heading = "Services";
include("includes/template_header.php");
?>
<script type="text/javascript" src="http://www.arcplasmacutting.com/js/jquery.js"></script>
    <script type="text/javascript" src="http://www.arcplasmacutting.com/js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript">
    $(function() {
        $('#colors a').lightBox();
    });
</script>

<span id="services">
<p>Arc Plasma Cutting offers a range of materials and various services, don't let our name fool you! We weld, paint, fabricate, and much, much more!</p>
<img src="img/cutting_head.png" width="900" height="150" alt="Precision Plasma Cutting" style="margin-bottom:10px;"/>
<p>CNC Plasma Cutting is our specialty.</p>
<ul class="fancy">
	<li>MIG Welding</li>
    <li>TIG Welding</li>
    <li>Plasma Cutting</li>
    <li>Paint, including powder coating (see below)</li>
</ul>
<img src="img/powder_heading.jpg" width="900" height="150" alt="Powder Coating" style="margin-bottom:10px;"/>
<p>With Arc Plasma Cutting, you have an expansive selection of gloss and various finishes to choose from. Work with us to find the perfect match for you. Click on the images below to browse our most popular selections, but if you are looking for a particularly exotic color, let us know!</p>
<div id="colors"><a href="http://www.arcplasmacutting.com/img/chart1.jpg" rel="lightbox"><img src="img/chart1_thumb.gif" class="thumb"  /></a><a href="http://www.arcplasmacutting.com/img/chart2.jpg" rel="lightbox"><img src="img/chart2_thumb.gif" class="thumb" /></a></div>
</div>
<?php include("includes/template_footer.php"); ?>