<!DOCTYPE html>
<html>
<head>
    <?php include ('../includes/header.php'); ?>
    <?php createTitle('Computer Science Student Portfolio') ?>
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jiashengc-theme-ichi.css">
</head>

<body>

    <div id="barba-wrapper">
        <div class="container-fluid barba-container">

            <?php include ('../includes/sidebar.php'); ?>

            <!-- CONTENT -->
            <div class="row ichi-body">
                <div class="ichi-body-colour">

                    <!-- CONTENT: LEFT SECTION -->
                    <div class="col-sm-8 col-md-6">
                        <div class="ichi-content ichi-content-back">
                            <div class="row">

                                <!-- CONTENT: LEFT LEFT SECTION -->
                                <div class="col-sm-6">
                                    <div class="ichi-content-left">

                                        <h1 class="ichi-title">Jia Sheng Chong</h1>
                                        <hr class="ichi-hr" align="left">
                                        <h4>Full Stack Web Developer | Visual Novel Developer</h4>

                                        <!-- <div class="ichi-footer">jiashengc@outlook.com</div> -->
                                    </div>
                                </div>

                                <!-- CONTENT: LEFT RIGHT SECTION -->
                                <div class="col-sm-6">
                                    <div class="ichi-content-right">
                                        <div class="ichi-content-bottom">
                                            <h2>
                                                <span>What I've done, and </span><br>
                                                <span class="ichi-prime">What I can do</span>
                                            </h2>

                                            <hr class="ichi-hr" align="left">

                                            <h3>Projects:</h3>
                                            <ul>
                                                <li>Noshable</li>
                                                <li>Dating Languages</li>
                                                <li>Spheradical</li>
                                            </ul>

                                            <h3>Development:</h3>
                                            <ul>
                                                <li>Symfony, Doctrine, Twig</li>
                                                <li>Linux, Apache, MySQL, PHP (LAMP)</li>
                                                <li>Node.js, Vue.js, jQuery</li>
                                                <li>Bootstrap</li>
                                                <li>Ren'Py</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT: RIGHT SECTION -->
                    <div class="col-sm-4 col-md-6">

                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="node_modules/barba.js/dist/barba.min.js"></script>
    <script src="js/transition.js"></script>

</body>

</html>
