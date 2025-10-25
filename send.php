<?php
if (isset($_POST['submit']))
{
    $to = "info@relaisbuonfanti.it";
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $subject = "NUOVO MESSAGGIO DA ".$from;
    $headers = "From:".$from;
    $result = mail($to, $subject, $message, $headers);

    if ($result)
    {
        echo 'Your message was sent';

    }
    else
    {
        echo 'Oops! Your message wasn’t sent. Try again later';

    }
}
?>