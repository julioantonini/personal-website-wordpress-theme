<?php
/*

Template Name: Ideais

*/

?>
<?php get_header(); ?>

<section class="biografia">

	<div class="biografia-top">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1>BIOGRAFIA</h1>
				</div>
			</div>

		</div>
	</div>

	<div class="biografia-txt">
		<div class="container container-section">

			<div class="row">

				<div class="col-md-offset-1 col-md-3 clearfix">
					<ul class="menu-biografia">
						<li><a href="<?php bloginfo('url'); ?>/biografia">MINHA HISTÓRIA</a></li>
						<li><a href="<?php bloginfo('url'); ?>/carreira">CARREIRA</a></li>
						<li><a class="active" href="<?php bloginfo('url'); ?>/ideais">IDEAIS</a></li>
					</ul>
				</div>

				<div class="col-md-7 biografia-content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>


					<?php the_content(); ?>

					<?php endwhile; else: ?>

					<p>Postagem não encontrada</p>

					<?php endif; ?>
					<?php  wp_reset_query(); ?>


					<div class="share-page">
						<ul>
							<li><span>Compartilhe</span></li>
							<li><a class="botao_sociais" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="botao_sociais" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a class="botao_sociais" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>

				</div>


			</div>

		</div>

	</div>



</section>





<?php get_footer(); ?>
