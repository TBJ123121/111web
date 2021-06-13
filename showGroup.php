<?php
    $id = $_REQUEST["id"];
    //mysql_query("SET NAMES 'UTF8'");
    /*$con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("projectintro", $con);

    $result = mysqli_query("SELECT * FROM member WHERE groupId = '".$id."'");
    $row1 = $result->fetch();*/

    $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
    $conn->exec("SET NAMES 'utf8';");
    $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
    $stmt->execute();
    $row1 = $stmt->fetch();

    echo'<div class="title"><p>專題展示</p></div>'.
        '<div class="projectPlace"><video src="" controls></video></div>'.
        '<div class="titleIntro"><p>專題介紹</p></div>'.
        '<div class="subTitle"><p>'.$row1["title"].'</p></div>'.
        '<div><p class="subTitleText">'.$row1["pIntro"].'</p></div>';
    if($row1["motivation"] != null){
    echo'<div class="subTitle"><p>製作動機</p></div>'.
        '<div><p class="subTitleText">'.$row1["motivation"].'</p></div>';
    }
    if($row1["feature"] != null){
    echo'<div class="subTitle"><p>專題特色</p></div>'.
        '<div><p class="subTitleText">'.$row1["feature"].'</p></div>';
    }
    if($row1["mechanism"] != null){
    echo'<div class="subTitle"><p>專題機制</p></div>'.
        '<div><p class="subTitleText">'.$row1["mechanism"].'</p></div>';
    }
    echo'<div class="titleMember"><p>成員分工</p></div>';
    echo'<div class="slideshow-container" id="slideshow-container"></div>'.
        '<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.
        '<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>';

?>