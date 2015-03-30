
           <?php get_header() ?>
           <!-- /header -->
           <div class="content">
               <div class="main">
                   <h1>Компании</h1>
                   <ul class="section">
    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                        <li>
                           <img src="<?php bloginfo('template_url') ?>/images/logo-company.fw.png" width="102" height="115" alt="Kyosho Inc." />
                           <span class="date"><?php the_time('d.m.y') ?></span>
                           <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>  
                           <?php the_excerpt() ?>
                           <a href="<?php the_permalink() ?>">Read about us</a>
                           <p><?php the_tags() ?></p>
                        </li>
     <?php endwhile; ?>
     <!--post navigation-->
     <?php else: ?>
     <!--no posts found-->
     <?php endif; ?>   
                    </ul>
               </div>
               <!-- /section -->
               <?php get_sidebar() ?>
           </div>
           <!-- /aside -->
          <?php get_footer() ?>
           <!-- /footer -->

