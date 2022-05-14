

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
    <div class="header"><!-- header area -->
    <h1> Horatio Grant</h1>
    <h2> Software Developer </h2>
    
    </div>
    <div class="work">
        <p>View My Work ➜</p> 
    </div>

    <div class="nav"> <!-- nav -->
    <nav >
        <ul>
           <a href=""> <li>Home</a></li>
           <a href="#AboutMe"> <li>About Me</li></a>
           <a href=""><li>Portfolio</li></a><!-- Another Website that displays school work and personal Projects -->
          <a href="">  <li>Source Code</li></a><!-- github stuff -->
           <a href="#Contact"> <li>Contact</li> </a>
        </ul>
     </nav>
    </div>

    <div class="aboutMe">
        <h2 id="AboutMe">About Me </h2> 
        <h3>Summary</h3>
            <p><?php include('./text/summary.txt') ?></p>
        <h3>Skills</h3>
            <p><?php include('./text/skills.txt') ?></p>
    </div>


    <div class="Contact">
        <h2 id="Contact">Contact</h2>       
            <a href="https://www.linkedin.com/in/horatio-grant-3a4234220/" target="_blank"><img id="LinkedIn" src="./images/LinkedIN.png" alt="LinkedIn"></a>
            
        
    </div>
    

    
</body>
</html>