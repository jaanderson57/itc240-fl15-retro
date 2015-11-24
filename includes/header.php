<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/formstyle.css" />
    <!--<style type="text/css">
		/* required class for identifying mandatory elements */
		.required {font-style:italic;color:#FF0000;font-weight:bold;}
	</style>-->
    <script type="text/javascript">
		//place local js code here
		
		function init()
		{//init places focus on the first form element
			document.myForm.Name.focus();
		}
		
		//here we make sure the user has entered valid data	
		function checkForm(thisForm)
		{//check form data for valid info
			if(empty(thisForm.Name,"Please Enter Your Name")){return false;}
			if(!isEmail(thisForm.Email,"Please enter a valid Email Address")){return false;}
			return true;//if all is passed, submit!
		}
		
		addOnload(init); //with addOnload() we can add as many functions as we wish to window.onload (one by one)!
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.php"><img src="images/<?=$headerPic?>" width="330" height="202" alt=""></a>
			<ul class="navigation">
                <?=makeLinks($nav1, '<li>','</li>','<li class="active">')?>
				
                <!--
                <li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
                -->
                
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="content">
			<div>
            
<!--HEADER ENDS HERE--> 