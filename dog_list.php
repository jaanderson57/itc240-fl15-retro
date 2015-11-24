<?php
//dog_list.php - shows a list of dogs
?>

<?php include "includes/config.php";?>
<?php include "includes/header.php";?>


<div>
    <h1><?=$pageID?></h1>
<?php    
     
    $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    $sql = "select * from Dogs";

    $result = mysqli_query($iConn,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {//show records
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<p>';
            echo 'Dog Breed: '.'<a href="dog_view.php?id=' . $row['DogID'] . '">' . $row['Dog'] .'</a>';
            
            echo '</p>';
        }    
            
    }else
    {//inform no records
        echo '<p>Currently no dog records</p>';
    }
    //release webserver resources
    @mysqli_free_result($result);

    //close connection to mysql
    @mysqli_close($iConn);
    
?>
</div>
        
<?php include "includes/footer.php";?>                
                
