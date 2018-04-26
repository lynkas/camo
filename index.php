<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' );  ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <?php wp_head(); ?>

</head>
<body>
    <?php get_header();?>
<div class="container" style="background-color:#fafafa">
<div class="row" >
<div class="col-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="piece">
    <div id="title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    </div>

    <div id="content">

        <p id="abstract">
            <?php
                echo wp_trim_words( get_the_content(), 80,"... <a href=\"". get_permalink( ) . "\"><span class=\"badge badge-secondary\">阅读全文</span></a>" );
            ?>
            
            <br />
            <div id="info">
            <span style="font-size:15px">作者</span> <b><?php the_author( ) ?></b> 
            <span style="font-size:15px">日期</span> <b><?php echo the_date( "Y/m/d" );  ?></b>
            
            </div>
        </p>
        
    </div>
</div>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</div>
<div id="sidebar" class="col-4">
    
</div>
</div>
</div>
</body>
</html>