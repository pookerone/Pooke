<?php
    session_start();
    include_once('autoload.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>泡课网</title>
    <meta name="description" content="">
    <!--手机上的一些适配-->
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1,ser-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="apple-touch-startup-image" sizes="640x920" href="img/loading-640x920.png"
          media="screen and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" sizes="768x1004" href="img/loading-768x1004.png"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" sizes="640x1096" href="img/loading-640x1096.png"
          media="screen and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)">
    <link rel="apple-touch-icon-precomposed" sizes="114X114" href="img/iphone.png">
    <link rel="apple-touch-icon-precomposed" href="img/android.png">
    -->

    <!--下面注释的内容是直接引用CDN（内容交付网络）上面的资源，因为那样加载速度会更快-->
    <!--
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    -->
    <!--<link rel="stylesheet" href="css/themes/jquery.mobile-1.4.2.css"/>
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css"/>-->
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/common.css"/>
    <link rel="stylesheet" href="css/index.css"/>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">亲，您还在使用着 <strong>过时的</strong> 浏览器. 请您
    <a href="http://browsehappy.com/">更新</a> 一下吧以使您得到更好的体验哦！
</p>
<![end if]-->

<header>
    <div class="topBar">
        <nav>
            <div class="logo">
                <a href="index.php"><img src="img/images/ih_logo.png" alt=""/></a>
            </div>
            <div class="nav">
                <ul class="navHeader">
                    <li><a href="static/product/product.php">产品学院</a></li>
                    <li><a rel="nofollow" href="static/course/course.php">课程众筹</a></li>
                    <li><a rel="nofollow" href="static/ask/ask.php">专业问答</a></li>
                    <li><a rel="nofollow" href="static/user/user.php">我的课程</a></li>
                </ul>
            </div>
            <div class="loginTop">
                <ul>
                    <li><a rel="nofollow" href="static/user/login.php">登录</a></li>
                    <li><a rel="nofollow" href="static/user/register.php">注册</a></li>
                </ul>
            </div>
            <div class="logged">
                <ul>
                    <li><a class="message" href="static/user/message.php"><img src="img/images/ih_message.png" alt=""/></a></li>
                    <li><a class="userCenter" href="static/user/user.php"><img src="img/images/ih_userImage.png" alt=""/></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header-button">
        <a href="static/product/product.php">实现梦想</a>
    </div>
</header>
<section>
    <div id="content">
        <article class="content-partOne"></article>
        <article class="content-partTwo">
            <h1>梦想课程</h1>

           <?php 
            $indexData = new IndexData();
            $courseName[0] = "产品经理初级入门";
            $courseName[1] = "交互设计连连看";
            $courseName[2] = "视觉设计对对碰";
            $courseName[3] = "前端开发狂挠头";
            $rest = $indexData->getClassEvaluate($courseName);
            if ($rest)
            {
                $dataArray = $indexData->getResult();
              
                echo  '<div class="content-partTwo-courseList">
                <div class="course">
                    <div class="course-header">';
                       echo "<img src='";echo $dataArray[0]['pic_path']."'>
                    </div>
                    <div class=\"course-content\">";
                      echo  "<h2>$courseName[0]</h2>
                        <p>
                       <span>";echo $dataArray[0]['watch_man']."</span>人学习
                       <span>";echo $dataArray[0]['good_man']."</span>好评";
         
                           echo '<a href="index.php"><span class="course-content-button"></span></a>
                        </p>
                    </div>
                </div>
                <div class="course">
                    <div class="course-header">';
                        echo "<img src='";echo $dataArray[1]['pic_path']."'>
                    </div>
                    <div class=\"course-content\">";
                        echo "<h2>$courseName[1]</h2>
                        <p>
                           <span>";echo $dataArray[1]['watch_man']."</span>人学习
                           <span>";echo $dataArray[1]['good_man']."</span>好评";
                            echo '<a href="index.php"><span class="course-content-button"></span></a>
                        </p>
                    </div>
                </div>
                <div class="course">
                    <div class="course-header">';
                       echo "<img src='";echo $dataArray[2]['pic_path']."'>
                    </div>
                    <div class=\"course-content\">";
                        echo "<h2>$courseName[2]</h2>
                        <p>
                            <span>";echo $dataArray[2]['watch_man']."</span>人学习
                            <span>";echo $dataArray[2]['good_man']."</span>好评";
                           echo '<a href="index.php"><span class="course-content-button"></span></a>
                        </p>
                    </div>
                </div>
                <div class="course">
                    <div class="course-header">';
                        echo "<img src='";echo $dataArray[3]['pic_path']."'>
                    </div>
                    <div class=\"course-content\">";
                        echo "<h2>$courseName[3]</h2>
                        <p>
                            <span>";echo $dataArray[3]['watch_man']."</span>人学习
                            <span>";echo $dataArray[3]['good_man']."</span>好评";
               
                }
                    ?>
                            <a href="index.php"><span class="course-content-button"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <article class="content-partThree"></article>
        <article class="content-partFour">
            <h1>梦想计划</h1>

            <div class="content-partThree-planList">
                <div class="plan">
                    <div class="plan-header">
                        <img src="img/images/ic_plan_01.png">
                    </div>
                    <div class="plan-content">
                        <h2>产品公开课</h2>

                        <p>
                            最权威，最专业的免费产品公开课，让你零距离接触业界大牛。
                        </p>

                        <p>
                            每周相约在这里，系统化产品教学，让你的思维不再只是杂乱的知识堆积而已。
                        </p>
                    </div>
                </div>
                <div class="plan">
                    <div class="plan-header">
                        <img src="img/images/ic_plan_02.png">
                    </div>
                    <div class="plan-content">
                        <h2>微信答疑</h2>

                        <p>
                            有问题，问导师，将疑惑输入微信，让大师替你解答。
                        </p>

                        <p>
                            最专业的指导，随时随地接受，让你不再百思不得其解。
                        </p>
                    </div>
                </div>
                <div class="plan">
                    <div class="plan-header">
                        <img src="img/images/ic_plan_03.png">
                    </div>
                    <div class="plan-content">
                        <h2>模拟面试</h2>

                        <p>
                            最真实的氛围，最专业的面试官，最严格的流程，让你提前体验真正的互联网面试。
                        </p>

                        <p>
                            针对性点评，权威指导，提升面试水平，成就面霸之路。
                        </p>
                    </div>
                </div>
                <div class="plan">
                    <div class="plan-header">
                        <img src="img/images/ic_plan_04.png">
                    </div>
                    <div class="plan-content">
                        <h2>项目实战</h2>

                        <p>
                            没有项目经理？想要通往互联网企业的通行证？
                        </p>

                        <p>
                            不急，来这儿，让你真正参与互联网项目运作，积累项目经验，在众多求职者中脱颖而出。
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <article class="content-partFive"></article>
        <article class="content-partSix">
            <h1>梦想导师</h1>

            <div class="content-partSix-teacherList">
                <div class="teacher">
                    <a></a>
                </div>
                <div class="teacher">
                    <a></a>
                </div>
                <div class="teacher">
                    <a></a>
                </div>
                <div class="teacher">
                    <a></a>
                </div>
            </div>
        </article>
    </div>
</section>
<footer>
    <div class="bottomBar">
        <nav>
            <ul class="navFooter">
                <li><a href="#">关于我们</a></li>
                <li><a href="#">嘉宾入驻</a></li>
                <li><a href="#">联系我们</a></li>
                <li><a href="#">友情链接</a></li>
                <li><a href="#">QQ群:366518004</a></li>
            </ul>
            <p>Copyright&copy;2013-2014 ipooke.com</p>
        </nav>
    </div>
    <div class="footer-button">
        <a href="static/user/register.php">立即注册</a>
    </div>
    <address></address>
</footer>
<!--下面注释的内容是直接引用CDN（内容交付网络）上面的资源，因为那样加载速度会更快-->
<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
-->

<!--下面的内容是加载页面要用的js文件-->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<!--<script src="js/vendor/jquery.mobile-1.4.2.min.js"></script>-->
<script src="js/vendor/jquery.cookie.js"></script>
<script src="js/plugins.js"></script>
<!--下面两个js文件是完成ajax的一个插件-->
<!--
<script src="js/mine/base.js"></script>
<script src="js/mine/score.js"></script>
-->
<script src="js/index.js"></script>


<!-- 下面的注释是引用谷歌的站点统计分析工具的js代码-->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>-->
</body>
</html>
