<?php
    $id = $_REQUEST["id"];
    $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
    $conn->exec("SET NAMES 'utf8';");
    $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    echo'function() {';
    echo'++page;if(page > '.count($rows).'){page = 1;}showSlides(page);}';
    echo'}';
?>