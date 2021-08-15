var page = 1;
var w;
var groupID;

window.onload = function(){
    watchChangeSize();
    showSlides(page);
}
window.onresize=function(){  
    watchChangeSize();
    showSlides(page);
}

function watchChangeSize (){    
    w = window.innerWidth;
}

function showSlides(page){
  father = document.getElementById("slideshow-container");
  father.innerHTML = "";
  if(w > 768){
      console.log(w);
      switch(page){
        case 1:
          father.innerHTML = '<div class="mySlides fade" id="11" style="display:block;">'+
          '<img src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
          '</div>'+

          '<div class="mySlides" id="1" style="display:block;">'+
            '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="2" style="display:block;">'+
            '<img src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
          '</div>';
          break;
        case 2:
          father.innerHTML = '<div class="mySlides fade" id="1" style="display:block;">'+
          '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
          '</div>'+

          '<div class="mySlides" id="2" style="display:block;">'+
            '<img src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="3" style="display:block;">'+
            '<img src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
          '</div>';
          break;  
        case 3:
          father.innerHTML = '<div class="mySlides fade" id="2" style="display:block;">'+
          '<img src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
          '</div>'+

          '<div class="mySlides" id="3" style="display:block;">'+
            '<img src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="4" style="display:block;">'+
            '<img src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
          '</div>';
          break;
        case 4:
          father.innerHTML = '<div class="mySlides fade" id="3" style="display:block;">'+
          '<img src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
          '</div>'+

          '<div class="mySlides" id="4" style="display:block;">'+
            '<img src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="5" style="display:block;">'+
            '<img src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
          '</div>';
          break;
        case 5:
          father.innerHTML = '<div class="mySlides fade" id="4" style="display:block;">'+
          '<img src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
          '</div>'+

          '<div class="mySlides" id="5" style="display:block;">'+
            '<img src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="6" style="display:block;">'+
            '<img src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
          '</div>';  
          break;
        case 6:
          father.innerHTML = '<div class="mySlides fade" id="5" style="display:block;">'+
          '<img src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
          '</div>'+

          '<div class="mySlides" id="6" style="display:block;">'+
            '<img src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="7" style="display:block;">'+
            '<img src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
          '</div>';
          break;
        case 7:
          father.innerHTML = '<div class="mySlides fade" id="6" style="display:block;">'+
          '<img src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
          '</div>'+

          '<div class="mySlides" id="7" style="display:block;">'+
            '<img src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="8" style="display:block;">'+
            '<img src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
          '</div>';
          break;
        case 8:
          father.innerHTML = '<div class="mySlides fade" id="7" style="display:block;">'+
          '<img src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
          '</div>'+

          '<div class="mySlides" id="8" style="display:block;">'+
            '<img src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="9" style="display:block;">'+
            '<img src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
          '</div>';
          break;    
        case 9:
          father.innerHTML = '<div class="mySlides fade" id="8" style="display:block;">'+
          '<img src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
          '</div>'+

          '<div class="mySlides" id="9" style="display:block;">'+
            '<img src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="10" style="display:block;">'+
            '<img src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
          '</div>';
          break;      
        case 10:
          father.innerHTML = '<div class="mySlides fade" id="9" style="display:block;">'+
          '<img src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
          '</div>'+

          '<div class="mySlides" id="10" style="display:block;">'+
            '<img src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="11" style="display:block;">'+
            '<img src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
          '</div>';
          break;
        case 11:
          father.innerHTML = '<div class="mySlides fade" id="10" style="display:block;">'+
          '<img src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
          '</div>'+

          '<div class="mySlides" id="11" style="display:block;">'+
            '<img src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
          '</div>'+

          '<div class="mySlides fade" id="1" style="display:block;">'+
            '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
          '</div>';
          break;  
      }
  } else if(w <= 768){
        console.log(w);
        switch(page){
          case 1:
            father.innerHTML = 
            '<div class="mySlides" id="1" style="display:block;">'+
              '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
            '</div>';
   
            break;
          case 2:
            father.innerHTML = 
            '<div class="mySlides" id="2" style="display:block;">'+
              '<img src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
            '</div>';

            break;  
          case 3:
            father.innerHTML =
            '<div class="mySlides" id="3" style="display:block;">'+
              '<img src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
            '</div>';

            break;
          case 4:
            father.innerHTML = 
            '<div class="mySlides" id="4" style="display:block;">'+
              '<img src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
            '</div>'

            break;
          case 5:
            father.innerHTML = 
            '<div class="mySlides" id="5" style="display:block;">'+
              '<img src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
            '</div>';  

            break;
          case 6:
            father.innerHTML = 
            '<div class="mySlides" id="6" style="display:block;">'+
              '<img src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
            '</div>';

            break;
          case 7:
            father.innerHTML = 
            '<div class="mySlides" id="7" style="display:block;">'+
              '<img src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
            '</div>';

            break;
          case 8:
            father.innerHTML = 
            '<div class="mySlides" id="8" style="display:block;">'+
              '<img src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
            '</div>';

            break;    
          case 9:
            father.innerHTML =
            '<div class="mySlides" id="9" style="display:block;">'+
              '<img src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
            '</div>';

            break;      
          case 10:
            father.innerHTML =
            '<div class="mySlides" id="10" style="display:block;">'+
              '<img src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
            '</div>';

            break;
          case 11:
            father.innerHTML = 
            '<div class="mySlides" id="11" style="display:block;">'+
              '<img src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
            '</div>';

            break;  
        }
  }

}

function showPlusSlides() {
  ++page;
  if(page > 11){
    page = 1;
  }
  showSlides(page);
}

function showReduceSlides() {
  --page;
  if(page < 1){
    page = 11;
  }
  showSlides(page);
}

function send(groupID){
  location.href="works_member.php?id=" +groupID;
}