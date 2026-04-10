<?php
$heading = "Product Showroom";
$title = "Showroom - ArcPlasmaCutting";

// JSON Data Collector for ArcPlasmaCutting
// Adam Young (destructerator@gmail.com)

//defining action index
isset( $_REQUEST['action'] ) ? $action = $_REQUEST['action'] : $action = "";

// sort() by date here

include("includes/template_header.php");

// lightbox
echo '<script type="text/javascript" src="http://www.arcplasmacutting.com/js/jquery.js"></script>
    <script type="text/javascript" src="http://www.arcplasmacutting.com/js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript">
    $(function() {
        $(\'#fbgallery a\').lightBox();
    });
    </script>';

// if no action is requested

if( $action == ''){
	include("cache.php");
}

// if the user wants to see an album...
if( $action == 'album'){
    isset( $_GET['aid'] ) ? $aid = $_GET['aid'] : $aid = "";
	
	// grab all photos from album
	$initialquery = file_get_contents("https://graph.facebook.com/".$aid."/photos/?fields=picture,source,images,name");
	$init = json_decode($initialquery, true);
	
	// get album data
	$info = file_get_contents("https://graph.facebook.com/".$aid."/?fields=name");
	$info = json_decode($info, true);
	
	$init = $init['data'];
    
    echo "<div><h2>".$info['name']."</h2><a href='http://www.arcplasmacutting.com/showroom.php'>Back To Showroom</a></div>";

   //so that jQuery lightbox will pop up
   //once the image was clicked
    echo "<div id='fbgallery'>";
    
    foreach($init as $row) {
        
        echo "<a class=\"gallery_photos\" style='padding:10px; margin:3px; width: 190px; height: 190px; float: left; background-image:url(".$row[images][5][source]."); background-repeat:no-repeat; background-position:center center;' href=\"" . $row['source'] . "\" title=\"" . $row['name'] . "\" rel=\"lightbox\">";
        echo "</a>";
    }
    
    echo "</div>";
	echo "<div class=\"antifloat\"></div><a href='http://www.arcplasmacutting.com/showroom.php'>Back To Showroom</a></div>";
}
echo "<div class=\"antifloat\"></div>";

include("includes/template_footer.php"); 
?>