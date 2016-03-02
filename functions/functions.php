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
                        
                    $update ="update users set posts='yes' where user_id='$user_id''";
                    run_update = mysqli_query($con,$update);
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
    
    while($row_posts=mysqli_fetch_array($run_posts)){
        
        $post_id = $row_posts['post_id'];
        $user_id = $row_posts['user_id'];
        $post_title = $row_posts['post_title'];
        $content = $row_posts['post_content'];
        $post_date = $row_posts['post_date'];
        
    //getting user who has posted thread
    $user = "select * from users where user_id='$user_id' AND posts='yes'";
        
        $run_user= mysqli_query($con,$user);
        $run_user=mysqli_fetch_array($run_user);
        $user_name = $row_user['user_name'];
        $user_image = $row_user['user_image'];
        
    echo"<div id ='posts'>
    
    <p><img src='' width='50' height='50'></p>
    <h3><a href='user_profile.php?user_id=$user_id'>$user_name</a></h3>
    
    <h3>$post_title</h3>
    <p>$post_date</p>
    <p>$content</p>
    <a href='single.php?post_id=$post_id' style='float:right;'><button>Reply to this</button></a>
    
    </div>
    ";
        
    }
}

?>