<?php
session_start();
if(isset($HTTP_SESSION_VAR["session_status"]))
{
    echo("<pre>");
    echo("User Name :<b>".$HTTP_SESSION_VAR["session_user"]."</b><br>");
    echo("password  :<b>".$HTTP_SESSION_VAR["session_password"]."</b><br>");
    echo("Click <a href=\"loggout.php\">Loggout</a> untuk keluar !");
    echo("</pre>");
}else
{
    header("Location: loggin.php");
    exit;
}
?>