<?php 
/*
Horatio Grant
Personal Webpage
2022-05-12
*/


ob_start();
//require("connect.php"); //get database login info
define ("MAX_NAME_LENGTH", 20);
define ("MAXIMUM_EMAIL_LENGTH", 255);
define ("MAXIMUM_MESSAGE_LENGTH", 255);

if($_SERVER['REQUEST_METHOD']=="POST"){
    $error="";
    $dbConn = new PDO("mysql:host = $hostname; dbname=$dbname",$user,$password);
  
    //captured info
    $name=trim($_POST['input_name']);
    $email=trim($_POST['input_email']);
    $message=trim($_POST['input_message']);
    $date = date("Ymd");

    //validatoin
    if(empty($email)){
        $error="Email is Empty <br>";
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error.="Invalid email format <br>";
       } else if (strlen($email)>MAXIMUM_EMAIL_LENGTH){
        $error.="Email is too long <br>";
       }
    if(empty($name)){
        $error="Message is empty";
    }else if (strlen($name)>MAX_NAME_LENGTH){
        $error.="First name cannot be longer than 20 characters <br>";
      }
    if(empty($message)){
        $error="Message is empty";
    }else if (strlen($message)>MAXIMUM_MESSAGE_LENGTH){
        $error.="First name cannot be longer than 20 characters <br>";
      }
    


    if($error==""){
    try{
        mail("granthoratio@gmail.com","NEW Contact Request",$msg);
        $command="INSERT INTO contactusmessages (email,UserName,UserMessage,createdON ) VALUES(?,?,?,?)";//change insert message
        $stmt= $dbConn->prepare($command);
        $execOk = $stmt->execute(array($email,$name,$message,$date));

        $msg = "TEST from website";

        $msg = wordwrap($msg,70);

      
        
    }catch (PDOException $e){

    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horatio Grant</title>
    <link rel="stylesheet" href="./CSS/css.css">
   <script src="./JS/pageJS.js"></script>
</head>
<body> 
    
    <div class="header middle"><!-- header area -->
    <h1> Horatio Grant</h1>
    <h2> Software Developer </h2>
    
    </div> 
    
    <div class="summary text middle ">
        
            <p ><?php include('./text/summary.txt') ?></p>
           
    </div> 
    <div class="summary text middle"  id=sumEX>
        <p id="sumExtra"><?php include('./text/summaryEXTRA.txt') ?></p>
            <button  id="moreButton">More</button>
        </div>


    <div id="background"></div>
    
    <div > <!-- nav -->
    <nav class="nav" id="Navigation" >
        <ul>
           <a href="resume.php"> <li>Home</li></a>
           <a href="#AboutMe"> <li>Hire Me</li></a>
           <a href="portfolio.php"><li>Portfolio</li></a><!-- Another Website that displays school work and personal Projects -->
          <a href="https://github.com/HoratioGrant/Horatio" target="_blank">  <li>Source Code</li></a><!-- github stuff -->
           <a href="#contact"> <li>Contact</li> </a>
        </ul>
     </nav>
     <nav class="nav" id="Navigation2">
        <ul>
           <a href="resume.php"> <li>Home</li></a>
           <a href="#AboutMe"> <li>About Me</li></a>
           <a href="portfolio.php"><li>Portfolio</li></a><!-- Another Website that displays school work and personal Projects -->
          <a href="https://github.com/HoratioGrant/Horatio" target="_blank">  <li>Source Code</li></a><!-- github stuff -->
           <a href="#Contact"> <li>Contact</li> </a>
        </ul>
     </nav>
    </div>
   
  

    <div class="aboutMe text" >
<h3 id="title_skill">Skills</h3>

<div class="grid-container">
        <div class="grid-item">
            <p>Programing Languages:</p>
        </div>

        <div class="grid-item">
            <p>Software Familiar with:</p>
        </div>

        <div class="grid-item">
                 <p ><?php include('./text/skills.txt') ?></p>
        </div>

        <div class="grid-item">
                 <p ><?php include('./text/programs.txt')?></p>
        </div>
      
     </div>      
            

    <div class="Social" id="contact" class="text">
        <h3 id="title_social">Connect with Me</h3>

        <form action="<?=$_SERVER['PHP_SELF']?>" autocomplete="off" method="POST">
        <div>
                
                <input class="inp" type="text" name="input_name" placeholder="Name">
            </div>
             <div>
             
                <input class="inp" type="text" name="input_email" placeholder="Email">
            </div>
            <div>
               
                <input class="inp" type="text" name="input_message" placeholder="Message">
            </div>
            <div>
                <input class="sub" type="submit" value="Send">
                
            </div>
    
    </form>
                
            <a href="https://www.linkedin.com/in/horatio-grant-3a4234220/" target="_blank"><img id="LinkedIn" src="https://i.ibb.co/Cw0KWSF/linkedin.png" alt="LinkedIn"></a>
         
            
        
    </div>
    
</div>

<footer>
    <p ><?php include('./text/ContactInfo.txt') ?></p>  
</footer>
    
</body>
</html>