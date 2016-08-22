

 <!-- This is for PHP back-end process //-->
 
 
 <?php 
 
    
    // Sql COnnector
   include 'connectsql.php';

    /* 
    
    This is for Login Backend.........
    including loginbackend.php file 
    
    */
    
    require 'backend/loginbackend.php';

    /* 
    This is for Registration...................
    including gistrationbackend.php file
    */

    require 'backend/registrationbackend.php';
    
    //Checking if user logged in or not 
    
    function loggedin()
    {
        if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
            {
                return true;
            }
        else
            {
                return false;
                
            }
    }
    
    
        if(loggedin())
            {
            header('Location: session.php');    
            }
        else
            {
            include 'start2.php';
            }
   
    
?>