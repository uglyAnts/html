<?php
/**
 * Created by PhpStorm.
 * User: SOPT
 * Date: 2017/8/12
 * Time: 20:11
 */
$userName='志向成为一名专业的全栈开发工程师，因为专注，所以专业。';

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $userName ?></title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/jsTree/themes/default/style.css">
    <link rel="stylesheet" href="pages/home/index.css">
</head>
<body>
<div class="sq-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">全栈开发</div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
        </div>
    </div>
</div>

<div class="sq-nav bg-white">
    <div class="container">
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
                        <li><a href="#">HTML+CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">MySQL数据库</a></li>
                        <li><a href="#">Linux</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="sq-content">
    <div class="container">
        <div class="sq-banner bg-white vertical-gap"></div>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <!--文章分类列表-->
                <div class="sq-left-tag bg-white vertical-gap">
                    <div class="title">文章目录</div>
                    <div class="content">
                        <div id="articleListTree" class="article-list-tree"></div>
                    </div>
                </div>
            </div>


            <div class="col-sm-8 col-md-6 vertical-gap">
                <!--最近文章列表模块-->
                <div class="sq-article bg-white vertical-gap">
                    <h3 class="text-center"><a href="#" target="_blank">来一场公平的性能测试</a></h3>
                    <div class="text-center">作者：两只哈士奇</div>
                    <p class="text-justify">网上充斥着各式各样的 PHP 框架性能对比的文章。然而，他们总是把“苹果”和“橘子”做对比（看上去有点儿像，都是圆的，但其实不是一码事）。这次，我将着重对 Laravel、Symfony 和 Zend 这三个框架做性能对比，并且还要说明为什么这三个框架总是被错误的进行比较。</p>
                    <div>发布时间：2017-02-08 15:25:30 <span class="pull-right">浏览量：3250</span></div>
                    <hr class="divider">
                    <div class="text-right"><a href="#" target="_blank" class="btn btn-danger btn-sm">阅读全文</a></div>
                </div>
                <div class="sq-article bg-white vertical-gap">
                    <h3 class="text-center"><a href="#" target="_blank">来一场公平的性能测试</a></h3>
                    <div class="text-center">作者：两只哈士奇</div>
                    <p class="text-justify">网上充斥着各式各样的 PHP 框架性能对比的文章。然而，他们总是把“苹果”和“橘子”做对比（看上去有点儿像，都是圆的，但其实不是一码事）。这次，我将着重对 Laravel、Symfony 和 Zend 这三个框架做性能对比，并且还要说明为什么这三个框架总是被错误的进行比较。</p>
                    <div>发布时间：2017-02-08 15:25:30 <span class="pull-right">浏览量：3250</span></div>
                    <hr class="divider">
                    <div class="text-right"><a href="#" target="_blank" class="btn btn-danger btn-sm">阅读全文</a></div>
                </div>
                <div class="sq-article bg-white vertical-gap">
                    <h3 class="text-center"><a href="#" target="_blank">来一场公平的性能测试</a></h3>
                    <div class="text-center">作者：两只哈士奇</div>
                    <p class="text-justify">网上充斥着各式各样的 PHP 框架性能对比的文章。然而，他们总是把“苹果”和“橘子”做对比（看上去有点儿像，都是圆的，但其实不是一码事）。这次，我将着重对 Laravel、Symfony 和 Zend 这三个框架做性能对比，并且还要说明为什么这三个框架总是被错误的进行比较。</p>
                    <div>发布时间：2017-02-08 15:25:30 <span class="pull-right">浏览量：3250</span></div>
                    <hr class="divider">
                    <div class="text-right"><a href="#" target="_blank" class="btn btn-danger btn-sm">阅读全文</a></div>
                </div>
                <div class="sq-article bg-white vertical-gap">
                    <h3 class="text-center"><a href="#" target="_blank">来一场公平的性能测试</a></h3>
                    <div class="text-center">作者：两只哈士奇</div>
                    <p class="text-justify">网上充斥着各式各样的 PHP 框架性能对比的文章。然而，他们总是把“苹果”和“橘子”做对比（看上去有点儿像，都是圆的，但其实不是一码事）。这次，我将着重对 Laravel、Symfony 和 Zend 这三个框架做性能对比，并且还要说明为什么这三个框架总是被错误的进行比较。</p>
                    <div>发布时间：2017-02-08 15:25:30 <span class="pull-right">浏览量：3250</span></div>
                    <hr class="divider">
                    <div class="text-right"><a href="#" target="_blank" class="btn btn-danger btn-sm">阅读全文</a></div>
                </div>
                <div class="sq-article bg-white vertical-gap">
                    <h3 class="text-center"><a href="#" target="_blank">来一场公平的性能测试</a></h3>
                    <div class="text-center">作者：两只哈士奇</div>
                    <p class="text-justify">网上充斥着各式各样的 PHP 框架性能对比的文章。然而，他们总是把“苹果”和“橘子”做对比（看上去有点儿像，都是圆的，但其实不是一码事）。这次，我将着重对 Laravel、Symfony 和 Zend 这三个框架做性能对比，并且还要说明为什么这三个框架总是被错误的进行比较。</p>
                    <div>发布时间：2017-02-08 15:25:30 <span class="pull-right">浏览量：3250</span></div>
                    <hr class="divider">
                    <div class="text-right"><a href="#" target="_blank" class="btn btn-danger btn-sm">阅读全文</a></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <div class="sq-author bg-white vertical-gap">
                    <div class="sq-author-name">
                        两只哈士奇
                    </div>
                    <div class="sq-author-head">
                        <div class="pull-left">
                            修德·博学·求实·创新
                        </div>
                        <img class="pull-right" src="pages/home/img/head.png">
                    </div>
                    <p>两只哈士奇，毕业于重庆邮电大学计算机科学与技术专业，一直从事前端开发工作。生活之余主要研究“拍黄片”、MySQL数据库设计、Linux操作系统。自封前端大屌、“拍片”小能手、MySQL小霸王、Linux学习机、Bug终结者...</p>
                    <p>志向成为一名专业的全栈开发工程师，因为专注，所以专业。</p>
                </div>

                <!--数据统计展示-->
                <div class="sq-left-tag bg-white vertical-gap">
                    <div class="title">统计面板</div>
                    <div class="content"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sq-footer">

</div>
<script src="lib/jquery/jquery-3.2.1.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script>
<script src="lib/jsTree/jstree.js"></script>
<script src="pages/home/index.js"></script>
</body>
</html>