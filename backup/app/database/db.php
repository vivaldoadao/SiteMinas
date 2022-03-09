<?php
session_start();
require('connect.php');
// Function to be deleted
function dd($value){
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
function executeQuery($sql, $data){

        global $conn;
        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $types = str_repeat('s', count($value));
        $stmt->bind_param($types, ...$value);
        $stmt->execute();
        return $stmt;
}
function selectall($table, $condiction = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($condiction)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        // retern only record that match with the condiction
        //$sql = "SELECT * FROM $table WHERE  username = Znat AND admin = 0";
        $i = 0;
        foreach ($condiction as $key => $value) {
            if ($i === 0) {
                $sql = $sql. " WHERE $key=?";
            } else {
                $sql = $sql. " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql,  $condiction);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}
function selectOne($table, $condiction){

    global $conn;
    $sql = "SELECT * FROM $table";
        $i = 0;
        foreach ($condiction as $key => $value) {
            if ($i === 0) {
                $sql = $sql. " WHERE $key=?";
            } else {
                $sql = $sql. " AND $key=?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";

        $stmt = executeQuery($sql,  $condiction);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
}
function create($table,$data){
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql. " $key=?";
        } else {
            $sql = $sql. ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql,  $data);
    $id = $stmt->insert_id;
    return $id;
}
function update($table,$id , $data){
    global $conn;
    $sql = "UPDATE  $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql. " $key=?";
        } else {
            $sql = $sql. ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql,  $data);
    $id = $stmt->insert_id;
    return $stmt->affected_rows;
}

function delete($table,$id){
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = executeQuery($sql, ['id' => $id]);
    $id = $stmt->insert_id;
    return $stmt->affected_rows;
}

function getPublishedPosts(){
    global $conn;
  
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.published=? ORDER BY created_on  DESC LIMIT 6";
    $stmt = executeQuery($sql, ['published' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPublishedPostsLatest(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.published=? ORDER BY created_on  DESC LIMIT 3";
    $stmt = executeQuery($sql, ['published' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}
function getPublishedPostsImages(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.published=? ORDER BY created_on  DESC LIMIT 9";
    $stmt = executeQuery($sql, ['published' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getMorePosts(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.published=? ORDER BY created_on  ASC LIMIT 6";
    $stmt = executeQuery($sql, ['published' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}
function getEmphasisPosts(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.emphasis=? ORDER BY created_on  DESC LIMIT 4" ;
    $stmt = executeQuery($sql, ['emphasis' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
    
}
function getEmphasisPosts1(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.emphasis=? ORDER BY created_on  DESC LIMIT 1" ;
    $stmt = executeQuery($sql, ['emphasis' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}
function getEmphasisPosts2(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p LEFT JOIN category AS c ON p.category_id=c.id WHERE p.emphasis=? ORDER BY created_on  ASC LIMIT 2" ;
    $stmt = executeQuery($sql, ['emphasis' =>1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}
function getPostsByCategoryId($category_id){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND category_id=?";
    $stmt = executeQuery($sql, ['published' =>1, 'category_id' => $category_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategory_INTERNACIONAL2(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT 4";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'INTERNACINAL']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}
function getPostsByCategory_INTERNACIONAL(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT 1";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'INTERNACINAL']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategory_INTERNACIONALPage(){
    global $conn;
    $limit =10;
    if (isset($_GET['page'])) {
        # code...
        $page = $_GET['page'];

    }else {
        $page = 1;
    }
    $start = ($page-1)* $limit;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT $start,$limit";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'Internacional']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategorySECTOR_DIAMANTIFEROPage(){
    global $conn;
    $limit =10;
    if (isset($_GET['page'])) {
        # code...
        $page = $_GET['page'];

    }else {
        $page = 1;
    }
    $start = ($page-1)* $limit;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT $start,$limit";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'Sector Diamantifero']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}


function getPostsByCategorySECTOR_DIAMANTIFERO(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT 1";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'SECTOR DIAMANTIFERO']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategorySECTOR_DIAMANTIFERO2(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT 4";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'SECTOR DIAMANTIFERO']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategoryENTREVISTAS(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT 2";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'ENTREVISTAS']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function searchPosts($term){
    $match = '%' .  $term . '%';
    global $conn;
    $limit =10;
    if (isset($_GET['page'])) {
        # code...
        $page = $_GET['page'];

    }else {
        $page = 1;
    }
    $start = ($page-1)* $limit;
    $sql = "SELECT
     p.*, c.name 
     FROM post AS p 
     JOIN category AS c 
     ON p.category_id=c.id 
     WHERE p.published=? 
     AND p.title LIKE ?
     OR p.body LIKE ? LIMIT $start,$limit";
    $stmt = executeQuery($sql,  ['published' =>1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getPostsByCategoryVÍDEOS_EVENTOS(){
    global $conn;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT 2";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'Vﾃ好EOS EVENTOS']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategoryVIDEOS_EVENTOSPage(){
    global $conn;
    $limit =10;
    if (isset($_GET['page'])) {
        # code...
        $page = $_GET['page'];

    }else {
        $page = 1;
    }
    $start = ($page-1)* $limit;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT $start,$limit";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'Vﾃｭdeos Eventos']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function getPostsByCategoryGeneralidadePage(){
    global $conn;
    $limit =10;
    if (isset($_GET['page'])) {
        # code...
        $page = $_GET['page'];

    }else {
        $page = 1;
    }
    $start = ($page-1)* $limit;
    $sql = "SELECT p.*, c.name FROM post AS p JOIN category AS c ON p.category_id=c.id WHERE p.published=? AND c.name=? ORDER BY created_on  DESC LIMIT $start,$limit";
    $stmt = executeQuery($sql, ['published' =>1, 'name' => 'Generalidade']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}


function topadvertise(){
    global $conn;
    $sql = "SELECT a.*  FROM advertises AS a  WHERE a.published=? AND a.position=? ORDER BY created_on  DESC LIMIT 1";
    $stmt = executeQuery($sql, ['published' =>1, 'position' => 'Topo']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}


function sideBarAdvertise(){
    global $conn;
    $sql = "SELECT a.*  FROM advertises AS a  WHERE a.published=? AND a.position=? ORDER BY created_on  DESC LIMIT 1";
    $stmt = executeQuery($sql, ['published' =>1, 'position' => 'Lateral']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function centroAdvertise(){
    global $conn;
    $sql = "SELECT a.*  FROM advertises AS a  WHERE a.published=? AND a.position=? ORDER BY created_on  DESC LIMIT 1";
    $stmt = executeQuery($sql, ['published' =>1, 'position' => 'Centro']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function downAdvertise(){
    global $conn;
    $sql = "SELECT a.*  FROM advertises AS a  WHERE a.published=? AND a.position=? ORDER BY created_on  DESC LIMIT 1";
    $stmt = executeQuery($sql, ['published' =>1, 'position' => 'Baixo']);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
   
}

function session(){
    if (empty($_SESSION['username'])) {
        header("location:../login.php");
    }
   
}






?>