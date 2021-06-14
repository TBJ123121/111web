<?php
    $id = $_REQUEST["id"];
    $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
    $conn->exec("SET NAMES 'utf8';");
    $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
    $stmt->execute();
    /*echo json_decode('function(page){
        father = document.getElementById("slideshow-container");
        father.innerHTML = "";');
    echo json_decode('if(w > 768){console.log(w);switch(page){');
    $rows = $stmt->fetchAll();
    for ($num = 1; $num <= count($rows) ; ++$num){
        echo json_decode('case '.$num.':father.innerHTML =');
        for($i = $num; $i<=$num+2 ; ++$i){
            if($i-count($rows) > 0){
              $temp = $i-count($rows);
              echo json_decode('"<div class="mySlides" id="'.$temp.'" style="display:block;">"'.
              '"<img src="./assets/teamMember/team'.$rows[$temp-1]['groupId'].'/'.$temp.'.jpg" style="width:100%"/>""</div>"');
            }else{
              echo json_decode('"<div class="mySlides" id="'.$i.'" style="display:block;">"'.
              '"<img src="./assets/teamMember/team'.$rows[$i-1]['groupId'].'/'.$i.'.jpg" style="width:100%"/>""</div>"');
            }
        }
        echo json_decode('break;');
    }
    echo json_decode('}}');
    echo'else if(w <= 768){console.log(w);switch(page){';
    for ($num = 1; $num <= count($rows) ; ++$num){
        echo'case '.$num.':father.innerHTML =';
        echo'"<div class="mySlides" id="'.$num.'" style="display:block;">"'.
        '"<img src="./assets/teamMember/team'.$rows[$num-1]['groupId'].'/'.$num.'.jpg" style="width:100%"/>""</div>"';
        echo'break;';
    }
    echo'}}};';*/

    echo json_decode('if(w > 768){console.log(w);switch(page){');
    $rows = $stmt->fetchAll();
    for ($num = 1; $num <= count($rows) ; ++$num){
        echo json_decode('case '.$num.':father.innerHTML =');
        for($i = $num; $i<=$num+2 ; ++$i){
            if($i-count($rows) > 0){
                $temp = $i-count($rows);
                echo json_decode('"<div class="mySlides" id="'.$temp.'" style="display:block;">"'.
                '"<img src="./assets/teamMember/team'.$rows[$temp-1]['groupId'].'/'.$temp.'.jpg" style="width:100%"/>""</div>"');
            }else{
                echo json_decode('"<div class="mySlides" id="'.$i.'" style="display:block;">"'.
                '"<img src="./assets/teamMember/team'.$rows[$i-1]['groupId'].'/'.$i.'.jpg" style="width:100%"/>""</div>"');
            }
        }
        echo json_decode('break;');
    }
    echo json_decode('}}');
    echo'else if(w <= 768){console.log(w);switch(page){';
    for ($num = 1; $num <= count($rows) ; ++$num){
        echo'case '.$num.':father.innerHTML =';
        echo'"<div class="mySlides" id="'.$num.'" style="display:block;">"'.
        '"<img src="./assets/teamMember/team'.$rows[$num-1]['groupId'].'/'.$num.'.jpg" style="width:100%"/>""</div>"';
        echo'break;';
    }
    echo'}}';
?>