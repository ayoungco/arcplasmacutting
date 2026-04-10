<?php 
include("resize.php");

function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

	// get Featured album's ID
	$initialquery = file_get_contents("https://graph.facebook.com/10151175366566020/photos/?fields=picture,source,images,name");
	$init = json_decode($initialquery, true);
	$init = $init['data'];
	$i = 0;
	
deleteDir("../temp");
mkdir("../temp");	

foreach ($init as $row) {
	
	// save the full size image
	$fullSource = $row['source'];
	// save the thumbnail
	$fullsize = new SimpleImage();
	$fullsize->load($fullSource);
	$fullsize->resizeToWidth(580);
	// set name
	$fullFilename = $row['id'];
	// save file
	$fullsize->save('../temp/'.$fullFilename.'.jpg');
	
	echo "Saved full size of ".$row['id']." successfully.<br/>";
}
?>
<p><a href="index.php">Return</a></p>