<?php 

/*
 This file is for creating Registration of user 
*/

if(isset($_POST['username1']) && isset($_POST['regphoneno']) && isset($_POST['regpassword1']) && isset($_POST['regpassword2']) )
{
    if(!empty($_POST['username1']) && !empty($_POST['regphoneno']) && !empty($_POST['regpassword1']) && !empty($_POST['regpassword2']))
    {  
        //Assigning variable to the values retrieved from Registration form
        $name=@htmlentities($_POST['username1']);
        $regphoneno=@htmlentities($_POST['regphoneno']);
        $regpassword1=@htmlentities($_POST['regpassword1']);
        $regpassword2=@htmlentities($_POST['regpassword2']);
        $firstname1=@htmlentities($_POST['firstname1']);
        $fullname= $firstname1.' '.$name;
        if ($regpassword1 == $regpassword2)
        {
        
        
        // Registration Query variables
           $regquery1="SELECT `name`,`firstname1`,`login`,`loginpassword` FROM `logindata`";
           $regquery_run1=mysql_query($regquery1);
           $length=@mysql_num_rows($regquery_run1);
           $counter=0;
           
           for($count=0;$count<$length;$count++)
           {    
                $check=@mysql_result($regquery_run1,$count,'login');
                if($check==$regphoneno)
                {
                   echo "
                   <script>
                   alert('Account Already  Exist');
                   window.location.href='start.php';
                   </script>
                   ";
                   
                }
                if($check!=$regphoneno)
                {
                    $counter++;
                }
                }
                
                if($counter==$length)
                {
                    $regquery2="INSERT INTO `logindata` (`name`,`firstname`, `login`, `loginpassword`) VALUES ('$fullname','$firstname1', '$regphoneno', '$regpassword1')"; 
                    $regquery_run2=mysql_query($regquery2);
                    echo 
                    "
                        <script>
                        alert('Account Created Successfully');
                        window.location.href='start.php';
                        </script>
                        
                    ";
                }
     
        }
        else
        {
            echo 
            "
            <script>
            alert('Both Password did\'t Match ');
            </script>
            
            ";
        }      
    }   
}

?>