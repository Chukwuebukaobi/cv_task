<?php
/**
 * Created by PhpStorm.
 * User: Ebullient Ebuka
 * Date: 9/4/2019
 * Time: 1:15 AM
 */



if(isset($_POST['name']) &&isset($_POST['user_email']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['title'])) {

    $name = $_POST['name'];
    $user_email = $_POST['user_email'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];





        $to = $email;
        $subject = $title;
        $body = $message;
        $headers = 'From:'.$user_email;

        if (mail($to, $subject, $headers, $body)) {
            echo 'Email has been sent to ' . $to;

        } else {
            echo 'There is an error sending the email.';
        }

    } else {
        echo 'All fields are required.';
    }



?>

<br>

<a href="index.html"></a>
