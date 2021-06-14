var page = 1;
var w;
var url = location.href;
var keyValue = url.split('?')[1];
var groupId = keyValue.split('=')[1]; 
/*var showSlides;
var showPlusSlides;
var showReduceSlides;*/





window.onload = function(){
    watchChangeSize();
    /*var url = location.href;
    keyValue = url.split('?')[1];
    groupId = keyValue.split('=')[1]; */
    //console.log("groupId:",groupID);
    //var xmlhttp = new XMLHttpRequest();
    /*xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {       
            showSlides = JSON.parse(this.responseText);
            console.log("showSlides:",typeof(showSlides));
            console.log(showSlides);
            //eval(showSlides(page));
            showSlides(page);
        }
    };*/
    /*xmlhttp.open("GET", "showGroupMember.php?id=" + groupId, false);
    xmlhttp.send();
    showSlides = xmlhttp.responseText;
    console.log("showSlides:",typeof(showSlides));
    console.log(showSlides);
    eval(showSlides(page));

    var xmlhttp2 =  new XMLHttpRequest();*/
    /*xmlhttp2.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          showPlusSlides = this.responseText;
          console.log("showPlusSlides:",typeof(showPlusSlides));
          console.log(showPlusSlidess);
      }
    };*/
    /*xmlhttp2.open("GET", "showGroupMemberPlus.php?id=" + groupId, false);
    xmlhttp2.send();
    showPlusSlides = xmlhttp2.responseText;
    console.log("showPlusSlides:",typeof(showPlusSlides));
    console.log(showPlusSlides);

    var xmlhttp3 =  new XMLHttpRequest();*/
    /*xmlhttp3.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          showReduceSlides = this.responseText;
          console.log("showReduceSlides:",typeof(showReduceSlides));
          console.log(showReduceSlidess);
      }
    };*/
    /*xmlhttp3.open("GET", "showGroupMemberReduce.php?id=" + groupId, false);
    xmlhttp3.send();
    showReduceSlides = xmlhttp3.responseText;
    console.log("showReduceSlides:",typeof(showReduceSlides));
    console.log(showReduceSlides);*/
    
}
window.onresize=function(){  
    watchChangeSize();
    showSlides(page);
}

function watchChangeSize (){    
    w = window.innerWidth;
}

function showSlides(page){
    console.log("被呼叫");
    father = document.getElementById("slideshow-container");
    father.innerHTML = "";   
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "showGroupMember.php?id=" + groupId, false);
    xmlhttp.send();
    console.log(xmlhttp.responseText);
}




/*function showSlides(page){
  console.log("被呼叫");
  father = document.getElementById("slideshow-container");
  father.innerHTML = "";
  
  

  if(w > 768){
      console.log(w);
      switch(page){
        case 1:
          father.innerHTML = '<div class="mySlides fade" id="11" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/11.jpg" style="width:100%"/></a>'+
          '</div>'+

          '<div class="mySlides" id="1" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/1.jpg" style="width:100%"/></a>'+
          '</div>'+

          '<div class="mySlides fade" id="2" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/2.jpg" style="width:100%"/></a>'+
          '</div>';
          break;
        case 2:
          father.innerHTML = '<div class="mySlides fade" id="1" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/1.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="2" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/2.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="3" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/3.jpg" style="width:100%"></a>'+
          '</div>';
          break;  
        case 3:
          father.innerHTML = '<div class="mySlides fade" id="2" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/2.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="3" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/3.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="4" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/4.jpg" style="width:100%"></a>'+
          '</div>';
          break;
        case 4:
          father.innerHTML = '<div class="mySlides fade" id="3" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/3.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="4" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/4.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="5" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/5.jpg" style="width:100%"></a>'+
          '</div>';
          break;
        case 5:
          father.innerHTML = '<div class="mySlides fade" id="4" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/4.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="5" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/5.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="6" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/6.jpg" style="width:100%"></a>'+
          '</div>';  
          break;
        case 6:
          father.innerHTML = '<div class="mySlides fade" id="5" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/5.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="6" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/6.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="7" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/7.jpg" style="width:100%"></a>'+
          '</div>';
          break;
        case 7:
          father.innerHTML = '<div class="mySlides fade" id="6" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/6.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="7" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/7.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="8" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/8.jpg" style="width:100%"></a>'+
          '</div>';
          break;
        case 8:
          father.innerHTML = '<div class="mySlides fade" id="7" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/7.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="8" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/8.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="9" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/9.jpg" style="width:100%"></a>'+
          '</div>';
          break;    
        case 9:
          father.innerHTML = '<div class="mySlides fade" id="8" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/8.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="9" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/9.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="10" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/10.jpg" style="width:100%"></a>'+
          '</div>';
          break;      
        case 10:
          father.innerHTML = '<div class="mySlides fade" id="9" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/9.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="10" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/10.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="11" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/11.jpg" style="width:100%"></a>'+
          '</div>';
          break;
        case 11:
          father.innerHTML = '<div class="mySlides fade" id="10" style="display:block;">'+
          '<a href="#"><img src="./assets/teamProject/10.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides" id="11" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/11.jpg" style="width:100%"></a>'+
          '</div>'+

          '<div class="mySlides fade" id="1" style="display:block;">'+
            '<a href="#"><img src="./assets/teamProject/1.jpg" style="width:100%"></a>'+
          '</div>';
          break;  
      }
  } else if(w <= 768){
        console.log(w);
        switch(page){
          case 1:
            father.innerHTML = 
            '<div class="mySlides" id="1" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/1.jpg" style="width:100%"></a>'+
            '</div>';
   
            break;
          case 2:
            father.innerHTML = 
            '<div class="mySlides" id="2" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/2.jpg" style="width:100%"></a>'+
            '</div>';

            break;  
          case 3:
            father.innerHTML =
            '<div class="mySlides" id="3" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/3.jpg" style="width:100%"></a>'+
            '</div>';

            break;
          case 4:
            father.innerHTML = 
            '<div class="mySlides" id="4" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/4.jpg" style="width:100%"></a>'+
            '</div>'

            break;
          case 5:
            father.innerHTML = 
            '<div class="mySlides" id="5" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/5.jpg" style="width:100%"></a>'+
            '</div>';  

            break;
          case 6:
            father.innerHTML = 
            '<div class="mySlides" id="6" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/6.jpg" style="width:100%"></a>'+
            '</div>';

            break;
          case 7:
            father.innerHTML = 
            '<div class="mySlides" id="7" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/7.jpg" style="width:100%"></a>'+
            '</div>';

            break;
          case 8:
            father.innerHTML = 
            '<div class="mySlides" id="8" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/8.jpg" style="width:100%"></a>'+
            '</div>';

            break;    
          case 9:
            father.innerHTML =
            '<div class="mySlides" id="9" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/9.jpg" style="width:100%"></a>'+
            '</div>';

            break;      
          case 10:
            father.innerHTML =
            '<div class="mySlides" id="10" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/10.jpg" style="width:100%"></a>'+
            '</div>';

            break;
          case 11:
            father.innerHTML = 
            '<div class="mySlides" id="11" style="display:block;">'+
              '<a href="#"><img src="./assets/teamProject/11.jpg" style="width:100%"></a>'+
            '</div>';

            break;  
        }
  }

}*/


/*function showPlusSlides() {
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
}*/