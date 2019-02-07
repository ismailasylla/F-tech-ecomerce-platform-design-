<?php
// include_once 'resource/session.php';
include_once '../resource/database.php';
include_once '../resource/utilities.php';

if(isset($_POST['email'])){
    //array to hold errors
    $form_errors = array();

//validate
    $required_fields =  $_POST['email'] != '' &&  $_POST['password'] != '';
    

    if($required_fields){

        //collect form data
        $user = $_POST['email'];
        $password = $_POST['password'];

        //check if user exist in the database
        $sqlQuery = "SELECT * FROM users WHERE email = :email";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':email' => $user));

       while($row = $statement->fetch()){
           
           $hashed_password = $row['password'];
           

           if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $row['id'];;
               $_SESSION['fullname'] = $row['fullname'];;
               $_SESSION['email'] = $row['email'];;

            //    header("location: http://localhost/paul1/index.php");
               echo 'true';

           }else{
               echo 'false';

               $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Invalid email or password</p>";
           }
           
       }

       if(!isset($_SESSION['id']))
        echo 'false';

    }else{
        echo 'missing_fields';
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'>Remplicer le formulaire</p>";
        }else{
            $result = "<p style='color: red;padding: 20px;'>Identifiez-vous </p>";
        }

        // .count($form_errors). here
    }
}
else
 echo 'nothing';
?>