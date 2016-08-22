<?php 
session_start();
if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
{   
    $sessionname=$_SESSION['userid'];
    
    mysql_connect('localhost','root','');
    mysql_select_db('jhirwal');
    $query="SELECT `firstname` FROM `logindata` WHERE `login`='$sessionname'";
    $query_run = mysql_query($query);
    $usernamefetch=mysql_result($query_run,0,'firstname');
    echo $usernamefetch;
}
else
{
    echo 'start.php';
}
?>
