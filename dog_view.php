<?php
//dog_view.php - shows details of a single customer
?>

<?php include "includes/config.php";?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    $id = (int)$_GET['id']; //cast the data to an integer for security purposes
    
}else{//redirect to safe page
    header('Location:dog_list.php');

}
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sql = "select * from Dogs where DogID = $id"; //this picks just one

    $result = mysqli_query($iConn,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {//show record
        
        while($row = mysqli_fetch_assoc($result))
        {
            $Dog = stripslashes($row['Dog']); //stripslashes takes out extra slashes in case of O/'Mally
            $Description = stripslashes($row['Description']);
            $Weight = stripslashes($row['Weight']); 
			$LifeSpan = stripslashes($row['LifeSpan']); 
            $title = "Title Page for " . $Dog;
            $pageID = $Dog;
            $Feedback = '';//no feedback necessary
        }    
            
    }else
    {//inform no records
        $Feedback = '<p>This dog does not exist</p>';
    }

?>
<?php include "includes/header.php";?>


<div>
    <h1><?=$pageID?></h1>
<?php

	if($Feedback == '')
	{//data exists, show it
	       echo '<p>';
		   echo '<img src="uploads/dog' . $id . '.jpg" />' . '<br>'; //was img src="dog1.jpg"
           echo 'Dog Breed: ' . '<b>' . $Dog . '</b>' . '<br>';
           echo 'Description: ' . '<b>' . $Description . '</b>' . '<br>';
           echo 'Weight: ' . '<b>' . $Weight . '</b>' . '<br>';
		   echo 'Life Span: ' . '<b>' . $LifeSpan . '</b>' . '<br>';
		   echo '</p>';
		
	}else{//warn user no data
		echo $Feedback;
		
			
	}
    
           echo '<p><a href="dog_list.php">Go Back</a></p>';
        
    //release webserver resources
    @mysqli_free_result($result);

    //close connection to mysql
    @mysqli_close($iConn);
    
?>
</div>
        
<?php include "includes/footer.php";?>                
                
