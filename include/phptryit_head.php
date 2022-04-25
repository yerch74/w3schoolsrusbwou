<!DOCTYPE html>
<html lang="uk">
<head>
    <title>PHP Tryit Editor v1.2 - Онлайн-редактор PHP кода. W3Schools українською</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="../images/w3schools_logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <link rel="stylesheet" href="../styles/w3.css">
    <link rel="stylesheet" href="../lib/codemirror.css">
    <script src="../lib/codemirror.js"></script>
    <script src="../lib/codemirror_htmlmixed.js"></script>
    <script src="../lib/codemirror_javascript.js"></script>
    <script src="../lib/codemirror_css.js"></script>
    <script src="../lib/codemirror_clike.js"></script>
    <script src="../lib/codemirror_php.js"></script>
    <script src="../scripts/phptryit_head.js"></script>
    <link rel="stylesheet" href="../styles/tryitstyle_php.css">
    <!--[if lt IE 8]>
    <style>
        #textareacontainer, #iframecontainer {width:48%;}
        #container {height:500px;}
        #textarea, #iframe {width:90%;height:450px;}
        #textareaCode, #iframeResult {height:450px;}
        .stack {display:none;}
    </style>
    <![endif]-->
</head>

<body>
<div class="trytopnav">
    <div class="w3-bar" style="overflow:auto">
        <a id="tryhome" href="../index.php" target="_blank" title="Головна сторінка" class="w3-button w3-bar-item topnav-icons fa fa-home" style="font-size:28px;margin-top:-2px"></a>
        <a href="javascript:void(0);" onclick="openMenu()" id="menuButton" title="Відкрити меню" class="w3-dropdown-click w3-button w3-bar-item topnav-icons fa fa-menu" style="font-size:28px;margin-top:-2px"></a>
        <a href="javascript:void(0);" onclick="restack(currentStack)" title="Змінити орієнтацію" class="w3-button w3-bar-item topnav-icons fa fa-rotate" style="font-size:28px;margin-top:-2px"></a>
        <button class="w3-bar-item w3-button topnav-icons fa fa-adjust" onclick="retheme()" title="Змінити тему" style="font-size:28px;margin-top:-2px;width:58px;"></button>
        <button class="w3-button w3-bar-item w3-green w3-hover-white w3-hover-text-green" onclick="submitTryit(1);ga('send', 'event', 'runCodePython', 'click');snhb.queue.push(function(){googletag.pubads().setTargeting('page_section',(function () {var folder = location.pathname;folder = folder.replace('https://w3schoolsua.github.io/', ''); folder = folder.substr(0, folder.indexOf('https://w3schoolsua.github.io/')); return folder + 'tryitUA'; })());snhb.startAuction(['try_it_leaderboard']);});">Виконати &raquo;</button>
        <span class="w3-right w3-hide-medium w3-hide-small" style="padding:8px 8px 8px 8px;display:block"></span>
        <span class="w3-right w3-hide-small" style="padding:8px 0;display:block;float:right;"><span id="framesize"></span></span>
    </div>
</div>

<a href="javascript:void(0)" id="dragbar"></a>
<div id="container">
    <div id="navbarDropMenu" class="w3-dropdown-content w3-bar-block w3-border" style="z-index:5">
        <span onclick="openMenu()" class="w3-button w3-display-topright w3-transparent w3-hover-dark-grey" title="Закрыть меню" style="font-weight:bold;padding-top:10px;padding-bottom:11px;">&times;</span>
        <div class="w3-bar-block">
            <a class="w3-bar-item w3-button" href='javascript:void(0);' title="Змінити орієнтацію" onclick="openMenu();restack(currentStack)"><i class="fa fa-rotate" style="font-size:26px;margin-left:-4px;margin-right:8px"></i><span style="position:relative;top:-4px;left:2px;">Змінити орієнтацію</span></a>
        </div>
        <footer class="w3-container w3-small w3-light-gray">
            <p class="w3-small"><a style="display:inline;padding:0;" href="../about/about_privacy.php" target="_blank" onclick="openMenu();" class="w3-hover-none w3-hover-text-green">Політика конфіденційності</a> та<br>
                <a style="display:inline;padding:0;" href="../about/about_copyright.php" target="_blank" onclick="openMenu();" class="w3-hover-none w3-hover-text-green">Copyright 1999-2021</a></p>
        </footer>
    </div>
    <div id="menuOverlay" class="w3-overlay w3-transparent" style="cursor:pointer;z-index:4"></div>
    <div id="textareacontainer">
        <div id="textarea">
            <div id="textareawrapper">