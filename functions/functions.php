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

?>