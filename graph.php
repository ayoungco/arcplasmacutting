<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div id="fb-root"></div>
<script>
(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "https://connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
 
}(document, 'script', 'facebook-jssdk'));
   
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '532649100086294',
      xfbml      : true,
      version    : 'v2.4'
    });
	/*
	FB.api('/me', function(response) {
		fbinfo = new Array();
		fbinfo[0] = response.id;
		fbinfo[1] = response.first_name;
		fbinfo[2] = response.last_name;
		fbinfo[3] = response.email;
		
		alert(fbinfo);
	});
	*/
	FB.api('/me/albums', {fields: 'id,cover_photo'}, function(response) {
		window.alert(response);
	});
  };
</script>

<h1>Javascript SDK</h1>


</body>
</html>