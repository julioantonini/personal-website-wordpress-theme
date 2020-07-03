 <?php get_header(); ?>
 <section class="slide">

   <div class="slide-image">
     <figure>
       <img src="<?php  echo get_template_directory_uri() ?>/img/img-slide.png" class="img-responsive">
     </figure>
   </div>


   <div class="container">
     <div class="row">

       <div class="col-xs-12 col-sm-12 col-md-8">
         <div class="slide-text">
           <h1><span>LOREM IPSUM</span><br>DOLOR SIT AMET</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nunc, pharetra vel diam quis, cursus hendrerit arcu. Suspendisse rutrum arcu a lacus maximus tristique.</p>
         </div>
       </div>

     </div>
   </div>


   <a class="slide-button scroll-target transition" href="#sobre"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>


 </section>





 <section class="sobre" id="sobre">
   <div class="container container-section clear-bottom">
     <div class="sobre-container">
       <div class="row">
         <div class="col-md-offset-6 col-md-6">

           <div class="sobre-txt">
             <h2>UM POUCO SOBRE MIM</h2>
             <p><?php $args = array('post_type'=>'page','pagename'=>'biografia','numberposts'=>1); $my_posts = get_posts($args);?>
               <?php foreach( $my_posts as $post ): setup_postdata($post); ?>
               <?php the_excerpt();?>
               <?php endforeach; ?></p>

             <a href="<?php bloginfo('url'); ?>/biografia" class="botao transition">SAIBA MAIS</a>
           </div>

         </div>
       </div>

     </div>
   </div>
 </section>




 <section class="posts-home">
   <div class="container container-section">
     <div class="row">

       <div class="col-md-6">

         <div class="post-home .baixo">

           <figure><img src="<?php  echo get_template_directory_uri() ?>/img/carreira.jpg" class="img-responsive"></figure>
           <div class="post-home-txt text-right">
             <h3>CARREIRA</h3>

             <p class="p-carreira"><?php $args = array('post_type'=>'page','pagename'=>'carreira politica','numberposts'=>1); $my_posts = get_posts($args);?>
               <?php foreach( $my_posts as $post ): setup_postdata($post); ?>
               <?php the_excerpt();?>
               <?php endforeach; ?>
             </p>


             <a href="<?php bloginfo('url'); ?>/carreira" class="botao-branco transition">SAIBA MAIS</a>
           </div>

         </div>

       </div>


       <div class="col-md-6">

         <div class="post-home" style="margin-bottom:0">

           <figure><img src="<?php  echo get_template_directory_uri() ?>/img/meus-ideais.jpg" class="img-responsive"></figure>
           <div class="post-home-txt text-left">
             <h3>MEUS IDEAIS</h3>
             <p class="p-ideais"><?php $args = array('post_type'=>'page','pagename'=>'meus ideais','numberposts'=>1); $my_posts = get_posts($args);?>
               <?php foreach( $my_posts as $post ): setup_postdata($post); ?>
               <?php the_excerpt();?>
               <?php endforeach; ?>
             </p>
             <a href="<?php bloginfo('url'); ?>/ideais" class="botao-branco transition">SAIBA MAIS</a>
           </div>

         </div>

       </div>



     </div>

   </div>
 </section>



 <?php get_footer();?>
