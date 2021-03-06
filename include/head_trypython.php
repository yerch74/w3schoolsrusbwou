<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Python Tryit Editor v1.0. Онлайн редактор від W3Schools українською</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="../images/w3schools_logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <link rel="stylesheet" href="../styles/w3.css">
    <link rel="stylesheet" href="../lib/codemirror.css">
    <script src="../lib/codemirror.js"></script>
    <script src="../lib/codemirror_python.js"></script>

    <script src="../scripts/pythontryit_head.js"></script>
    <link rel="stylesheet" href="../styles/pythontryit_head.css">

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
        <a id="tryhome" href="../index.php" target="_blank" title="Головна сторінка W3Schools" class="w3-button w3-bar-item topnav-icons fa fa-home" style="font-size:28px;margin-top:-2px"></a>
        <a href="javascript:void(0);" onclick="openMenu()" id="menuButton" title="Відкрити меню" class="w3-dropdown-click w3-button w3-bar-item topnav-icons fa fa-menu" style="font-size:28px;margin-top:-2px"></a>
        <a href="javascript:void(0);" onclick="restack(currentStack)" title="Змінити орієнтацію" class="w3-button w3-bar-item topnav-icons fa fa-rotate" style="font-size:28px;margin-top:-2px"></a>
        <button class="w3-bar-item w3-button topnav-icons fa fa-adjust" onclick="retheme()" style="font-size:28px;margin-top:-2px;width:58px;" title="Змінити тему"></button>
        <button class="w3-button w3-bar-item w3-green w3-hover-white w3-hover-text-green" onclick="submitTryit(1);ga('send', 'event', 'runCodePython', 'click');snhb.queue.push(function(){googletag.pubads().setTargeting('page_section',(function () {var folder = location.pathname;folder = folder.replace('https://w3schoolsua.github.io/', ''); folder = folder.substr(0, folder.indexOf('https://w3schoolsua.github.io/')); return folder + 'tryitUA'; })());snhb.startAuction(['try_it_leaderboard']);});">Виконати &raquo;</button>
        <span class="w3-right w3-hide-medium w3-hide-small" style="padding:8px 8px 8px 8px;display:block"></span>
        <span class="w3-right w3-hide-small" style="padding:8px 0;display:block;float:right;"><span id="framesize"></span></span>
    </div>
</div>
<a href="javascript:void(0)" id="dragbar"></a> <!--для закрытия меню бургера-->

<div id="container">
    <div id="navbarDropMenu" class="w3-dropdown-content w3-bar-block w3-border" style="z-index:5">
        <span onclick="openMenu()" class="w3-button w3-display-topright w3-transparent w3-hover-dark-grey" title="Закрити меню" style="font-weight:bold;padding-top:10px;padding-bottom:11px;">&times;</span>
        <div class="w3-bar-block">
            <a class="w3-bar-item w3-button" href='javascript:void(0);' title="Змінити орієнтацію" onclick="openMenu();restack(currentStack)"><i class="fa fa-rotate" style="font-size:26px;margin-left:-4px;margin-right:8px"></i><span style="position:relative;top:-4px;left:2px;">Змінити орієнтацію</span></a>
            <a class="w3-bar-item w3-button" href="http://pythonfiddle.com/" target="_blank" title='Відкрити редактор PythonFiddle'><img src="../images/python_fiddler.png" alt='Онлайн-редактор PythonFiddle. W3Schools українською' style="margin-right:10px;width:24px;"><span style='position:relative;left:1px;'>Відкрити редактор PythonFiddle</span></a>
            <a class="w3-bar-item w3-button" href="https://www.tutorialspoint.com/execute_python_online.php" target="_blank" title='Відкрити онлайн-редактор Tutorialspoint'><img src="../images/tutorialspoint_logo.png" alt='Онлайн-редактор Tutorialspoint. W3Schools українською' style="margin-right:10px;width:24px;"><span style='position:relative;left:1px;'>Відкрити редактор Tutorialspoint</span></a>
            <a class="w3-bar-item w3-button" href="https://www.codechef.com/ide" target="_blank" title='Відкрити редактор Codechef'><img src="../svg/codechef_logo.svg" alt='Онлайн-редактор Codechef. W3Schools українською' style="margin-right:10px;width:24px;"><span style='position:relative;left:1px;'>Відкрити редактор Codechef</span></a>
            <a class="w3-bar-item w3-button" href="http://codepad.org/" target="_blank" title='Відкрити редактор CodePad'><img src="../images/liveweave.png" alt='Онлайн-редактор CodePad. W3Schools українською' style="margin-right:10px;width:24px;"><span style='position:relative;left:1px;'>Відкрити редактор CodePad</span></a>
        </div>
        <footer class="w3-container w3-small w3-light-gray">
            <p><a style="display:inline;padding:0;" href="../about/about_privacy.php" target="_blank" onclick="openMenu();" class="w3-hover-none w3-hover-text-green">Політика конфіденційності</a> та<br>
                <a style="display:inline;padding:0;" href="../about/about_copyright.php" target="_blank" onclick="openMenu();" class="w3-hover-none w3-hover-text-green">Copyright 1999-2021</a></p>
        </footer>
    </div>
    <div id="menuOverlay" class="w3-overlay w3-transparent" style="cursor:pointer;z-index:4"></div>