 <?php
 session_start();
 if(isset($_POST['phonenumber']) && isset($_POST['password']))
      {
          if(!empty($_POST['phonenumber']) && !empty($_POST['password']))
             {  
                //Retireving data from login form 
                $phoneno=htmlentities( $_POST["phonenumber"]);
                $password=htmlentities($_POST['password']);

                //Running Query
                $query="SELECT `login`,`loginpassword` FROM `logindata` WHERE `loginpassword`='$password' AND `login`='$phoneno'";
                $query_run = mysql_query($query);
                $query_row=mysql_num_rows($query_run);
                $loginfetch=mysql_fetch_assoc($query_run);
                $login=$loginfetch['login'];
                $loginpassword=$loginfetch['loginpassword'];
                
                if($query_run)
                {
            
                 if($phoneno==$login && $password==$loginpassword)
       
                    {
                        echo "
                        
                        <script>
                        alert('Logged IN');
                        </script>
                        
                        ";   
                               
                            ob_start();
                            
                            $_SESSION['userid']=$phoneno;
                                
                    }
                    else
                    {
                    
                    
                            echo "
                            
                            <script>
                            alert('INVALID Creditinal');
                            window.location.href='start.php';
                            </script>
                            
                            ";
                    
                    }
               }
         }
      }
?>