<?php

    function importCSS()
    {
        $string = "<link href='/node_modules/bootstrap/dist/bootstrap.min.css'>";

        return $string;
    }

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Cache-control" content="public">
<meta name="description" content="I'm a web developer. I'm a student. I'm a learner. Welcome to my website where I display my portfolio and blog.">
<meta name="author" content="Jia Sheng Chong">
<meta name="keywords" content="Jia Sheng Chong, Software Engineering Student, Computer Science, Information Technlogy, Malaysia">
<meta name="p:domain_verify" content="5f90a36a774b67e6163cc15aaed842f8"/>
<link rel="shortcut icon" type="image/png" href="images/logo.png">
<link rel="canonical" href="<?php "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">

<!-- Open Graph Protocol -->
<meta property="og:title" content="Jia Sheng Chong | Computer Science Student Portfolio" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
<meta property="og:image" content="http://jiashengc.com/images/logo.png" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Jiashengc_" />
<meta name="twitter:creator" content="@Jiashengc_" />
<meta name="twitter:title" content="Jia Sheng Chong | Computer Science Portfolio" />
<meta name="twitter:description" content="I'm a web developer. I'm a blogger. I'm a learner. Welcome to my personal website where I display my portfolio and blog." />
<meta name="twitter:image" content="http://jiashengc.com/pic/cover.jpg" />

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79396212-2', 'auto');
    ga('send', 'pageview');
</script>

<?php 
    function createTitle($title) 
    {
        echo '<title>Jia Sheng Chong | '. $title .'</title>';
    }
?>
    
