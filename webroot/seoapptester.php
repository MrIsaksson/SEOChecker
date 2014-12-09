<html>
	<head><title>SEO Testcontroller</title>
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	</head>
<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


// include files and call classes
include('../src/COutput.php');
$SEO = new CSeoOutput();
?>

<body>
<div id="container">
	<div>
	<form id="seoform" action='<?=htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
	 <h2>URL</h2>
	<input type='text' name='url' required /><br>
	 <input type='submit' value='Get my SEO stats'>
	</form>
	</div>
	

	
<div id="seooutput">
<?=$SEOoutput = $SEO->seoOutput();?>
</div>


</div>


</body>
</html>
	
