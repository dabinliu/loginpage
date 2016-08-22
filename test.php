<?php 
session_start();
echo
$file='C:/xampp/tmp/sess_'.session_id($_SESSION['userid']);
echo '<br>'.filesize($file).'<br>';
if(unlink($file))
{
    echo 'deleted';
}
else
{
    echo 'error';
}
?>