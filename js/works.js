var page = 1;
var w;
var groupID;
var img;
var centerDivHeight = 0;
var centerDivWidth = 0;
var asideDivHeight;
var root = document.documentElement;
var originWidth;
var clipWidth;
var dis;
var leftButton = document.getElementById('prev');
var rightButton = document.getElementById('next');
var add = 4;
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
    if(w <= 768){
      //showSlides(page);
      centerDivHeight = centerDivHeight==0?322:document.getElementById('center').offsetHeight;
      if(w <= 576){
        centerDivWidth = document.getElementById('slideshow-container').offsetWidth*0.619999999999;
        centerDivHeight = centerDivWidth * 1.41414141414;
        //leftButton.style.top="15%";
        //rightButton.offsetTop=leftButton.offsetTop;
        console.log('leftButton_offsetTop:',leftButton.offsetTop);
        console.log('rightButton_offsetTop:',rightButton.offsetTop);
      }
      //console.log('centerDivHeight:',centerDivHeight);
      asideDivHeight = centerDivHeight*0.8;
      //console.log('asideDivHeight:',asideDivHeight);
      root.style.setProperty('--origin-height', asideDivHeight+'px');
      originWidth = asideDivHeight*0.70714285714;
      root.style.setProperty('--origin-width',originWidth+'px');
      clipWidth = document.getElementById('slideshow-container').offsetWidth*0.15999455337;
      root.style.setProperty('--clip-width',clipWidth+'px');
      dis = originWidth-clipWidth;
      root.style.setProperty('--dis',dis+'px');
    }
}

