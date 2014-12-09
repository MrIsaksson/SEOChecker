<?php

	namespace SEO\SEO;


	class CSeo {


//
// Local
//*******************************************************************************


public function local()  {

//
// variables
//
	$url = htmlspecialchars($_POST["url"]);
    $contents = file_get_contents($url);

//
// Create array and foreach result
// 

$local = 

	$html = substr_count($contents, "<html");
	$head = substr_count($contents, "<head");
	$metacharset = substr_count($contents, "<meta charset");
	$title = substr_count($contents, "<title");
	$metadescription = substr_count($contents, "<meta name='description'");
	$script = substr_count($contents, "<script");

	$h1 = substr_count($contents, "<h1");
	$h2 = substr_count($contents, "<h2");
	$h3 = substr_count($contents, "<h3");
	
	$array = [
		"&lt;html&gt;" => $html, 
		"&lt;head&gt;" => $head, 
		"&lt;title&gt;" => $title,
		"&lt;script&gt;" => $script,
		"&lt;h1&gt;" => $h1,
		"&lt;h2&gt;" => $h2,
		"&lt;h3&gt;" => $h3,
		"meta charset" => $metacharset,
		"meta description" => $metadescription,
		];
		
	echo "<h3>On-site SEO</h3>";
	foreach($array as $value => $key) {
		if($key == 0) {
			echo "<p>There is no " . $value . "</p>";
		} else {
		echo "<p>" . $value . " = " . $key . "</p>";
		}
	}
	
	return $local;

}



//
// FACEBOOK
//*******************************************************************************

public function facebook()  {

//
// variables
//

	$url = htmlspecialchars($_POST["url"]);
    $contents = file_get_contents($url);
    
//
// Create array and foreach result
// 

$facebook = 

	$fbtitle = substr_count($contents, "og:title");
	$fbtype = substr_count($contents, "og:type");
	$fbimage = substr_count($contents, "og:image");
	$fburl = substr_count($contents, "og:url");
	$fbdescription = substr_count($contents, "og:description");
	$fbadmins = substr_count($contents, "og:admins");


	$array = [
		"og:title" => $fbtitle, 
		"og:type" => $fbtype, 
		"og:image" => $fbimage,
		"og:url" => $fburl,
		"og:description" => $fbdescription,
		"og:admins" => $fbadmins,
		];
		
	echo "<h3>Facebook SEO</h3>";
	foreach($array as $value => $key) {
		if($key == 0) {
			echo "<p>There is no " . $value . "</p>";
		} else {
		echo "<p>" . $value . " = " . $key . "</p>";
		}
	}
	
	return $facebook;
}



//
// Twitter
//*******************************************************************************


public function twitter()  {

//
// variables
//

	$url = htmlspecialchars($_POST["url"]);
    $contents = file_get_contents($url);
    
//
// Create array and foreach result
// 

$twitter =

	$twcard = substr_count($contents, "twitter:card");
	$twurl = substr_count($contents, "twitter:url");
	$twtitle = substr_count($contents, "twitter:title");
	$twdescription = substr_count($contents, "twitter:description");
	$twimage = substr_count($contents, "twitter:image");

	
	$array = [
		"twitter:card" => $twcard, 
		"twitter:url" => $twurl, 
		"twitter:title" => $twtitle,
		"twitter:description" => $twdescription,
		"twitter:image" => $twimage,
		];
		
	echo "<h3>Twitter SEO</h3>";
	foreach($array as $value => $key) {
		if($key == 0) {
			echo "<p>There is no " . $value . "</p>";
		} else {
		echo "<p>" . $value . " = " . $key . "</p>";
		}
	}

	return $twitter;
}

}

