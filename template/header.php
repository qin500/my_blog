<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="<?php echo $config['keywords']; ?>"/>
    <meta name="description" content="<?php echo $config['description']; ?>" />
    <title><?php echo $config['title'] ?></title>
    <style>
        .icon {
            width: 1em;
            height: 1em;
            vertical-align: -0.15em;
            fill: currentColor;
            overflow: hidden;
        }
    </style>
    <link href="//at.alicdn.com/t/font_2113112_ayxk7kfe5d6.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <div class="tophead">
        <div class="wp">
            <div class="welcome">您好,朋友 现在是 <span class="time"></span></div>
            <div class="access">
                <a class="login" href="/login">登录</a>
            </div>
        </div>

    </div>
    <div class="wp">
        <div class="logo">
            <a href="/">在路上个人博客</a>
        </div>
        <ul id="topmenu">
            <li class="item active"><a href="/">网站首页</a></li>
            <li class="item"><a href="/list">文章列表</a></li>
            <li class="item"><a href="/tool">在线工具</a></li>
            <li class="item"><a href="/">给我留言</a></li>
            <li class="item"><a href="/about">关于我</a></li>
        </ul>
    </div>

</header>
<div id="search">
    <div class="search-warp">
        <input type="text" name="text" class="text" placeholder="请输入要查询的关键字">
        <button class="button">搜索</button>
    </div>
</div>