function showSlides(page){
  father = document.getElementById("slideshow-container");
  father.innerHTML = "";
  father_text = document.getElementById("textshow-container");
  father_text.innerHTML = "";
  father_group = document.getElementById("group");
  father_group.innerHTML = "";
  var anima = document.getElementById('anima');
  var show = document.getElementById('show');
  leftButton = document.getElementById('prev');
  rightButton = document.getElementById('next');
  if(w > 768){
      console.log(w);
      anima.style.display="block";
      show.style.marginTop="0%";
      leftButton.style.top="43%";
      rightButton.style.top="43%";
      switch(page){
        case 1:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" id="img-aside" src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" id="img-aside" src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
          '</div>';
          break;
        case 2:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
          '</div>';
          break;  
        case 3:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
          '</div>';
          break;
        case 4:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
          '</div>';
          break;
        case 5:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
          '</div>';  
          break;
        case 6:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
          '</div>';
          break;
        case 7:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
          '</div>';
          break;
        case 8:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
          '</div>';
          break;    
        case 9:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
          '</div>';
          break;      
        case 10:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
          '</div>';
          break;
        case 11:
          father.innerHTML = '<div class="mySlides aside fade" id="aside" style="display:block;">'+
          '<img class="img-aside" src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
          '</div>'+

          '<div class="mySlides center" id="center" style="display:block;">'+
            '<img src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
          '</div>'+

          '<div class="mySlides aside fade" id="aside" style="display:block;">'+
            '<img class="img-aside" src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
          '</div>';
          break;  
      }
  } else if(w <= 768){
        console.log(w);
        anima.style.display="none";
        show.style.marginTop="100px";

        if(w <= 576){
          leftButton.style.top="40%";
          rightButton.style.top="40%";
          leftButton.style.left="1%";
          rightButton.style.right="2%";
        }else if(w <= 318){
          /*add = add + 1;
          leftButton.style.left="1%";
          console.log('add:',add);
          rightButton.style.right=add+'%';*/
          rightButton.style.right="5%";
        }else{
          leftButton.style.top="20%";
          rightButton.style.top="20%";
        }
        
        switch(page){
          /*case 1:
            father.innerHTML = 
            '<div class="mySlides" id="1" style="display:block;">'+
              '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
            '</div>';
            father_text.innerHTML = 
            '<p class="showText">醒來後，發現原本躺在身邊的愛人消失了。彷彿做了一場惡夢但卻又如此的真實，走出屋外看到詭譎的氣氛似乎藏著什麼可怕的秘密，應該鼓起勇氣踏出去嗎...？</p>'
            ;
   
            break;*/

          case 1:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" src="./assets/teamProject/11.jpg" onclick="send(11)"/>'+
            '</div>'+

            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/1.jpg" style="width:100%" onclick="send(1)"/>'+
            '</div>'+

            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" style="height:'+asideDivHeight+'px;" src="./assets/teamProject/2.jpg" onclick="send(2)"/>'+
            '</div>';
            father_group.innerHTML = '<h7 class="group">第一組-異辛浣</h7>';
            father_text.innerHTML = 
            '<p class="showText">醒來後，發現原本躺在身邊的愛人消失了。彷彿做了一場惡夢但卻又如此的真實，走出屋外看到詭譎的氣氛似乎藏著什麼可怕的秘密，應該鼓起勇氣踏出去嗎...？</p>'
            ;

            break;

          case 2:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/1.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(1)"/>'+
            '</div>'+

            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/2.jpg" style="width:100%" onclick="send(2)"/>'+
            '</div>'+

            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/3.jpg" style="height:'+asideDivHeight+'px;" onclick="send(3)"/>'+
            '</div>';
            father_group.innerHTML = '<h7 class="group">第二組-⚔️Devil Defense</h7>';
            father_text.innerHTML = 
            '<p class="showText">⚠︎您正受到邪惡勢力的攻擊 ❗︎<br>⚠︎您正受到邪惡勢力的攻擊 ❗︎<br>⚠︎您正受到邪惡勢力的攻擊 ❗︎<br>正在遭受攻擊 ❓︎<br>還不快來捍衛您的魔王吧 ❗︎ ❗︎<br>-<br>🔺探索神秘有趣的劇情<br>🔺沉迷於經營遊戲策略<br>🔺享受打敗惡勢力的滋味快來Devil Defense ❗︎<br>防止邪惡力量入侵 ❗︎ ❗︎<br>🛡️保衛魔王令您欲罷不能 ❗︎ ❗︎</p>'
            ;

            break;  
          case 3:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/2.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(2)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/3.jpg" style="width:100%" onclick="send(3)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/4.jpg" style="height:'+asideDivHeight+'px;" onclick="send(4)"/>'+
            '</div>';
            father_group.innerHTML = '<h7 class="group">第三組-嗑藥山人:尋草求序</h7>';
            father_text.innerHTML = 
            '<p class="showText">網路讓我們的資料流通的更快了，資訊也因此更加透明與開放。可是在沒有網路的古時候，人們又是怎麼生活的呢？ 過去的藥學書籍，沒有深入實際進行調查研究，而是在書本上抄來抄去，最後越解釋越糊塗，且錯漏百出。李時珍為了杜絕此情況再次發生，下定決心親身外出遊歷、實地考證，要撰寫新的草本書。就讓我們一起跟著李時珍，開啟一段尋找草藥之旅吧！引人入勝的遊戲劇情</p>'
            ;

            break;
          case 4:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/3.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(3)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/4.jpg" style="width:100%" onclick="send(4)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/5.jpg" style="height:'+asideDivHeight+'px;" onclick="send(5)"/>'+
            '</div>';
            father_group.innerHTML = '<h7 class="group">第四組-越來越不南</h7>';
            father_text.innerHTML = 
            '<p class="showText">B.B.等小精靈來自一顆缺乏能源的星球,他們想要在這個新的行星定居,但是必須學習當地的語言,才能溝通,請陪伴他們成為越來越不南星球的居民吧!<br> *模擬日常生活的RPG手遊 + 輕鬆有趣學習語言<br>*可愛的遊戲設計 + 推播通知<br>*錯誤複習測驗 ->加深學習記憶力!<br>*奇幻的世界觀 + 可愛又嚇人的小精靈 快來加入我們吧!</p>'
            ;

            break;
          case 5:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/4.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(4)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/5.jpg" style="width:100%" onclick="send(5)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/6.jpg" style="height:'+asideDivHeight+'px;" onclick="send(6)"/>'+
            '</div>';  
            father_group.innerHTML = '<h7 class="group">第五組-LOKAH!農場日誌</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">嗨大家今天過的好嗎? 歡迎來到" LOKAH!農場日誌" lokah!是泰雅族的問候語 每天一句lokah!讓你變成班級交際王 就像寫學習日誌一樣 我們也幫位於象鼻部落的野桐工坊寫了一份農場日誌 裡面記錄著農場的大小事 還有專屬於部落的體驗活動可以報名參加喔! 還在等什麼~ 快來" LOKAH!農場日誌"瞧瞧!!</p>'
            ;

            break;
          case 6:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/5.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(5)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/6.jpg" style="width:100%" onclick="send(6)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/7.jpg" style="height:'+asideDivHeight+'px;" onclick="send(7)"/>'+
            '</div>';  
            father_group.innerHTML = '<h7 class="group">第六組-女王的花園</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">這是一款休閒的派對型桌遊喔~ 玩家扮演黑心女王的社畜員工們， 負責完成女王的各種要求， 完成工作的人就可以下班了， 但是大家都想早早下班呀...... 所以啦~ 驚心動魄的下班競爭賽就此拉開序幕啦~</p>'
            ;

            break;
          case 7:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/6.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(6)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/7.jpg" style="width:100%" onclick="send(7)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/8.jpg" style="height:'+asideDivHeight+'px;" onclick="send(8)"/>'+
            '</div>';  
            father_group.innerHTML = '<h7 class="group">第七組-劣蕈城醫</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">這是一款生存、經營類型遊戲。 玩家扮演希波克，一名在疾病中穿梭的醫生，救治重症病患。 希波克接到一個工作，要到一個城裡解決絕症，城裡的員工被領主壓榨，承受染病的痛苦並持續工作。 希波克需要想辦法救治病患，研究出絕症的解藥，並同時抵抗利益的誘惑，這個利益可能是錢，甚至可能是自己的生命。 遊戲圍繞著找解藥的主軸，玩家出外找尋材料來當樣本研究解藥。 材料不只能拿來研究，還能做出食物飽腹、製作出工具幫助採集。</p>'
            ;

            break;
          case 8:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/7.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(7)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/8.jpg" style="width:100%" onclick="send(8)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/9.jpg" style="height:'+asideDivHeight+'px;" onclick="send(9)"/>'+
            '</div>'; 
            father_group.innerHTML = '<h7 class="group">第八組-Tiresias</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">♫♫♫ 你是我的眼 帶我穿越擁擠的人潮 ♫♫♫ 在Tiresias的帶領下安全的過馬路吧~ - 在台灣約有5萬的視障人口，有些路口雖設有警示聲但在台灣並未普及。本專題研究以輔助非全盲的視障者過馬路，在正視於斑馬線的情況下，透過影像辨識行人號誌，獲知其資訊並進一步通知使用者是否可以過馬路，並在行走的過程當中引導使用者不偏移斑馬線，達到更安全的通過馬路。</p>'
            ;

            break;    
          case 9:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/8.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(8)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/9.jpg" style="width:100%" onclick="send(9)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/10.jpg" style="height:'+asideDivHeight+'px;" onclick="send(10)"/>'+
            '</div>';  
            father_group.innerHTML = '<h7 class="group">第九組-紙上談兵</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">玩棋盤遊戲時，討厭等待冗長的思考時間嗎? 玩即時戰略時，卻對資源收集和過久的行軍時間感到厭煩嗎? 那麼就給《紙上談兵》一個帶你快速體驗戰場瞬息萬變的機會吧!</p>'
            ;

            break;      
          case 10:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/9.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(9)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/10.jpg" style="width:100%" onclick="send(10)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/11.jpg" style="height:'+asideDivHeight+'px;" onclick="send(11)"/>'+
            '</div>';  
            father_group.innerHTML = '<h7 class="group">第十組-逐星者</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">宇宙貓貓是一隻可愛的飛行員，在因緣際會下牠認識了從天上殞落的星辰：牡羊座。貓貓為了修好飛行船並將這隻可憐的綿羊送回天上，與牡羊達成協議一同展開了攀爬世界之樹─蓋亞的旅程，一場充滿歡樂與驚奇的冒險就此展開！</p>'
            ;

            break;
          case 11:
            father.innerHTML = 
            '<div class="mySlides aside fade aside-left" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/10.jpg" style="margin-left: -'+dis+'px;height:'+asideDivHeight+'px;" onclick="send(10)"/>'+
            '</div>'+
  
            '<div class="mySlides center" id="center" style="display:block;">'+
              '<img src="./assets/teamProject/11.jpg" style="width:100%" onclick="send(11)"/>'+
            '</div>'+
  
            '<div class="mySlides aside fade aside-right" id="aside" style="display:block;">'+
              '<img class="img-aside" src="./assets/teamProject/1.jpg" style="height:'+asideDivHeight+'px;" onclick="send(1)"/>'+
            '</div>';  
            father_group.innerHTML = '<h7 class="group">第十一組-營養HOW解</h7>'; 
            father_text.innerHTML = 
            '<p class="showText">怎麼回事！皇家王子昏倒了！？  究竟是消化不良，還是是被下了毒藥呢？  快來變身成神秘特務來一探究竟吧！  你/妳能夠拯救王子嗎？</p>'
            ;

            break;  
        }
  } /*else if(w <= 576){
    leftButton.style.top="10%";
    rightButton.style.top="10%";
  }*/
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