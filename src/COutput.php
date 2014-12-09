<?php

	namespace SEO\SEO;

	class CSeoOutput {
	
	
	//	Validate URL and call functions
	//
	//**************************************************************
	
	public function seoOutput() {

		if($_POST AND filter_var(htmlspecialchars($_POST["url"]), FILTER_VALIDATE_URL)) {
		echo "<div class='seolink'><h2>You are searching for SEO stats on: </h2><p><a href=" . htmlspecialchars($_POST['url']) . ">" . htmlspecialchars($_POST['url']) . "</a></p></div>";
	
	//Include src/CSeo.php and call functions
	include('CSeo.php');
	$SEO = new CSeo();
	$local = $SEO->local();    
	$facebook = $SEO->facebook();    
	$twitter = $SEO->twitter();    

	} else if($_POST AND !filter_var(htmlspecialchars($_POST["url"]), FILTER_VALIDATE_URL)) {
    	echo "<div class='seoerrormessage'><h2>Oops! Did you enter a valid URL with http:// or https:://?</h2></div>";
	} else {
	    echo "<div class='seoerrormessage'><h2>Enter a valid URL to make a search</h2></div>";
};

}
}