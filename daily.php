<?php include "includes/config.php";?>
<?php

    if(isset($_GET['day']))
    {//show selected day

    $dayOfWeek = $_GET['day'];

    }else{//show today

    $dayOfWeek = date('D');
}
?>

<?php
	//$dayOfWeek = date('D');
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

<?php include "includes/header.php";?>

           
<div> <h1><?=$pageID?></h1>
    <h2>Pastry of the Day for <?=$dayOfWeek?>!</h2>
    <img src="images/<?=$myPic?>" alt="<?=$myPastry?>" />    


<p><a href="daily.php?day=Sun">Sunday</a></p>
<p><a href="daily.php?day=Mon">Monday</a></p>
<p><a href="daily.php?day=Tue">Tuesday</a></p>
<p><a href="daily.php?day=Wed">Wednesday</a></p>
<p><a href="daily.php?day=Thu">Thursday</a></p>
<p><a href="daily.php?day=Fri">Friday</a></p>
<p><a href="daily.php?day=Sat">Saturday</a></p>

<h2><?=$dayOfWeek?> is <?=$myPastry?> day. Enjoy your <?=$myPastry?> for $1.00 with your favorite hot or cold beverage. Our pastries are made each morning from scratch with local organic ingredients. There is no better way to enjoy a <?=$dayOfWeek?>!</h2>

</div>


</div>
		</div>
			</div>
            
<?php include "includes/footer.php";?>                
                
