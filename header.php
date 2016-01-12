<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title><?php bloginfo('title'); ?></title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="css/colors/green.css" id="colors">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Java Script
================================================== -->
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.themepunch.plugins.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.easing.min.js"></script>
<script src="scripts/jquery.tooltips.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.twitter.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/jquery.contact.js"></script>
<script src="scripts/jquery.isotope.min.js"></script>
<script src="scripts/custom.js"></script>

<?php wp_head(); ?>
</head>
<body>


<!-- Header
================================================== -->
<header id="header">

<!-- Container -->
<div class="container">

    <!-- Logo / Mobile Menu -->
    <div class="three columns">
    
        <div id="mobile-navigation">
            <form method="GET" id="menu-search" action="#">
                <input type="text" placeholder="Start Typing..." />
            </form>
            <a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a>
            <span class="search-trigger"><i class="icon-search"></i></span>
        </div>

        <div id="logo">
            <h1><a href="index.html"><img src="images/logo.png" alt="Astrum" /></a></h1>
        </div>
    </div>


<!-- Navigation
================================================== -->
<div class="thirteen columns">

    <nav id="navigation" class="menu">
        <?php wp_nav_menu(); ?>
    </nav>
</div>

</div>
<!-- Container / End -->

</header>
<!-- Header / End -->