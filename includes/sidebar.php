<?php
    $domain = "http://$_SERVER[HTTP_HOST]";
?>

<!-- SIDE BAR -->
<div class="row ichi-side-bar">
    
    <!-- SIDE BAR: LEFT SECTION -->
    <div class="col-sm-6">
        <div class="ichi-content">
            <div class="row">

                <!-- SIDE BAR: LEFT LEFT SECTION -->
                <div class="col-sm-6">
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
                <div class="col-sm-6">
                    <div class="ichi-content-right">
                        <h5 class="ichi-title-sm">Navigation ~</h5>
                        <nav class="ichi-nav">
                            <a href="<?php echo $domain . '/index.php'; ?>"><h2>Home</h2></a>
                            <a href="<?php echo $domain . '/about.php'; ?>"><h2>About</h2></a>
                            <a href="<?php echo $domain . '/projects.php'; ?>"><h2>Projects</h2></a>
                            <a href="<?php echo $domain . '/resume.php'; ?>"><h2>Resume</h2></a>

                            <br>
                            <a href="blog.jiashengc.com"><h2>Blog</h2></a>
                            <a href="<?php echo $domain . '/contact.php'; ?>"><h2>Contact</h2></a>                                    
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
