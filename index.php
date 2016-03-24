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
    <!--<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <link rel="stylesheet" href="css/design.css">
</head>
<body class="bg-darkCobalt" style="overflow-y: hidden;">
    <!-- DEBUT MENU HEADER -->
    <div class="app-bar fixed-top">
        <a class="app-bar-element">
            <span id="toggle-tiles-dropdown" class="mif-2x mif-windows"></span>
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
            <li><a href="./">WExplorer</a></li>
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
            <li><a href="">Help</a></li>-->
        </ul>
    </div>
    <!-- FIN MENU HEADER -->
    <!-- DEBUT CORPS PAGE -->
    <div class="main-content" style="margin-top: 3.125rem; width: 4000px;">
        <!-- DEBUT CONTAINER GROUPE TUILES -->
        <!-- DEBUT GROUPE SERIES -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Séries</span>
            <div class="tile-container"><?php for($i=0;$i<9;$i++){?>
                <div class="tile" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-cyan fg-white">
                        <span class="icon mif-youtube-play"></span>
                        <span class="tile-badge">5+</span>
                        <span class="tile-label">Séries</span>
                    </div>
                </div><?php } ?>
            </div>
        </div>
        <!-- FIN GROUPE SERIES -->
        <!-- DEBUT GROUPE FILMS -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Films</span>
            <div class="tile-container"><?php for($i=0;$i<9;$i++){ ?>
                <div class="tile" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-red fg-white">
                        <span class="icon mif-film"></span>
                        <span class="tile-badge">13+</span>
                        <span class="tile-label">Films</span>
                    </div>
                </div><?php } ?>
             </div>
         </div>
        <!-- FIN GROUPE FILMS -->
        <!-- DEBUT GROUPE MUSIQUES -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Musiques</span>
            <div class="tile-container"><?php for($i=0;$i<9;$i++){ ?>
                    <div class="tile" data-role="tile" data-effect="slideUpDown">
                        <div class="tile-content iconic bg-yellow fg-white">
                            <span class="icon mif-music"></span>
                            <span class="tile-badge">4+</span>
                            <span class="tile-label">Musiques</span>
                        </div>
                    </div><?php } ?>
            </div>
        </div>
        <!-- FIN GROUPE MUSIQUES -->
        <!-- DEBUT GROUPE IMAGES -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Images</span>
            <div class="tile-container">
                <div class="tile" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-green fg-white">
                        <span class="icon mif-image"></span>
                        <span class="tile-badge">2+</span>
                        <span class="tile-label">Images</span>
                    </div>
                </div>
                <div class="tile-wide" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-green fg-white">
                        <span class="icon mif-image"></span>
                        <span class="tile-badge">2+</span>
                        <span class="tile-label">Images</span>
                    </div>
                </div>
                <div class="tile-large" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-green fg-white">
                        <span class="icon mif-image"></span>
                        <span class="tile-badge">2+</span>
                        <span class="tile-label">Images</span>
                    </div>
                </div><?php for($i=0;$i<4;$i++){?>
                <div class="tile-small" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-green fg-white">
                        <span class="icon mif-image"></span>
                        <span class="tile-badge">2+</span>
                        <span class="tile-label">Images</span>
                    </div>
                </div><?php } ?>

            </div>
        </div>
        <!-- FIN GROUPE IMAGES -->
        <!-- DEBUT GROUPE APPLICATIONS -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Applications</span>
            <div class="tile-container"><?php for($i=0;$i<3;$i++){?>
                <div class="tile" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-brown fg-white">
                        <span class="icon mif-apps"></span>
                        <span class="tile-badge">7+</span>
                        <span class="tile-label">Applications</span>
                    </div>
                </div><?php } ?>
            </div>
        </div>
        <!-- FIN GROUPE APPLICATIONS -->
        <!-- DEBUT GROUPE DOCUMENTS -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Documents</span>
            <div class="tile-container" style="width: 480px; height: 480px;"><?php for($i=0;$i<3;$i++){?>
                <div class="tile" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-brown fg-white">
                        <span class="icon mif-file-text"></span>
                        <span class="tile-badge">13+</span>
                        <span class="tile-label">Documents</span>
                    </div>
                </div><?php } ?>
            </div>
        </div>
        <!-- FIN GROUPE DOCUMENTS -->
        <!-- DEBUT GROUPE DOCUMENTS -->
        <div class="tile-group triple">
            <span class="tile-group-title titre-tuile">Divers</span>
            <div class="tile-container"><?php for($i=0;$i<9;$i++){?>
                <div class="tile" data-role="tile" data-effect="slideUpDown">
                    <div class="tile-content iconic bg-black fg-white">
                        <span class="icon mif-lab"></span>
                        <span class="tile-badge">8+</span>
                        <span class="tile-label">Divers</span>
                    </div>
                </div><?php } ?>
            </div>
        </div>
        <!-- FIN GROUPE DOCUMENTS -->
        <!-- FIN CONTAINER GROUPE TUILES -->
    </div>
    <!-- FIN CORPS PAGE -->
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/metro.min.js"></script>
</body>
</html>