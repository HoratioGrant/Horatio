<?php 
/*
Horatio Grant
Personal Webpage
2022-05-12
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/css.css">
   
</head>
<body> 
    <script src="./JS/pageJS.js"></script>
    <div class="header"><!-- header area -->
    <h1> Horatio Grant</h1>
    <h2> Software Developer </h2>
    
    </div>
    <div class="work">
    <a href="portfolio.php"><p>View My Work ➜</p> </a>
    </div>
    
    <div class="nav"> <!-- nav -->
    <nav id="Navigation" >
        <ul>
           <a href="resume.php"> <li>Home</li></a>
           <a href="#AboutMe"> <li>About Me</li></a>
           <a href="portfolio.php"><li>Portfolio</li></a><!-- Another Website that displays school work and personal Projects -->
          <a href="https://github.com/HoratioGrant/Horatio" target="_blank">  <li>Source Code</li></a><!-- github stuff -->
           <a href="#contact"> <li>Contact</li> </a>
        </ul>
     </nav>
     <nav id="Navigation2">
        <ul>
           <a href="resume.php"> <li>Home</li></a>
           <a href="#AboutMe"> <li>About Me</li></a>
           <a href="portfolio.php"><li>Portfolio</li></a><!-- Another Website that displays school work and personal Projects -->
          <a href="https://github.com/HoratioGrant/Horatio" target="_blank">  <li>Source Code</li></a><!-- github stuff -->
           <a href="#Contact"> <li>Contact</li> </a>
        </ul>
     </nav>
    </div>

    <div class="aboutMe">
        <h2 id="AboutMe">About Me </h2> 
        <h3 id="title_sum">Summary</h3>
            <p class="sum"><?php include('./text/summary.txt') ?></p>
            <p class="sum" id="sumExtra"><?php include('./text/summaryEXTRA.txt') ?></p>
            <button class="sum" id="moreButton">More</button>
       
        <h3 id="title_skill">Skills</h3>
            <p class="sum"><?php include('./text/skills.txt') ?></p>
            
    


    <div class="Social" id="contact">
        <h3 id="title_social">Social</h3>
            <p class="sum"><?php include('./text/ContactInfo.txt') ?></p>      
            <a class="sum" href="https://www.linkedin.com/in/horatio-grant-3a4234220/" target="_blank"><img id="LinkedIn" src="./images/linkedin.png" alt="LinkedIn"></a>
            <a class="sum" href="https://www.linkedin.com/in/horatio-grant-3a4234220/" target="_blank"><img id="LinkedIn" src="./images/gmail.png" alt="LinkedIn"></a>
            
        
    </div>
    
</div>
    
</body>
</html>