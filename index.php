<?php
/**
 * Created by PhpStorm.
 * User: SOPT
 * Date: 2017/8/12
 * Time: 20:11
 */
$userName='admin';

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $userName ?></title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="pages/home/index.css">
</head>
<body>
<div class="sq-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">aqdou</div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
        </div>
    </div>
</div>

<div class="sq-nav bg-white">
    <div class="container">
        <div class="row">
            <div class="row">
                <nav class="navbar navbar-default bg-white">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sqNav" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="sqNav">
                        <ul class="nav navbar-nav">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">插件源码解读</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">MySQL数据库</a></li>
                            <li><a href="#">Linux</a></li>
                            <li><a href="#">H5</a></li>
                            <li><a href="#">网页特效</a></li>
                            <li><a href="#">项目实战</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="sq-content">
    <div class="container">
        <div class="sq-banner bg-white mg-30"></div>
        <div class="row">
            <div class="col-md-9">
                <div class="sq-article bg-white mg-30">
                    <div class="sq-art-item">a</div>
                    <hr class="divider">
                    <div class="sq-art-item">b</div>
                    <hr class="divider">
                    <div class="sq-art-item">c</div>
                </div>
                <div class="sq-comment bg-white"></div>
            </div>
            <div class="col-md-3">
                <div class="sq-author bg-white">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="sq-footer">

</div>
<script src="lib/jquery/jquery-3.2.1.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>