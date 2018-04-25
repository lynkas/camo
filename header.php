<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="main.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div id="header">
    <div id="sitetitle">
        <h1><a  href="<?php bloginfo('url');?>"><?php bloginfo('name')?></a></h1>
        <span id="description"><?php bloginfo( 'description');?></span>
    </div>   
</div> 
</body>
</html>
