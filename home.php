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
                <form method="get" action="results.php" id="form1">
                    <input type="text" name="user_query" placeholder="Search topics" />
                    <input type="submit" name="search" value="Search"/>
                </form>
            </div>
        
        </div>
            <div class = "content">
                <!--------------------User timeline starts-------------------------->
                <div id="user_timerline">
                    <div id="user_details">
                        <?php
                        $user = $_SESSION['user_email'];
                        $get_user = "select * from users where user_email = '$user'";
                        $run_user = mysqli_query($con, $get_user);
                        $row = mysqli_fetch_array($run_user);
                        $user_id = 
                        ?>
                    </div>
                    
                </div>
                <!------------------User timeline ends------------------------------>
                <!------------------Content timeline starts------------------------->
                <div id="content_timeline">
                    <div id="posts">
                    
                    </div>
                </div>
                <!-------------------Content timeline ends-------------------------->
            </div>
        

    </div>
    <!----------------Container Ends--------------------------->

</body>
</html>