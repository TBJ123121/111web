<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Works</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="./css/works_member.css" rel="stylesheet" />
        <link href="./css/template.css" rel="stylesheet" />
        <!--script src="js/showGroup.js"></script-->
        <!--?php
            $id = $_REQUEST["id"];
            $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
            $conn->exec("SET NAMES 'utf8';");
            $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
            $stmt->execute();
            $row1 = $stmt->fetch();
            echo'<script>';
                echo'window.onload = function(){';
                echo'document.getElementById("showGroup").innerHTML = ';
                echo'\''.'<div class="title"><p>專題展示</p></div>'.'\''.'+'.
                '\''.'<div class="projectPlace"><video src="./assets/video/'.$id.'.mp4"></video></div>'.'\''.'+'.
                '\''.'<div class="titleIntro"><p>專題介紹</p></div>'.'\''.'+'.
                '\''.'<div class="subTitle"><p>'.$row1["title"].'</p></div>'.'\''.'+'.
                '\''.'<div><p class="subTitleText">'.$row1["pIntro"].'</p></div>'.'\'';
                if($row1["motivation"] != null){
                    echo'+'.'\''.'<div class="subTitle"><p>製作動機</p></div>'.'\''.'+'.
                        '\''.'<div><p class="subTitleText">'.$row1["motivation"].'</p></div>'.'\'';
                }
                if($row1["feature"] != null){
                    echo'+'.'\''.'<div class="subTitle"><p>專題特色</p></div>'.'\''.'+'.
                        '\''.'<div><p class="subTitleText">'.$row1["feature"].'</p></div>'.'\'';
                }
                if($row1["mechanism"] != null){
                    echo'+'.'\''.'<div class="subTitle"><p>專題機制</p></div>'.'\''.'+'.
                        '\''.'<div><p class="subTitleText">'.$row1["mechanism"].'</p></div>'.'\'';
                }
                echo'+'.'\''.'<div class="titleMember"><p>成員分工</p></div>'.'\''.'+';
                echo'\''.'<div class="slideshow-container" id="slideshow-container"></div>'.'\''.
                    '+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\''.
                    '+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                echo';';
                echo'}';
            echo'</script>';
        ?-->
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html">放icon的地方</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">首頁</a></li>
                        <li class="nav-item"><a class="nav-link" href="works.html">專題</a></li>
                        <li class="nav-item"><a class="nav-link" href="team.html">畢籌</a></li>
                        <li class="nav-item"><a class="nav-link" href="vote.html">投票</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                          <h1>主視覺動畫放置處</h1>
<!--                            <span class="subheading">This is what I do.</span>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"  id="showGroup">

                </div>
            </div>
        </div>
        <hr />
        <!-- Footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
