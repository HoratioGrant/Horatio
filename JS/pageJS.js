window.onload = (event) =>{

var sumMore=false
var nav = document.getElementById("Navigation");
var nav2=document.getElementById("Navigation2");
var sumBTN = document.getElementById("moreButton");


nav.style.width="10vw"
document.addEventListener('scroll',function(e){//code runs everytime user scrolls
    
         if(!isInViewport(nav)){//if nav cant be seen
nav2.style.visibility = "visible";
    }else {//if nav cant be seen
        nav2.style.visibility = "hidden";
            } 
})

sumBTN.addEventListener('click',function(e){//
    if (!sumMore){
        document.getElementById("sumExtra").style.display="block"; 
        if(window.innerHeight<=900 && window.innerWidth<900){
            document.getElementById("sumEX").style.top="850px" 
        }else if(window.innerWidth<600){
            document.getElementById("sumEX").style.top="100vh" 
        }else{            
            document.getElementById("sumEX").style.top="55vh"        
            
        }
        sumBTN.innerText = "Less";
        sumMore=true;
    }else{
         document.getElementById("sumExtra").style.display="none"; 
          if(window.innerHeight<=900 && window.innerWidth<900){
            document.getElementById("sumEX").style.top="800px" 
        }else if(window.innerWidth<600){
            document.getElementById("sumEX").style.top="94vh"
        } else{
            document.getElementById("sumEX").style.top="50vh"
        }     
        sumBTN.innerText = "More";
        sumMore=false;
    }
  
})

 


}

function isInViewport(element) {//checks to see if element can be seen
    var rect = element.getBoundingClientRect();
    
    return (
        rect.bottom >= 50 &&
        rect.right >= 10 &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.left <= (window.innerWidth || document.documentElement.clientWidth)
    );
}



    /*
{//code runs everytime user scrolls
       if(!isInViewport(nav)){//if nav cant be seen
nav.setAttribute("class","top");
        
    } 
    if(!isInViewport(ab)){//if nav cant be seen
        nav.setAttribute("class","left");
           } 
})

//something extra button 

<p class="sum" id="sumExtra"><?php include('./text/summaryEXTRA.txt') ?></p>
    */


