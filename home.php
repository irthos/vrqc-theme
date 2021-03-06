<div class="clearfix">
    <?php get_header(); ?>
</div>
    <div class='clearfix post-group col-xs-12'>
        <h1>Le Blog</h1>

        <div class="btn-group btn-group-justified">
            <a ng-repeat="category in nav.categories" ng-href="{{siteUrl}}/category/{{category}}" ng-click="$parent.show.category=category" type="button" class="btn btn-default">{{category}}</a>
        </div>
        <?php
            // get all the categories from the database
            $args = array('exclude'=> '1, 2, 5, 7');
        $cats = get_categories($args);
        foreach ($cats as $cat) {
        $cat_id= $cat->term_id;
        $cat_slug = $cat->slug;
        echo "<a ng-href='{{siteUrl}}/category/" . $cat->slug . "'><h2 class='clearfix col-xs-12'>".$cat->name."</h2></a><div class='clearfix'>";
        query_posts("cat=$cat_id&posts_per_page=3");

        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="col-xs-12 col-md-4 post clearfix">
            <a href="<?php the_permalink();?>" class="panel panel-dark noborder">
                <div class="panel-heading dark-bg">
                    <h4 class="fa fa-thumb-tack light-text"> <?php the_title(); ?></h4>
                </div>
                <div class="panel-body">
                    <?php echo get_the_post_thumbnail() ?>
                </div>
            </a>
        </article>

        <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
        <?php } // done the foreach statement ?>

    </div>
<div class="clearfix">
    <?php get_footer(); ?>
</div>
        </div>