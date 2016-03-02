<?php

    $con = mysqli_connect("localhost" ,"root" ," " ,"pastime");
        
        //function for getting topics
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
        //function for inserting posts
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
//function for displaying posts

function get_posts(){
    global $con;
    
    $per_page = 5;
    if (isset($GET['page'])) {
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    $start_from = ($page-1) * $per_page;
    
    $get_posts = "select * from posts ORDER by 1 DESC LIMIT $start_from, $per_page";
    
    $run_posts = mysqli_query($con,$get_posts);
    
}

?>