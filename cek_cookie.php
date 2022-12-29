<?php
if(isset($HTTPS_COOKIE_VARS["cookie_no_induk"]))
{
    echo("Isi data <b>".$HTTPS_COOKIE_VARS["cookie_no_induk"]. "</b><br>");
    echo("Click <a href=\"cookie_destroy.php\">next</a> untuk menghapus id !");
}else
{
    header("Location: cookie.php");
    exit;
}
?>