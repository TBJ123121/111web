<!DOCTYPE html>
<html lang="zh-Hant-TW">
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
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg dct-nav">
            <div class="container dct-nav-container" >
                <a class="navbar-brand" href="index.html">
                    <img class="dct-logo" src="./img/logo.png" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <img class="dct-menu" src="./img/Menu-icon.png" alt="">
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link dct-link" href="index.html">首頁</a></li>
                        <li class="nav-item"><a class="nav-link dct-link" href="works.html">專題作品</a></li>
                        <li class="nav-item"><a class="nav-link dct-link" href="team.html">策展團隊</a></li>
                        <li class="nav-item"><a class="nav-link dct-link" href="vote.html">人氣投票</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" id="anima">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                          <video class="dct-video" src="./video/0516動態主視覺.mp4" autoplay muted loop></video>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container">
            <div class="row">
                <!--div class="col-lg-8 col-md-10 mx-auto"  id="bg">
                    <img src="./assets/img/work_member_bg.png"/>
                </div-->
                <div class="col-lg-8 col-md-10 mx-auto"  id="showGroup">
                </div>
            </div>
        </div>
        <hr />
        <!-- Footer-->
        <footer class="dct-footer">
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
                        <p class="copyright dct-copyright">&copy; 國立臺中教育大學數位內容科技學系 111級畢籌團隊</p>
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
                    var mIntroHeightStandard = 22.4;
                    function watchChangeSize (){    
                        w = window.innerWidth;
                    }
                    
                    function showSlides(page){
                        console.log("顯示showSlides");
                        father = document.getElementById("slideshow-container");
                        father.innerHTML = "";
                        
                            //console.log(w);
                            switch(page){';
                                $rows = $stmt->fetchAll();
                                for ($num = 1; $num <= count($rows) ; ++$num){
                                    if(count($rows) >= 3){
                                        echo 'case '.$num.':father.innerHTML =';
                                        for($i = $num; $i<=$num+2 ; ++$i){
                                            if($i-count($rows) > 0){
                                                $temp = $i-count($rows);
                                                echo'\''.'<div class="mySlides" id="'.$temp.'" style="display:block;">'.'\''.'+'.
                                                '\''.'<img src="./assets/teamMember/team'.$rows[$temp-1]["groupId"].'/'.$temp.'.jpg" style="width:100%"/>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="name" id="name">'.$rows[$temp-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro" id="nameIntro">'.$rows[$temp-1]["mIntro"].'</p></div>'.'\''.'+'.
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
                                                '\''.'<div class="memberIntro"><p class="name" id="name">'.$rows[$i-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro" id="nameIntro">'.$rows[$i-1]["mIntro"].'</p></div>'.'\''.'+'.
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
                                                '\''.'<div class="memberIntro"><p class="name" id="name">'.$rows[$temp-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro" id="nameIntro">'.$rows[$temp-1]["mIntro"].'</p></div>'.'\''.'+'.
                                                '\''.'</div>'.'\'';
                                                if($i - $num < 2){
                                                    echo'+'.'\''.'<a class="prev" id ="prev" onclick="showReduceSlides();">&#10094;</a>'.'\'';
                                                    echo'+'.'\''.'<a class="next" id ="next" onclick="showPlusSlides();">&#10095;</a>'.'\'';
                                                    echo';';
                                                }
                                            }else{
                                                echo'\''.'<div class="mySlidesG4" id="'.$i.'" style="display:block;">'.'\''.'+'.
                                                '\''.'<img src="./assets/teamMember/team'.$rows[$i-1]["groupId"].'/'.$i.'.jpg" style="width:100%"/>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="name" id="name">'.$rows[$i-1]["name"].'</p></div>'.'\''.'+'.
                                                '\''.'<div class="memberIntro"><p class="nameIntro" id="nameIntro">'.$rows[$i-1]["mIntro"].'</p></div>'.'\''.'+'.
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
                            echo'}';
                        
                        echo'}';
                        echo'function showPlusSlides() {';
                        echo'++page;if(page > '.count($rows).'){page = 1;}showSlides(page);}';
                        echo'function showReduceSlides() {';
                        echo'--page;if(page < 1){page = '.count($rows).';}showSlides(page);}';

                        //下面是onresize程式碼
                        echo'window.onresize = function(){';
                            echo'watchChangeSize();';
                            echo'console.log(w);';
                            echo'var root = document.documentElement;';
                            echo'root.style.setProperty("--winWidth", w);';
                            echo'var anima = document.getElementById("anima");';
                            //下面是平板和手機的程式碼
                            echo'if(w<=768){';
                                echo'anima.style.display="none";';
                                echo'document.getElementById("showGroup").innerHTML = ';
                                    echo
                                    
                                    '\''.'<div class="projectName"><p class="projectName-p">'.$rows["0"]["title"].'</p></div>'.'\''.'+'.
                                    '\''.'<div><p class="subTitleText">'.$rows["0"]["pIntro"].'</p></div>'.'\'';
                                    echo'+'.'\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';
                                    echo'+'.'\''.'<div class="col-lg-8 col-md-10 mx-auto"  id="bg"><img src="./assets/img/work_member_bg.png"/></div>'.'\'';

                                    if($rows["0"]["motivation"] != null){
                                        echo'+'.'\''.'<div class="MovTitle"><div class="subTitle posMovTitle" id="MovTitle"><p>製作動機</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMovTitleText">'.$rows["0"]["motivation"].'</p></div></div>'.'\'';
                                    }
                                    if($rows["0"]["feature"] != null){
                                        echo'+'.'\''.'<div class="FeaTitle"><div class="subTitle posFeaTitle"><p>專題特色</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posFeaTitleText">'.$rows["0"]["feature"].'</p></div></div>'.'\'';
                                    }
                                    if($rows["0"]["mechanism"] != null){
                                        echo'+'.'\''.'<div class="MecTitle"><div class="subTitle posMecTitle"><p>專題機制</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMecTitleText">'.$rows["0"]["mechanism"].'</p></div></div>'.'\'';
                                    }
                                    /*echo'+'.'\''.'<div class="title"><p><b>專題展示</b></p></div>'.'\''.'+'.
                                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';*/
                                    echo'+'.'\''.'<div class="titleMember"><p>成員分工</p></div>'.'\''.'+';
                                    echo'\''.'<div class="slideshow-container" id="slideshow-container"></div>'.'\'';
                                    echo';';
                                echo'load = true;';
                                echo'showSlides(page);';
                            echo'}';
                            //下面是電腦的程式碼
                            echo'else if(w>768){';
                                echo'anima.style.display="block";';
                                echo'document.getElementById("showGroup").innerHTML = ';
                                    echo
                                    
                                    '\''.'<div class="projectName"><p class="projectName-p">'.$rows["0"]["title"].'</p></div>'.'\''.'+'.
                                    '\''.'<div><p class="subTitleText">'.$rows["0"]["pIntro"].'</p></div>'.'\'';
                                    echo'+'.'\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';
                                    //echo'+'.'\''.'<div class="col-lg-8 col-md-10 mx-auto"  id="bg" style="display:hidden;"><img src="./assets/img/work_member_bg.png"/></div>'.'\'';//背景圖隱藏

                                    if($rows["0"]["motivation"] != null){
                                        echo'+'.'\''.'<div class="MovTitle"><div class="subTitle posMovTitle" id="MovTitle"><p>製作動機</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMovTitleText">'.$rows["0"]["motivation"].'</p></div></div>'.'\'';
                                    }
                                    if($rows["0"]["feature"] != null){
                                        echo'+'.'\''.'<div class="FeaTitle"><div class="subTitle posFeaTitle"><p>專題特色</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posFeaTitleText">'.$rows["0"]["feature"].'</p></div></div>'.'\'';
                                    }
                                    if($rows["0"]["mechanism"] != null){
                                        echo'+'.'\''.'<div class="MecTitle"><div class="subTitle posMecTitle"><p>專題機制</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMecTitleText">'.$rows["0"]["mechanism"].'</p></div></div>'.'\'';
                                    }
                                    /*echo'+'.'\''.'<div class="title"><p><b>專題展示</b></p></div>'.'\''.'+'.
                                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';*/
                                    echo'+'.'\''.'<div class="titleMember"><p>成員分工</p></div>'.'\''.'+';
                                    echo'\''.'<div class="slideshow-container" id="slideshow-container"></div>'.'\'';
                                    echo';';
                                echo'load = true;';
                                echo'showSlides(page);';
                            echo'}';
                        echo'}; '; 

                        //下面是onload程式碼
                        echo'window.onload = function(){';
                            echo'watchChangeSize();';
                            echo'console.log(w);';
                            echo'var root = document.documentElement;';
                            echo'root.style.setProperty("--winWidth", w);';
                            echo'var anima = document.getElementById("anima");';
                            //下面是平板和手機的程式碼
                            echo'if(w<=768){';
                                echo'anima.style.display="none";';
                                echo'document.getElementById("showGroup").innerHTML = ';
                                    echo
                                    
                                    '\''.'<div class="projectName"><p class="projectName-p">'.$rows["0"]["title"].'</p></div>'.'\''.'+'.
                                    '\''.'<div><p class="subTitleText">'.$rows["0"]["pIntro"].'</p></div>'.'\'';
                                    echo'+'.'\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';
                                    echo'+'.'\''.'<div class="col-lg-8 col-md-10 mx-auto"  id="bg"><img src="./assets/img/work_member_bg.png"/></div>'.'\'';

                                    if($rows["0"]["motivation"] != null){
                                        //echo'+'.'\''.'<div class="MovTitle">'.'\'';
                                        echo'+'.'\''.'<div class="MovTitle"><div class="subTitle posMovTitle"><p>製作動機</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMovTitleText">'.$rows["0"]["motivation"].'</p></div></div>'.'\'';
                                        //echo'+'.'</div>'.'\'';
                                    }
                                    if($rows["0"]["feature"] != null){
                                        echo'+'.'\''.'<div class="FeaTitle"><div class="subTitle posFeaTitle"><p>專題特色</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posFeaTitleText">'.$rows["0"]["feature"].'</p></div></div>'.'\'';
                                    }
                                    if($rows["0"]["mechanism"] != null){
                                        echo'+'.'\''.'<div class="MecTitle"><div class="subTitle posMecTitle"><p>專題機制</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMecTitleText">'.$rows["0"]["mechanism"].'</p></div></div>'.'\'';
                                    }
                                    /*echo'+'.'\''.'<div class="title"><p><b>專題展示</b></p></div>'.'\''.'+'.
                                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';*/
                                    echo'+'.'\''.'<div class="TitleMember"><div class="titleMember"><p>成員分工</p></div>'.'\''.'+';
                                    echo'\''.'<div class="slideshow-container" id="slideshow-container"></div></div>'.'\'';
                                    echo';';
                                echo'load = true;';
                                echo'showSlides(page);';
                            echo'}';
                            //下面是電腦的程式碼
                            echo'else if(w>768){';
                                echo'anima.style.display="block";';
                                echo'document.getElementById("showGroup").innerHTML = ';
                                    echo
                                    
                                    '\''.'<div class="projectName"><p class="projectName-p">'.$rows["0"]["title"].'</p></div>'.'\''.'+'.
                                    '\''.'<div><p class="subTitleText">'.$rows["0"]["pIntro"].'</p></div>'.'\'';
                                    echo'+'.'\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';
                                    //echo'+'.'\''.'<div class="col-lg-8 col-md-10 mx-auto"  id="bg" style="display:hidden;><img src="./assets/img/work_member_bg.png"/></div>'.'\'';//背景圖隱藏

                                    if($rows["0"]["motivation"] != null){
                                        //echo'+'.'\''.'<div class="MovTitle">'.'\'';
                                        echo'+'.'\''.'<div class="MovTitle"><div class="subTitle posMovTitle"><p>製作動機</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMovTitleText">'.$rows["0"]["motivation"].'</p></div></div>'.'\'';
                                        //echo'+'.'</div>'.'\'';
                                    }
                                    if($rows["0"]["feature"] != null){
                                        echo'+'.'\''.'<div class="FeaTitle"><div class="subTitle posFeaTitle"><p>專題特色</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posFeaTitleText">'.$rows["0"]["feature"].'</p></div></div>'.'\'';
                                    }
                                    if($rows["0"]["mechanism"] != null){
                                        echo'+'.'\''.'<div class="MecTitle"><div class="subTitle posMecTitle"><p>專題機制</p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText posMecTitleText">'.$rows["0"]["mechanism"].'</p></div></div>'.'\'';
                                    }
                                    /*echo'+'.'\''.'<div class="title"><p><b>專題展示</b></p></div>'.'\''.'+'.
                                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';*/
                                    echo'+'.'\''.'<div class="TitleMember"><div class="titleMember"><p>成員分工</p></div>'.'\''.'+';
                                    echo'\''.'<div class="slideshow-container" id="slideshow-container"></div></div>'.'\'';
                                    echo';';
                                echo'load = true;';
                                echo'showSlides(page);';
                            echo'}';                           
                            /*echo'if(w<=768){';
                                echo'document.getElementById("showGroup").innerHTML = ';
                                    echo
                                    '\''.'<div class="titleIntro"><p><b>專題介紹</b></p></div>'.'\''.'+'.
                                    '\''.'<div class="subTitle"><p>'.$rows["0"]["title"].'</p></div>'.'\''.'+'.
                                    '\''.'<div><p class="subTitleText">'.$rows["0"]["pIntro"].'</p></div>'.'\'';
                                    echo'+'.'\''.'<div class="title"><p><b>專題展示</b></p></div>'.'\''.'+'.
                                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';
                                    if($rows["0"]["motivation"] != null){
                                        echo'+'.'\''.'<div class="subTitle"><p><b>製作動機</b></p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText">'.$rows["0"]["motivation"].'</p></div>'.'\'';
                                    }
                                    if($rows["0"]["feature"] != null){
                                        echo'+'.'\''.'<div class="subTitle"><p><b>專題特色</b></p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText">'.$rows["0"]["feature"].'</p></div>'.'\'';
                                    }
                                    if($rows["0"]["mechanism"] != null){
                                        echo'+'.'\''.'<div class="subTitle"><p><b>專題機制</b></p></div>'.'\''.'+'.
                                            '\''.'<div><p class="subTitleText">'.$rows["0"]["mechanism"].'</p></div>'.'\'';
                                    }
                                    echo'+'.'\''.'<div class="title"><p><b>專題展示</b></p></div>'.'\''.'+'.
                                        '\''.'<video src="./assets/video/'.$id.'.mp4" controls></video>'.'\'';
                                    echo'+'.'\''.'<div class="titleMember"><p><b>成員分工</b></p></div>'.'\''.'+';
                                    echo'\''.'<div class="slideshow-container" id="slideshow-container"></div>'.'\'';
                                    echo';';
                                echo'load = true;';
                                echo'showSlides(page);';
                            echo'}';*/
                        echo'}; '; 
                        echo'console.log("已載入",load);';
                        echo'if(load == true){';
                        
                        echo'}';
                        echo'watchChangeSize();';
            echo'</script>';
        ?>
    </body>
</html>
