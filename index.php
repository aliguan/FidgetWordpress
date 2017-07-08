<?php get_header(); ?>

        <section class="row clearfix" id="video">
            
            <div style="padding: 0" class="col-md-12">
               
                    <!-- <?php
                    if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                        }
                        the_excerpt(); 
                    } // end while
                } // end if
                    ?> -->
                <video playsinline autoplay muted loop poster="" id="bgvid" class="clearfix">
                    <source src="<?php echo get_template_directory_uri()?>/images/sample.mp4" type="video/mp4">
                </video>
    
            </div>
        </section>
        
        <section class="howitworks row wow fadeInUpBig"  data-wow-duration="0.8s" data-wow-delay="0.5s">
            <div class="col-md-12">
             <h2>How Tidgets Work</h2>
           
             <ul>
                
                     <li><img src="<?php echo get_template_directory_uri()?>/images/spinner.png"></li>
                     <li><i class="fa fa-plus" aria-hidden="true"></i></li>
                     <li><img src="<?php echo get_template_directory_uri()?>/images/spinner.png"></li>
                     <li><i class="fa fa-plus" aria-hidden="true"></i></li>
                     <li><img src="<?php echo get_template_directory_uri()?>/images/spinner.png"></li>
                     <li>=</li>
                     <li><img src="<?php echo get_template_directory_uri()?>/images/tada.png"></li>
                 
             </ul>
         
            </div>
        </section>
        
        <section class="productpics row">
            <div class="col-md-12">
                <?php query_posts('cat=4'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="gallery col-md-4 wow fadeInUp" data-wow-duration="0.8s">
                        <img style="width: 300px;" src="<?php echo get_field('frontpage') ?>">
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </section>
       
        <section class="row">
        
            <div class="about clearfix">
                <div class="manu">
                    <img src="<?php echo get_template_directory_uri() ?>/images/manu.png">
                </div>
                 <div class="col-md-12">
                    <p>Like a lot of people, Torres-Orejuela is really into fidget spinners, the latest sensation that's taken over so many lives. She became fond of the gadget after she was given one by her best friend, and she noticed that it helped her with her anxiety and ADHD.</p>
                </div>
               
           </div>
           
        </section>
        
       

<?php get_footer(); ?>
