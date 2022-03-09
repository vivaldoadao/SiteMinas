<?php

include('../app/database/db3.php');


?>


<?php
class Comment{

private $db1;

public function __construct($db){
    $this->db = $db;

}

public function comment($name,$email,$subject,$description,$post_id,$status){
    $sql = "INSERT INTO cmments(name,email,subject,description,id,status)VALUE('$name','$email','$subject','$description',$post_id,status)";
    $result = mysqli_query($this->db,$sql);
    return $result;
}



public function getCommentsBySlug($post_id){
    $sql = "SELECT * FROM cmments WHERE id = '$post_id' AND  status=1";
    $result = mysqli_query($this->db,$sql);
    return $result;
}

public function countComments($post_id){
    $sql = "SELECT * FROM cmments WHERE id = '$post_id' AND  status=1";
    $result = mysqli_query($this->db,$sql);
    return mysqli_num_rows($result);
}
public function getPendingComments(){
    $sql = "SELECT * FROM cmments WHERE  status=0";
    $result = mysqli_query($this->db,$sql);
    return $result;
}
public function upDate($post_id){
    $sql = "UPDATE cmments SET   status=1 WHERE id='$post_id'";
    $result = mysqli_query($this->db,$sql);
    return $result;
}
public function Delete($post_id){
    $sql = "DELETE FROM cmments WHERE  id='$post_id'";
    $result = mysqli_query($this->db,$sql);
    return $result;
}

public function getPopularPosts(){
    $sql = "SELECT * 
            FROM pos 
            LEFT JOIN cmments on pos.id=cmments.id 
            GROUP BY  cmments.id 
            ORDER BY count(cmments.id) 
            DESC LIMIT 4";
     $result = mysqli_query($this->db,$sql);
     return $result;
}


public function countCommentsRows(){
    $sql = "SELECT * FROM cmments ";
    $result = mysqli_query($this->db,$sql);
    return mysqli_num_rows($result);
}

public function countPostsRows(){
    $sql = "SELECT * FROM post";
    $result = mysqli_query($this->db,$sql);
    return mysqli_num_rows($result);
}

public function countTategoryRows(){
    $sql = "SELECT * FROM category ";
    $result = mysqli_query($this->db,$sql);
    return mysqli_num_rows($result);
}

public function countUsersRows(){
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->db,$sql);
    return mysqli_num_rows($result);
}






}


?>
