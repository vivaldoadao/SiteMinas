<?php

include('db.php');

 class Comment{

    private $db;

    public function __construct($db){
        $this->db = $db;

    }

    public function comment($name,$email,$subject,$description,$post_id,$status){
        $sql = "INSERT INTO cmments(name,email,subject,description,post_id,status)VALUE('$name','$email','$subject','$description','$post_id',status)";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }

    public function getCommentsBySlug($post_id){
        $sql = "SELECT * FROM cmments WHERE id = $post_id AND  status=1";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }

    public function countComments($post_id){
        $sql = "SELECT * FROM cmments WHERE id = $post_id AND  status=1";
        $result = mysqli_query($this->db,$sql);
        return mysqli_num_rows($result);
    }
    public function getPendingComments(){
        $sql = "SELECT * FROM cmments WHERE  status=0";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }
    public function upDate($id){
        $sql = "UPDATE cmments SET   status=1 WHERE id='$id'";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }
    public function Delete($id){
        $sql = "DELETE FROM cmments WHERE  id='$id'";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }

    public function getPopularPostsByComments(){
        $sql = "SELECT * 
                FROM post 
                LEFT JOIN cmments on post.id=cmments.id 
                GROUP BY  cmments.id 
                ORDER BY count(cmments.id) 
                DESC LIMIT 5";
         $result = mysqli_query($this->db,$sql);
         return $result;
    }

    public function Views($post_id){
        $sql = "INSERT INTO views(post_id)VALUE($post_id)";
        $result = mysqli_query($this->db,$sql);
        return $result;
    }
    public function getPopularPostsByViews(){
        $sql = "SELECT * 
                FROM post 
                LEFT JOIN views on post.id=views.post_id 
                GROUP BY  views.post_id
                ORDER BY count(views.post_id) 
                DESC LIMIT 4";
         $result = mysqli_query($this->db,$sql);
         return $result;
    }
    public function countPostsViews($id){
        $sql = "SELECT * FROM views WHERE post_id = $id ";
        $result = mysqli_query($this->db,$sql);
        return mysqli_num_rows($result);
    }

 























    public function countViews(){
        $sql = "SELECT * FROM views WHERE id = $post_id";
        $result = mysqli_query($this->db,$sql);
        return mysqli_num_rows($result);
    }

   




 }
?>