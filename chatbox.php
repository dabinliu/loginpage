<!-- This file is for creating chatbox //-->

<!DOCTYPE html>
<html>
    <head>
       </head>
        <body>
            
        </body>
    </html>

<?php 
session_start();


echo "sess_".session_id($_SESSION['userid']);

if(isset($_SESSION['userid']) && !empty($_SESSION['userid']) )
{   $sessionname=$_SESSION['userid'];
    mysql_connect('localhost','root','');
    mysql_select_db('jhirwal');
    $query1="SELECT `firstname` FROM `logindata` WHERE `login`='$sessionname'";
    $query2="SELECT `login`,`firstname` FROM `logindata`";
    $query_run1 = mysql_query($query1);
    $query_run2 = mysql_query($query2);
    $usernamefetch=mysql_result($query_run1,0,'firstname');
    
    for($a=0;$a<mysql_num_rows($query_run2);$a++){
    $id=mysql_result($query_run2,$a,'login');
    if($_SESSION['userid']==$id){
    echo '<br>'.$usernamefetch.' is online';
    }
   }
}
?>