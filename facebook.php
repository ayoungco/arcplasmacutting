<?php
require_once __DIR__ . '/facebook/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '532649100086294',
  'app_secret' => '9074bc930c830e4d228e824aba009cc9',
  'default_graph_version' => 'v2.2',
  ]);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook PHP SDK Test</title>
</head>

<body>
<h1>Facebook PHP SDK Test</h1>
<p>Testing...</p>
</body>
</html>