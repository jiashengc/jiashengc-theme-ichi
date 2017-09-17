<?php
    $domain = "http://$_SERVER[HTTP_HOST]";
?>

<div class="ichi-circle" onclick="openNav();">
    <div id="nav-icon1">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- SIDE BAR -->
<div class="row ichi-side-bar">
    
    <!-- SIDE BAR: LEFT SECTION -->
    <div class="col-sm-6">
        <div class="ichi-content">
            <div class="row">

                <!-- SIDE BAR: LEFT LEFT SECTION -->
                <div class="col-xs-5 col-sm-6">
                    <div class="ichi-content-left">

                        <h1 class="ichi-title">Menu</h1>
                        <hr class="ichi-hr" align="left">
                        <h4 class="faustina">
                            <span>Let's starting facing towards tomorrow again, </span><br>
                            <span>
                                <a href="https://www.youtube.com/watch?v=fIMUKz-5uNs" class="ichi-prime">Both You and I.</a>
                            </span>
                            <br><br>
                            <span><i>- Night Sky Patrol of Tomorrow</i></span>
                        </h4>
                        <hr class="ichi-hr" align="left">

                        <h4>Social Links</h4>
                        <p class="ichi-social">
                            <a href="https://github.com/jiashengc">
                                <i class="fa fa-github" aria-hidden="true"></i>  
                            </a>       
                            <a href="https://linkedin.com/in/jiashengc">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>                     
                        </p>

                    </div>
                </div>

                <!-- SIDE BAR: LEFT RIGHT SECTION -->
                <div class="col-xs-7 col-sm-6">
                    <div class="ichi-content-right">
                        <h5 class="ichi-title-sm">Navigation ~</h5>
                        <nav class="ichi-nav">
                            <a href="./"><h2>Home</h2></a>
                            <a href="about"><h2>About</h2></a>
                            <a href="projects"><h2>Projects</h2></a>
                            <a class="no-barba" href="resume.pdf"><h2>Resume</h2></a>

                            <br>
                            <a href="http://blog.jiashengc.com"><h2>Blog</h2></a>                                  
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SIDE BAR: RIGHT SECTION -->
    <div class="col-sm-6">

    </div>

</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
    let open = false;

    function openNav() {
        document.getElementsByClassName("ichi-side-bar")[0].style.width = "100vw";
    }

    function closeNav() {
        document.getElementsByClassName("ichi-side-bar")[0].style.width = "0";
    }

    $(document).ready(function() {
        var movementStrength = 25;
        var height = movementStrength / $(window).height();
        var width = movementStrength / $(window).width();
        $(".ichi-body").mousemove(function(e){
                var pageX = e.pageX - ($(window).width() / 2);
                var pageY = e.pageY - ($(window).height() / 2);
                var newvalueX = width * pageX * -1 - 25;
                var newvalueY = height * pageY * -1 - 50;
                $('.ichi-body').css("background-position", newvalueX+"px     "+newvalueY+"px");
        });

        $('.ichi-circle').click(function(){
            $('#nav-icon1').toggleClass('open');
            if (open) {
                closeNav();
                open = false;
            } else {
                openNav();
                open = true;
            }

        });
    });
</script>
