<?php
    $id = $_REQUEST["id"];
    $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
    $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
    $stmt->execute();
    echo'if(w > 768){
            console.log(w);
            switch(page){';
    while($row = $stmt->fetchAll()){
        $num = 1;
        echo'case '.$num.':father.innerHTML =';
        echo'"<div class="mySlides fade" id="'.$num.'" style="display:block;">"+'.
        '"<img src="./assets/teamMember/team'.$row[$num-1]['groupId'].'/'.$num.'.jpg" style="width:100%"/>"+"</div>"+';
        ++$num;
        echo'"<div class="mySlides fade" id="'.$num.'" style="display:block;">"+'.
        '"<img src="./assets/teamMember/team'.$row[$num]['groupId'].'/'.$num.'.jpg" style="width:100%"/>"+"</div>"+';
        ++$num;
        echo'"<div class="mySlides fade" id="'.$num.'" style="display:block;">"+'.
        '"<img src="./assets/teamMember/team'.$row[$num+1]['groupId'].'/'.$num.'.jpg" style="width:100%"/>"+"</div>"+';
        
    }
    $rows = $stmt->fetchAll();
    for ($num = 1; $num <= count($rows) ; ++$num){
        echo'case '.$num.':father.innerHTML =';
        for($i = 1; $i<=3 ; ++$i){
            echo'"<div class="mySlides fade" id="'.$num.'" style="display:block;">"+'.
            '"<img src="./assets/teamMember/team'.$row[$num-1]['groupId'].'/'.$num.'.jpg" style="width:100%"/>"+"</div>"+';
        }
    }

?>