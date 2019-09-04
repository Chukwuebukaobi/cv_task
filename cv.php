<?php
/**
 * Created by PhpStorm.
 * User: Ebullient Ebuka
 * Date: 9/4/2019
 * Time: 1:15 AM
 */



if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($user_name) && !empty($email) && !empty($message)) {
        if(strlen($name)>20 || strlen($email)>50 || strlen($message)>100) {
            echo 'Sorry, maximum length for some field has been exceeded. ';
        }

        $to = 'ebuka@mailinator.com';
        $subject = 'Contact form submitted.';
        $body = $name."\n".$message;
        $headers = 'From:'.$email;

        if (@mail($to, $subject, $headers)) {
            echo 'Thanks for contacting us. We\'ll be in touch soon.';

        } else {
            echo 'Sorry, an error occurred. Please try again later.';
        }

    } else {
        echo 'All fields are required.';
    }

}

?>

<br>

<a href="Chukwuebuka_E_Obi.html"></a>


?>