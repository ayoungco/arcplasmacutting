<?
// Grab action if set
isset( $_REQUEST['action'] ) ? $action = $_REQUEST['action'] : $action = "";



// if they want to update the showroom
if( $action == 'updatesr'){
    ob_start();
	
	//////////////////////////////////////////////////////
	
	echo "<p class=\"shadow\">Here you can browse our previous projects, if you're looking for inspiration, or if you need an example of the quality of our craftsmanship.</p>";
	echo "<div class=\"gallery_top_bg\">";
	// Grab album information
	// http://graph.facebook.com/endpoint?key=value&access_token=532649100086294|9074bc930c830e4d228e824aba009cc9
	//https://graph.facebook.com/oauth/access_token?client_id=532649100086294&client_secret=9074bc930c830e4d228e824aba009cc9&grant_type=client_credentials  
	$token = file_get_contents("https://graph.facebook.com/oauth/access_token?client_id=532649100086294&client_secret=9074bc930c830e4d228e824aba009cc9&grant_type=client_credentials  ");
	echo file_get_contents("https://graph.facebook.com/me?".$token);
	echo "entry.";
	$initialquery = file_get_contents("https://graph.facebook.com/230343546019/albums/?fields=id,description,name,cover_photo");
	$init = json_decode($initialquery, true);
	$init = $init['data'];
	
	$ignore = array("Cover Photos", "Profile Pictures", "Featured", "Mobile Uploads");
	
	foreach ($init as $row) {
		
		if (!in_array($row['name'], $ignore)) {
		
		// get the album's cover photo
		$photoquery = file_get_contents("http://graph.facebook.com/".$row['cover_photo']."/?fields=picture,images");
		$photoinfo = json_decode($photoquery, true);
		
		echo "<a class=\"gallery_top\"href=\"http://www.arcplasmacutting.com/showroom.php?action=album&aid=".$row['id']."\" 
		style=\"background-image:url(".$photoinfo[images][4][source].")\"><div>".$row['name']."</div></a>";
		}
	}
	echo "<div class=\"antifloat\"></div></div>";
	
	//////////////////////////////////////////////////////
	
	// Grab current output, write to cache.php
	$out = ob_get_clean();
	
	$cache = fopen("../cache.php", "r+");
	// empty file
	ftruncate($cache, 0);
	fwrite($cache, $out);
	fclose($cache);
	// redirect user
	header("Location: http://www.arcplasmacutting.com/admin/");
}
// return the admin page if nothing else is requested
else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APC Admin</title>
<style type="text/css">
body { font-family:Arial, Helvetica, sans-serif; }
h1 { margin-top:0px; }
#page { background-color:#F99; border:1px #F00 dotted; padding:10px; width:700px; margin:0 auto;}

.button { height:30px; background-color:#C00; border: 2px #900 outset; color: #FFF; margin:0 auto; padding:10px 30px; text-decoration:none; }
.button:hover { border: 2px #900 inset; }
</style>
</head>
<body>
    <div id="page">
    	<a href="http://www.arcplasmacutting.com">Website</a>
        <h1>ArcPlasma Admin Page</h1>
        <a class="button" href="index.php?action=updatesr">Update Showroom</a>
        <p>Updates the Showroom top level - this should only be necessary if you change a cover photo or add a new album. </p>
        <a class="button" href="featuredsave.php">Update Featured Crawl</a>
        <p>Use this if you change the contents of the Featured Folder in any way.</p>
    </div>
</body>
</html>
<? } ?>