<!--										放ig的粉專連結-->
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>     
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
<!--										放fb的粉專連結-->
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
<!--
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
-->
                        </ul>
                        <p class="copyright text-muted">&copy; 台中教育大學111級數位系</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--slider-->
        <!--script src="js/works_member.js"></script-->
        <?php
            $id = $_REQUEST["id"];
            $conn = new PDO("mysql:host=localhost;dbname=projectintro","root","");
            $conn->exec("SET NAMES 'utf8';");
            $stmt = $conn->prepare("SELECT * FROM member WHERE groupId = '".$id."'");
            $stmt->execute();
            
            echo'
                <script>
                    var page = 1;
                    var w;
                    var load = true;
                    function watchChangeSize (){    
                        w = window.innerWidth;
                    }

                    window.onresize=function(){  
                        watchChangeSize();
                        showSlides(page);
                    }

                    /*window.onload = function(){
                        watchChangeSize();
                        
                    }*/
                    
                    function showSlides(page){
                        console.log("被呼叫");
                        father = document.getElementById("slideshow-container");
                        father.innerHTML = "";
                        if(w > 576){
                            console.log(w);
                            switch(page){';
                                $rows = $stmt->fetchAll();
                                for ($num = 1; $num <= count($rows) ; ++$num){
                                    if(count($rows) >= 3){
                                        echo 'case '.$num.':father.innerHTML =';
                                        //echo'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\''.'+';
                                        for($i = $num; $i<=$num+2 ; ++$i){
                                            if($i-count($rows) > 0){
                                                $temp = $i-count($rows);
                                                echo'\''.'<div class="mySlides" id="'.$temp.'" style="display:block;">'.'\''.'+'.
                                                '\''.'<img src="./assets/teamMember/team'.$rows[$temp-1]["groupId"].'/'.$temp.'.jpg" style="width:100%"/>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="name">'.$rows[$temp-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro">'.$rows[$temp-1]["mIntro"].'</p></div>'.'\''.'+'.
                                                '\''.'</div>'.'\'';
                                                if($i - $num < 2){
                                                    echo'+';
                                                }else{
                                                    echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                                    echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                                    echo';';
                                                }
                                            }else{
                                                echo'\''.'<div class="mySlides" id="'.$i.'" style="display:block;">'.'\''.'+'.
                                                '\''.'<img src="./assets/teamMember/team'.$rows[$i-1]["groupId"].'/'.$i.'.jpg" style="width:100%"/>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="name">'.$rows[$i-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro">'.$rows[$i-1]["mIntro"].'</p></div>'.'\''.'+'.
                                                '\''.'</div>'.'\'';
                                                if($i <= $num+1){
                                                    echo'+';
                                                }else if($i == $num+2){
                                                    echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                                    echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                                    echo';';
                                                }
                                            }
                                        }
                                        echo'break;';
                                    }else{
                                        echo 'case '.$num.':father.innerHTML =';
                                        //echo'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\''.'+';
                                        for($i = $num; $i<=$num+1 ; ++$i){
                                            if($i-count($rows) > 0){
                                                $temp = $i-count($rows);
                                                echo'\''.'<div class="mySlidesG4" id="'.$temp.'" style="display:block;">'.'\''.'+'.
                                                '\''.'<img src="./assets/teamMember/team'.$rows[$temp-1]["groupId"].'/'.$temp.'.jpg" style="width:100%"/>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="name">'.$rows[$temp-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro">'.$rows[$temp-1]["mIntro"].'</p></div>'.'\''.'+'.
                                                '\''.'</div>'.'\'';
                                                if($i - $num < 2){
                                                    echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                                    echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                                    echo';';
                                                }
                                            }else{
                                                echo'\''.'<div class="mySlidesG4" id="'.$i.'" style="display:block;">'.'\''.'+'.
                                                '\''.'<img src="./assets/teamMember/team'.$rows[$i-1]["groupId"].'/'.$i.'.jpg" style="width:100%"/>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="name">'.$rows[$i-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro">'.$rows[$i-1]["mIntro"].'</p></div>'.'\''.'+'.
                                                '\''.'</div>'.'\'';
                                                if($i < $num+1){
                                                    echo'+';
                                                }else if($i == $num+1){
                                                    echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                                    echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                                    echo';';
                                                }
                                            }
                                        }
                                        echo'break;';
                                    }
                                }
                            echo'}}';
                        echo'else if(w <= 576){console.log(w);switch(page){';
                        for ($num = 1; $num <= count($rows) ; ++$num){
                            if(count($rows) >= 3){
                                echo'case '.$num.':father.innerHTML =';
                                //echo'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\''.'+';
                                echo'\''.'<div class="mySlides" id="'.$num.'" style="display:block;">'.'\''.'+'.
                                '\''.'<img src="./assets/teamMember/team'.$rows[$num-1]["groupId"].'/'.$num.'.jpg" style="width:100%"/>'.'\''.'+'.
                                '\''.'<div class="memberIntro"><p class="name">'.$rows[$num-1]["name"].'</p></div>'.'\''.'+'.
                                '\''.'<div class="memberIntro"><p class="nameIntro">'.$rows[$num-1]["mIntro"].'</p></div>'.'\''.'+'.
                                '\''.'</div>'.'\'';
                                echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                echo';';
                                echo'break;';
                            }else{
                                echo'case '.$num.':father.innerHTML =';
                                //echo'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\''.'+';                      
                                echo'\''.'<div class="mySlidesG4" id="'.$num.'" style="display:block;">'.'\''.'+'.
                                '\''.'<img src="./assets/teamMember/team'.$rows[$num-1]["groupId"].'/'.$num.'.jpg" style="width:100%"/>'.'\''.'+'.
                                '\''.'<div class="memberIntro"><p class="name">'.$rows[$num-1]["name"].'</p></div>'.'\''.'+'.
                                '\''.'<div class="memberIntro"><p class="nameIntro">'.$rows[$num-1]["mIntro"].'</p></div>'.'\''.'+'.
                                '\''.'</div>'.'\'';
                                echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                echo';';
                                echo'break;';
                            }
                        }
                        echo'}}}';
                        echo'function showPlusSlides() {';
                        echo'++page;if(page > '.count($rows).'){page = 1;}showSlides(page);}';
                        echo'function showReduceSlides() {';
                        echo'--page;if(page < 1){page = '.count($rows).';}showSlides(page);}';

                        echo'window.onload = function(){';
                            
                        echo'document.getElementById("showGroup").innerHTML = ';
                        echo'\''.'<div class="title"><p>專題展示</p></div>'.'\''.'+'.
                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\''.'+'.
                        '\''.'<div class="titleIntro"><p>專題介紹</p></div>'.'\''.'+'.
                        '\''.'<div class="subTitle"><p>'.$rows["0"]["title"].'</p></div>'.'\''.'+'.
                        '\''.'<div><p class="subTitleText">'.$rows["0"]["pIntro"].'</p></div>'.'\'';
                        if($rows["0"]["motivation"] != null){
                            echo'+'.'\''.'<div class="subTitle"><p>製作動機</p></div>'.'\''.'+'.
                                '\''.'<div><p class="subTitleText">'.$rows["0"]["motivation"].'</p></div>'.'\'';
                        }
                        if($rows["0"]["feature"] != null){
                            echo'+'.'\''.'<div class="subTitle"><p>專題特色</p></div>'.'\''.'+'.
                                '\''.'<div><p class="subTitleText">'.$rows["0"]["feature"].'</p></div>'.'\'';
                        }
                        if($rows["0"]["mechanism"] != null){
                            echo'+'.'\''.'<div class="subTitle"><p>專題機制</p></div>'.'\''.'+'.
                                '\''.'<div><p class="subTitleText">'.$rows["0"]["mechanism"].'</p></div>'.'\'';
                        }
                        echo'+'.'\''.'<div class="titleMember"><p>成員分工</p></div>'.'\''.'+';
                        echo'\''.'<div class="slideshow-container" id="slideshow-container"></div>'.'\'';
                            /*'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\''.
                            '+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';*/
                        echo';';
                        echo'load = true;';
                        echo'showSlides(page);';
                        echo'}; '; 
                        echo'console.log("已載入",load);';
                        echo'if(load == true){';
                        
                        echo'}';
                        echo'watchChangeSize();';
            echo'</script>';
        ?>
    </body>
</html>
