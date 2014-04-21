<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>
       <div class="wrap">
        

            <header>
                <h1><a href="<?php echo($blog_url); ?>"><?php echo($blog_title); ?></a></h1>
            </header>
                
        <?php echo($content); ?>

        <footer> 
          <a href="http://twitter.com/<?php echo($blog_twitter); ?>"><img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" /></a>
            Copyright &copy; 2014 <?php echo($blog_title); ?>

            <?php get_footer(); ?>
        </footer>
        
        </div>
    </body>
</html>