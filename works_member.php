var page = 1;
var w;

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
  <?php
    $id = $_GET["id"];
    echo'console('.$_SERVER["QUERY_STRING"].');';
    $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
    $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
    $stmt->execute();
    echo'if(w > 768){console.log(w);switch(page){';
    $rows = $stmt->fetchAll();
    for ($num = 1; $num <= count($rows) ; ++$num){
        echo'case '.$num.':father.innerHTML =';
        for($i = $num; $i<=$num+2 ; ++$i){
            if($i-count($rows) > 0){
              $temp = $i-count($rows);
              echo'"<div class="mySlides" id="'.$temp.'" style="display:block;">"+'.
              '"<img src="./assets/teamMember/team'.$row[$temp-1]['groupId'].'/'.$temp.'.jpg" style="width:100%"/>"+"</div>"+';
            }else{
              echo'"<div class="mySlides" id="'.$i.'" style="display:block;">"+'.
              '"<img src="./assets/teamMember/team'.$row[$i-1]['groupId'].'/'.$i.'.jpg" style="width:100%"/>"+"</div>"+';
            }
        }
        echo'break;';
    }
    echo'}}';
  ?>
  

  /*if(w > 768){
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
  }*/

}
<?php
echo'function showPlusSlides() {';
echo'++page;if(page > '.count($rows).'){page = 1;}showSlides(page);}';
echo'}';
echo'function showReduceSlides() {';
echo'--page;if(page < 1){page = '.count($rows).';}showSlides(page);}';
echo'}';
?>

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