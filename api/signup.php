<?php 
include_once("../resource/database.php");

        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sqlQuery = "INSERT INTO users VALUES( :id, :fullname, :password, :email, NOW() )";
        $statement = $db->prepare($sqlQuery);
        // $statement->execute(array());
        $statement->execute(array(':id' => null,
                                  ':fullname' => $_POST['fullname'], 
                                  ':password' => $hashed_password,
                                  ':email' => $_POST['email']
                            ));
?>