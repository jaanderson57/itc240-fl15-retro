<?php
//customer_view.php - shows details of a single customer
?>

<?php include "includes/config.php";?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    $id = (int)$_GET['id']; //cast the data to an integer for security purposes
    
}else{//redirect to safe page
    header('Location:customer_list.php');

}
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sql = "select * from test_Customers where CustomerID = $id"; //this picks just one

    $result = mysqli_query($iConn,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {//show record
        
        while($row = mysqli_fetch_assoc($result))
        {
            $FirstName = stripslashes($row['FirstName']); //stripslashes takes out extra slashes in case of O/'Mally
            $LastName = stripslashes($row['LastName']);
            $Email = stripslashes($row['Email']); 
            $title = "Title Page for " . $FirstName;
            $pageID = $FirstName;
            $Feedback = '';//no feedback necessary
        }    
            
    }else
    {//inform no records
        $Feedback = '<p>This customer does not exist</p>';
    }

?>
<?php include "includes/header.php";?>


<div>
    <h1><?=$pageID?></h1>
<?php

	if($Feedback == '')
	{//data exists, show it
	       echo '<p>';
           echo 'FirstName: <b>' . $FirstName . '</b>';
           echo 'LastName: <b>' . $LastName . '</b>';
           echo 'Email: <b>' . $Email . '</b>';
		   
		   echo '<img src="uploads/customer' . $id . '.jpg" />'; //was img src="customer1.jpg"
           echo '</p>';
		
	}else{//warn user no data
		echo $Feedback;
		
			
	}
    
           echo '<p><a href="customer_list.php">Go Back</a></p>';
        
    //release webserver resources
    @mysqli_free_result($result);

    //close connection to mysql
    @mysqli_close($iConn);
    
?>
</div>
        
<?php include "includes/footer.php";?>                
                
