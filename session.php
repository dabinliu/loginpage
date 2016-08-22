<!-- This page is for viewing profile //-->

<!DOCTYPE html>
<html>
    <head>
        <title>Jhirwal
            </title>
            <style type="text/css">
        @import url("CSS/profilecss.css");
       
        </style>
       
    </head>
        <body >
    <!-- This part is for desinging the upper header part //-->
       
    <div  id="profileheader" >
                
           <a href="session.php"> <img src="images/logo.jpg" width="50" height="50" id="profilelogo"></a>
            <input type="text" id="findfriend" placeholder="Find Friends">
                  
            
            <div id="profiletools">
            
             <input type="button" onclick="getlist();" class="profilename" value="<?php include 'username.php'; ?>"  /><br>
                
                <div id="admincontrol">
                    
                    
                    <a href="#">View Profile</a><br>
                    <a href="logout.php">Log Out</a>
                   
                    </div>
            
            <img src="images/<?php echo $_SESSION['userid']; ?>.jpg" id="profilepic1" title="DP" />
            
            </div>
            
            <br><br><br><br>
 
            
    <hr id="headerbottom">        
    </div>
    
    <br><br>
 <!-- This part for actual profile of user //-->
 
  <div id="profile">
      
     <img src='images/<?php echo $_SESSION['userid'];?>.jpg' id="profilepic2" />
     <br>
     <br>
     <div id="nameborder">
     <h  id="nameborder1">Hello, <?php echo $usernamefetch; ?></h>
     <br><br>
     </div><br>
     <div id="nameborder">
     <a href="session.php" id="home">Home</a><br>
     <a href="friends.php">Friends</a><br>
     <a href="messages.php">Messages</a><br><br>
     </div>
     <div id="nameborder">
     <br><a href="session.php" id="home">Photo</a><br>
     <a href="session.php" id="home">Video</a><br><br>
     <a href="session.php" id="home">Add File</a><br><br>
     </div>
     
     </div>   
     
     <!-- THis part is for chatbox //-->
     <iframe src="chatbox.php" id="chat"></iframe>
     
  
       
         <script type="text/javascript" src="javascript/script.js">
            
        </script>
    
    
            </body>
    </html>