<?php
//config.php

//database credentials here
include 'credentials.php';



//This defines the current file name

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//this allows us to add unique info to our pages
switch(THIS_PAGE)
{
    case "index.php":
        $title = "Home Page";
        $pageID = "My Home PageID";
		$headerPic = "waitress.png";
		break;
		
	case "dog_list.php":
        $title = "Dog Page";
        $pageID = "Dogs";
		$headerPic = "waitress.png";
        break;
	
/*	case "template.php":
        $title = "My Template Title Tag";
        $pageID = "My Template PageID";
        break;
*/        
    case "daily.php":
        $title = "Daily Specials";
        $pageID = "Daily Specials";
		$headerPic = "waitress4.jpg";
        break; 
		
	case "contact.php":
        $title = "Contact Page";
        $pageID = "Contact Me!";
		$headerPic = "waitress.png";
        break;	   
        
    case "register.php":
        $title = "Register Page";
        $pageID = "Register!";
		$headerPic = "waitress.png";
        break;	        
        
    default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner";
		$headerPic = "waitress.png";

}//end switch

//here are our navigation pages:

$nav1['index.php'] = 'Home';
$nav1['dog_list.php'] = 'Dogs';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';
$nav1['register.php'] = 'Register';


/*creates link inside the header.php file

<li><a href="LINK">LABEL</a></li>
<li class="active"><a href="LINK">LABEL</a></li>

*/

//if no data comes in the 2nd, 3rd, or 4th location, put in nothing: =''

function makeLinks($arr, $prefix='', $suffix='', $exception='')
{
    $myReturn = '';
    foreach($arr as $link => $label)
    {
        
        if(THIS_PAGE == $link)
        {//current file gets active class
            $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
        
        
        }else{
            $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
    }}

    return $myReturn;
    
}//end makeLinks()






/*
Allows us to send an email that respects the server domain spoofing polices of 
hosts like DH.

$response = safeEmail($to, $subject, $message, $replyTo='','html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}

*/
function safeEmail($to, $subject, $message, $replyTo = '',$contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }
    
    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
    
    if($replyTo !=''){
        $headers[] = 'Reply-To: ' . $replyTo;   
    }
    
    
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();
    
    $headers = implode(PHP_EOL,$headers);

    
    return mail($to, $subject, $message, $headers);

}//end safeEmail()

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

    