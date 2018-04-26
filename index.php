<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' );  ?>" />
    <script src="main.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header();?>

<div class="row">
<div class="maincontent">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="piece">
        <div id="title">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
        </div>
    </div>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div >
<div class="sidebar">
qq
</div>
</div>
</body>
</html>