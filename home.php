<?php
session_start();
include("includes/connection.php");
?>

<!DOCTYPE html>


<html>
    <head>
        <title>Welcome User!</title>
        <link rel="stylesheet" href="styles/home_style.css" media="all" />
    </head>
    
<body>
    
    <!----------------Container Starts------------------------>
    <div class="container">
        <div id="head_wrap">
            <div id="header">
                <ul id="menu">
                
                <li><a href="home.php">Home</a> </li>
                <li><a href="members.php">Members</a></li>
                <strong>Topics:</strong>
                <?php
                
                    $get_topics = "select * from topics";
                    $run_topics = mysqli_query($con, $get_topics);
                    
                    while($row=mysqli_fetch_array($run_topics)){
                        
                        $topic_id = $row['topic_id'];
                        $topic_title = $row['topic_title'];
                        
                    echo "<li><a href='home.php?topic=$topic_id'>$topic_title</a></li>";
                    
                        
                    }
                    
                ?>
            
                </ul>  
            
            
            
            
            </div>
        
        </div>
        

    </div>
    <!----------------Container Ends--------------------------->

</body>
</html>