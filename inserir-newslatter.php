<?php
include('app/controllers/site.php');
$table = 'newslatters';
$errors = array();
$id = '';
$email = '';


if (isset($_POST['add-newslatterSite'])) {

  // dd($_POST);

   $errors = validateNewslatterSite($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-newslatterSite']);
        //dd($_POST);
        $newslatter_id = create($table, $_POST);
        echo '<div class="alert alert-success alert-dismissable fade in">
		<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
    
		<p>Email Subscrito com sucesso</p></div>';
        
        echo "<script> window.location = 'index.php' </script>";
        exit();
    }else {
        $email = $_POST['email'];
    }
  
}


 
 
    

?> 





