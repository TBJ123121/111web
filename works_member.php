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
        <link href="css/works.css" rel="stylesheet" >
        <link href="./css/template.css" rel="stylesheet" />
        <link href="./css/works_member.css" rel="stylesheet" />
        <script src="js/showGroup.js"></script>
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
        <header class="masthead" style="animation: ">
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
                    
                    function watchChangeSize (){    
                        w = window.innerWidth;
                    }

                    window.onresize=function(){  
                        watchChangeSize();
                        showSlides(page);
                    }

                    window.onload = function(){
                        watchChangeSize();
                        showSlides(page);
                    }

                    function showSlides(page){
                        console.log("被呼叫");
                        father = document.getElementById("slideshow-container");
                        father.innerHTML = "";
                        if(w > 768){
                            console.log(w);
                            switch(page){';
                                $rows = $stmt->fetchAll();
                                for ($num = 1; $num <= count($rows) ; ++$num){
                                    echo 'case '.$num.':father.innerHTML =';
                                    for($i = $num; $i<=$num+2 ; ++$i){
                                        if($i-count($rows) > 0){
                                            $temp = $i-count($rows);
                                            echo'\''.'<div class="mySlides" id="'.$temp.'" style="display:block;">'.'\''.'+'.
                                            '\''.'<img src="./assets/teamMember/team'.$rows[$temp-1]["groupId"].'/'.$temp.'.jpg" style="width:100%"/>'.'\''.'+'.
                                            '\''.'</div>'.'\'';
                                            if($i - $num < 2){
                                                echo'+';
                                            }else{
                                                echo';';
                                            }
                                        }else{
                                            echo'\''.'<div class="mySlides" id="'.$i.'" style="display:block;">'.'\''.'+'.
                                            '\''.'<img src="./assets/teamMember/team'.$rows[$i-1]["groupId"].'/'.$i.'.jpg" style="width:100%"/>'.'\''.'+'.
                                            '\''.'</div>'.'\'';
                                            if($i <= $num+1){
                                                echo'+';
                                            }else if($i == $num+2){
                                                echo';';
                                            }
                                        }
                                    }
                                    echo'break;';
                                    /*if($num < count($rows)){
                                        echo'+';
                                    }*/
                                }
                            echo'}}';
                        echo'else if(w <= 768){console.log(w);switch(page){';
                        for ($num = 1; $num <= count($rows) ; ++$num){
                            echo'case '.$num.':father.innerHTML =';
                            echo'\''.'<div class="mySlides" id="'.$num.'" style="display:block;">'.'\''.'+'.
                            '\''.'<img src="./assets/teamMember/team'.$rows[$num-1]["groupId"].'/'.$num.'.jpg" style="width:100%"/>'.'\''.'+'.
                            '\''.'</div>'.'\'';
                            echo';';
                            echo'break;';
                        }
                        echo'}}}';
                        echo'function showPlusSlides() {';
                        echo'++page;if(page > '.count($rows).'){page = 1;}showSlides(page);}';
                        echo'function showReduceSlides() {';
                        echo'--page;if(page < 1){page = '.count($rows).';}showSlides(page);}';
                                
            echo'</script>';
        ?>
    </body>
</html>
