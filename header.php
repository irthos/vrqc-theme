<!DOCTYPE html>

<html <?php language_attributes(); ?> ng-app="vrqc" ng-init="$root.siteUrl = '<?php echo get_site_url(); ?>'">
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vacation rental properties in Quebec City, Canada. On VRBO, Home Away, and AirBnB">
    <meta name="keywords" content="quebec city, vacation, vacation rentals, property rentals, holiday, canada, quebec">
    <meta name="author" content="Vacation Rentals Quebec City
    ">
    <?php wp_head(); ?>

</head>
<body ng-controller="vrqcPropCtrl">
<!--==============================header=================================-->
<header class="clearfix">
    <nav class="navbar navbar-default top-nav nomar ">
        <a href="<?php echo get_site_url(); ?>" class="col-xs-12 col-sm-4">
            <img class="hidden-xs navbar-text" src="/wp-content/uploads/2015/05/logo-for-website-transparent.png" alt=""/>
            <img class="visible-xs navbar-btn" src="/wp-content/uploads/2015/05/logo-for-website-transparent.png" alt=""/>
        </a>
        <div class="col-xs-12 col-sm-7 pull-right" ng-init="nav.pages = [['','home'],['Suites','bed'],['About','info'],['Explore QC','street-view'],['Contact','phone']]">
            <div class="navbar-text col-xs-12">
                <div class="col-xs-5 col-sm-5">
                    <h3 class="nomar light-text">Booking</h3>
                    <div class="col-xs-12">
                        <div>Fr: <a href="tel:15817773337" class="light-text"><b>1 581 777 3337</b></a> </div>
                        <div>En: <a href="tel:14506790674" class="light-text"><b>1 450 679 0674</b></a></div>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 nomar nopad">
                    <h3 class="nomar light-text">Concierge</h3>
                    <div class="col-xs-12"> <a href="tel:15817773339" class=" light-text"><b>1 581 777 3339</b></a></div>
                </div>
                <div class="col-xs-2 col-sm-2 nomar nopad"><span class="prisna pull-right"></span></div>
            </div>
            <span class="col-xs-12 col-sm-9 nopad nomar noborderrad navbar-btn btn-group btn-group-justified"><a ng-repeat="(key,page) in nav.pages" ng-href="<?php echo get_site_url(); ?>/{{page[0]}}" type="button" class="fa fa-{{page[1]}} menunav btn btn-success shadow"> <b>{{page[0]}}</b></a></span>
        </div>


        <!--<div class="col-xs-12">
            <a class="navbar-left navbar-text" href="<?php echo get_site_url(); ?>">
                <img class="navbar-left" style="width: 40px; height: auto;" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
                <span style="font-size: 1.3em" class="nav-brand">Vacation Rentals Quebec City</span>
            </a>
            <a class="navbar-text language prisna" target="new">
            </a>
            <a href="tel:15817776339" class=" navbar-right" >
                <i class="fa fa-phone btn btn-default navbar-btn btn-lg phone"> <span class="hidden-xs">+01-581-777-6339</span></i>&nbsp;
            </a>
        </div>-->

    </nav>
<!--
    <nav class="navbar navbar-default nomar">
        <b class="col-xs-12 col-sm-4 btn btn-default navbar-btn btn-lg"><h2>Les Maisons Montcalm</h2></b>
        <div class="col-xs-12 col-sm-8" ng-init="nav.pages = ['About','Suites','Contact','Explore QC']">
            <span class="navbar-btn btn-group btn-group-justified"><a ng-repeat="(key,page) in nav.pages" ng-href="<?php echo get_site_url(); ?>/{{page}}" type="button" class="menunav btn btn-success shadow">{{page}}</a></span>
        </div>
            &lt;!&ndash; Brand and toggle get grouped for better mobile display &ndash;&gt;
            &lt;!&ndash;<ul class="navbar-header col-xs-12 col-sm-7">
                <h1 class="col-xs-12 tagline">We strive to provide a most uniquely Quebecois experience!</h1>
                <div class="col-xs-12 btn-group btn-group-justified" ng-init="nav.pages = ['Home','About','Properties','Contact','Blog']">
                    <a ng-repeat="(key,page) in nav.pages" ng-href="<?php echo get_site_url(); ?>/{{page}}" type="button" class="menunav btn btn-success shadow">{{page}}</a>
                </div>
&lt;!&ndash;
                    <?php wp_nav_menu( array( 'items_wrap' => '<a id="%1$s" class="%2$s">%3$s</a>', 'depth' => 0) ); ?>
&ndash;&gt;
            </ul>

            &lt;!&ndash; Collect the nav links, forms, and other content for toggling &ndash;&gt;

            <div class="col-xs-12 col-sm-5 navbar-right">
                <div class="featured-offer">
                    <?php
                $cat_id = 5; //the certain category ID
                $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
                    if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                    <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>&ndash;&gt;
    </nav>
-->

</header>