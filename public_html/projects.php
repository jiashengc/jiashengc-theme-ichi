<!DOCTYPE html>
<html>
<head>
    <?php include ('../includes/header.php'); ?>
    <?php createTitle('Projects') ?>
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jiashengc-theme-ichi.css">
</head>

<body>

    <div id="barba-wrapper">
        <div class="container-fluid barba-container" data-namespace="projects">

            <?php include ('../includes/sidebar.php'); ?>

            <!-- CONTENT -->
            <div class="row ichi-body">
                <div class="ichi-body-colour">

                    <!-- CONTENT: LEFT SECTION -->
                    <div class="col-sm-8 col-md-6">
                        <div class="ichi-content ichi-content-back">
                            <div class="row">

                                <!-- CONTENT: LEFT LEFT SECTION -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="ichi-content-left">

                                        <h1 class="ichi-title">Projects</h1>
                                        <hr class="ichi-hr" align="left">
                                        <ul class="ichi-projects">
                                        </ul>

                                        <!-- <div class="ichi-footer">jiashengc@outlook.com</div> -->
                                    </div>
                                </div>

                                <!-- CONTENT: LEFT RIGHT SECTION -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="ichi-content-right">
                                        <div class="ichi-content-bottom">
                                            <h2 class="ichi-motto">
                                            </h2>

                                            <hr class="ichi-hr" align="left">

                                            <h3>Made with:</h3>
                                            <ul class="ichi-made-with">
                                            </ul>

                                            <br>
                                            <h4>Link:</h4>
                                            <span class="ichi-link"></span>
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
    <script>

        projects = [
            {
                "name": "Noshable",
                "tools": [
                    "Symfony",
                    "Doctrine",
                    "Twig",
                    "Bootstrap",
                    "AWS EC2 Ubuntu",
                    "LAMP"
                ],
                "motto": "Safer Food, For the Safer Future",
                "image": "noshable.png",
                "link": "https://app.noshable.org"
            },
            {
                "name": "Dating Languages Visual Novel",
                "tools": [
                    "Ren'py",
                    "Anime backgrounds from Google",
                    "References from programming languages"
                ],
                "motto": "Your Programming Language, Your Waifu",
                "image": "ruvlanguages.png",
                "link": "https://github.com/jiashengc/Dating-Languages"            
            },
            {
                "name": "Spheradical",
                "tools": [
                    "Sphero",
                    "Node.js",
                    "Socket.io",
                    "Bootstrap"
                ],
                "motto": "Drawing the Future with, Sphero",
                "image": "spheradical.png",
                "link": "https://github.com/jiashengc/spheradical"
            }
        ];

        function initialize() {
            let ichiProjects = document.getElementsByClassName('ichi-projects')[0];

            for (let i = 0; i < projects.length; i+=1) {
                ichiProjects.innerHTML += '<li class="ichi-project-list" onclick="changeProject(' + i + ')"><h4>' + projects[i].name + '</h4></li>';
            }
        }

        function changeProject(id) {
            let ichiMadeWith = document.getElementsByClassName('ichi-made-with')[0];
            let ichiMotto = document.getElementsByClassName('ichi-motto')[0];
            let ichiBody = document.getElementsByClassName('ichi-body')[0];
            let ichiLink = document.getElementsByClassName('ichi-link')[0];

            ichiMadeWith.innerHTML = '';
            ichiMotto.innerHTML = '';

            sProject = projects[id];
            motto = sProject.motto.split(',');
            let image = "url(\'" + 'images/' + sProject.image + "\')"

            $('.ichi-body').css('background-image', image);

            ichiLink.innerHTML = '<a href="' + sProject.link + '">' + sProject.link + '</a>';

            for (let n = 0; n < motto.length; n++) {
                let klass = "";
                if (n % 2 != 0) {
                    klass = "ichi-prime";
                }
                ichiMotto.innerHTML += '<span class="' + klass + '">' + motto[n] + '</span><br>';
            }

            for (let n = 0; n < sProject.tools.length; n++) {
                ichiMadeWith.innerHTML += '<li>' + sProject.tools[n] + '</li>';
            }
        }

        initialize();
        changeProject(0);
    </script>

</body>

</html>
