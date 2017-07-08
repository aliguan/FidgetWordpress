<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fidgetiddies</title>
    <?php wp_head(); ?>
    
    <link rel="stylesheet" type="text/css" href=" <?php echo get_template_directory_uri();?>/css/bootstrap.min.css" /> <link rel="stylesheet" type="text/css" href=" <?php echo get_template_directory_uri();?>/css/font-awesome.min.css" />
   <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" <?php  bloginfo('stylesheet_url');?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    

    <script rel="stylesheet" type="text/css" href=" <?php echo get_template_directory_uri();?>/js/jquery.min.js" /></script>
    <script rel="stylesheet" type="text/css" href=" <?php echo get_template_directory_uri();?>/js/bootstrap.min.js" /></script>
    
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <!-- <div class="nine columns">
                <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name');?></a>
                </h1>
                <h2><?php bloginfo('description');?></h2>
            </div>
            <div class="three columns">
                 <?php get_search_form(); ?>
            </div> -->
        
        <!-- Add Menu Here -->
      
            <div class="blank-menu-header">
                  <div class="row">
                <div class="col-sm-5">
                    <ul>
                       <li>
                           <a href="#">Home</a>
                       </li>
                       <li>
                           <a href="#">Make Your Own</a>
                       </li>
                       <li>
                           <a href="#">Contact</a>
                       </li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
                    </div>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</header>
<!-- end header -->
