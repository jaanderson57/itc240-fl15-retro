<!DOCTYPE html>
<html>
<head>
<title>A3: Daily Grind</title>
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="initial-scale=1"/>
<link href="css/style.css" rel="stylesheet" /> 

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php
	$dayOfWeek = date('D');
	if($dayOfWeek == 'Mon') {
    $myPic="monpastry.jpg";
	$dayOfWeek = "Monday";
	$myPastry = "scone";
	$backgroundColor = "#FFCC99";
    
	}else if($dayOfWeek == 'Tue') {
    $myPic="tuepastry.jpg";
	$dayOfWeek = "Tuesday";
	$myPastry = "croissant";
	$backgroundColor = "#FFB266";

	}else if($dayOfWeek == 'Wed') {
    $myPic="wedpastry.jpg";
	$dayOfWeek = "Wednesday";
	$myPastry = "cinnamon roll";
	$backgroundColor = "#FF9933";
	
	}else if($dayOfWeek == 'Thu') {
    $myPic="thupastry.jpg";
	$dayOfWeek = "Thursday";
	$myPastry = "doughnut";
	$backgroundColor = "#FF8000";
	
	}else if($dayOfWeek == 'Fri') {
    $myPic="fripastry.jpg";
	$dayOfWeek = "Friday";
	$myPastry = "banana bread";
	$backgroundColor = "#CC6600";
	
	}else if($dayOfWeek == 'Sat') {
    $myPic="satpastry.jpg";
	$dayOfWeek = "Saturday";
	$myPastry = "apple tart";
	$backgroundColor = "#994C00";
	
	}else {
    $myPic="sunpastry.jpg";
	$dayOfWeek = "Sunday";
	$myPastry = "muffin";
	$backgroundColor = "#663300";
}
?>
<style>
body  {
	background-color:<?=$backgroundColor?>
}
</style>

</head>
<body>
<div id="wrapper">
<header>
	<img src="images/<?=$myPic?>" alt="<?=$myPastry?>" />
</header>

<h1>Pastry of the Day for <?=$dayOfWeek?>!</h1>
<h2><?=$dayOfWeek?> is <?=$myPastry?> day. Enjoy your <?=$myPastry?> for $1.00 with your favorite hot or cold beverage. Our pastries are made each morning from scratch with local organic ingredients. There is no better way to enjoy a <?=$dayOfWeek?>!</h2>




</main>
</div>
<!-- begin validation buttons -->
<!--<p>
<a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
</a>
</p>-->
<!-- end validation buttons -->
</body>
</html>