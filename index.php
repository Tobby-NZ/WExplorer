<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>WExplorer</title>
    <link rel="stylesheet" href="css/metro.min.css">
    <!--<link rel="stylesheet" href="css/metro-responsive.min.css">-->
    <link rel="stylesheet" href="css/metro-schemes.min.css">
    <link rel="stylesheet" href="css/metro-rtl.min.css">
    <link rel="stylesheet" href="css/metro-icons.min.css">
</head>
<body>
    <div class="app-bar fixed-top">
        <a class="app-bar-element">
            <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
            <div class="app-bar-drop-container" data-role="dropdown" data-toggle-element="#toggle-tiles-dropdown" data-no-close="false" style="width: 324px;">
                <div class="tile-container bg-white">
                    <div class="tile-small bg-cyan">
                        <div class="tile-content iconic">
                            <span class="icon mif-onedrive" onclick="$.Notify({
                                caption: 'Erreur :',
                                content: 'Item not found.',
                                type: 'alert'
                             });"></span>
                        </div>
                    </div>
                    <div class="tile-small bg-yellow">
                        <div class="tile-content iconic">
                            <span class="icon mif-google" onclick="$.Notify({
                                caption: 'Erreur :',
                                content: 'Item not found.',
                                type: 'alert'
                             });"></span>
                        </div>
                    </div>
                    <div class="tile-small bg-red">
                        <div class="tile-content iconic">
                            <span class="icon mif-facebook" onclick="$.Notify({
                                caption: 'Erreur :',
                                content: 'Item not found.',
                                type: 'alert'
                             });"></span>
                        </div>
                    </div>
                    <div class="tile-small bg-green">
                        <div class="tile-content iconic">
                            <span class="icon mif-twitter" onclick="$.Notify({
                                caption: 'Erreur :',
                                content: 'Item not found.',
                                type: 'alert'
                             });"></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li><a href="">WExplorer</a></li>
            <!--
            <li>
                <a href="" class="dropdown-toggle">Products</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Windows 10</a></li>
                    <li><a href="">Spartan</a></li>
                    <li><a href="">Outlook</a></li>
                    <li><a href="">Office 2015</a></li>
                    <li class="divider"></li>
                    <li><a href="" class="dropdown-toggle">Other Products</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">Internet Explorer 10</a></li>
                            <li><a href="">Skype</a></li>
                            <li><a href="">Surface</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="">Support</a></li>
            <li><a href="">Help</a></li>
        </ul>
    </div>


    <!--
    <div class="main-content" style="margin-top: 3.125rem">

    </div>-->
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/metro.min.js"></script>
</body>
</html>