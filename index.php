<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' );  ?>" />
    <!-- <link rel="stylesheet" href="./bootstrap.min.css" > -->
    <!-- <script src="./bootstrap.min.js"></script> -->
    <script src="main.js"></script>
    <?php wp_head(); ?>

</head>
<body>

    <?php get_header();?>
<div class="container" style="background-color:#fafafa">
<div class="row" >
<div id="articles" class="col-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="piece">
    <div id="title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    </div>

    <div id="content">

        <p id="abstract">
            <?php
                echo wp_trim_words( get_the_content(), 80,"... <a href=\"". get_permalink( ) . "\"><span id=\"readmore\" class=\"badge badge-secondary\">阅读全文</span></a>" );
            ?>
            
            <br />
            <div id="info">
            <span id="date"><?php echo the_date( "Y/m/d" );  ?></span>
            <span id="head">作者</span> <span id="author"><?php the_author( ) ?></span> 

            <span style="font-size:15px"><?php edit_post_link("Edit"); ?> </span>
            </div>
        </p>
        
    </div>
</div>
<?php endwhile; ?>
<div class=”navigation”>
<?php posts_nav_link(); ?>
</div>
<?php else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</div>
<div id="sidebar" class="col-4">
    
</div>
</div>
</div>
</body>
</html>