<?php

    $con = mysqli_connect("localhost" ,"root" ," " ,"pastime");

        function getTopics(){
        global $con;
        
        $get_topics = "select * from topics";
        $run_topics = mysqli_query($con, $get_topics);
                    
        while($row=mysqli_fetch_array($run_topics)){
                        
        $topic_id = $row['topic_id'];
        $topic_title = $row['topic_title'];
                        
        echo "<option value ='$topic_id'$topic_title</option>";
                    
            }
        }
        function insertPost(){
            
            if(isset($_POST['sub'])){
                global $con;
                global $user_id;
                $title = $_POST['title'];
                $content = $_POST ['content'];
                $topic = $_POST['topic'];
                
                
                $insert = "insert into posts (user_id, topic_id, post_title, post_content, post_date) values ('$user_id','$topic','$content', NOW())";
                
                $run = mysqli_query($con,$insert);
                
                    if($run){
                        echo"<h3> Posted to timeline </h3>";
                    }
                     
            }
            
            
        }
?>