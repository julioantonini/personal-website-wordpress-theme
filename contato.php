<?php
/*

Template Name: Contato

*/

?>
<?php get_header(); ?>

<section class="biografia">

	<div class="biografia-top">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1>FALE CONOSCO</h1>
				</div>
			</div>

		</div>
	</div>

	<div class="biografia-txt">
		<div class="container container-section">

			<div class="row">

				<div class="col-md-offset-3 col-md-6 clearfix">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="contatoh2 text-center"><?php the_title(); ?></h2>


					<?php the_content(); ?>
					<?php endwhile; else: ?>

					<p>Postagem não encontrada</p>

					<?php endif; ?>
					<?php  wp_reset_query(); ?>
					<form action="" method="POST" class="form-contato" id="form-contato">

						<div class="row">

							<div class="col-md-6">
								<input type="text" name="nome" class="inputs-contato" placeholder="NOME">
							</div>

							<div class="col-md-6">
								<input type="text" name="email" class="inputs-contato" placeholder="E-MAIL">
							</div>



							<div class="col-md-12">
								<textarea name="mensagem" class="inputs-contato inputs-textarea" placeholder="MENSAGEM"></textarea>
							</div>

							<div class="col-md-12 clearfix">
								<input type="submit" class="btn-envia-form transition" value="ENVIAR">
								<input type="hidden" name="action" value="send_form_contato">
								<input type="hidden" name="url" value="<?php bloginfo('url'); ?>">
								<input type="hidden" name="themeurl" value="<?php echo get_bloginfo('template_url'); ?>">

							</div>


						</div>



					</form>

				</div>




			</div>

		</div>

	</div>



</section>





<?php get_footer(); ?>
