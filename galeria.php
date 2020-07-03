<?php
/*

Template Name: Galeria

*/

?>
<?php get_header(); ?>
<section class="biografia">

	<div class="biografia-top">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1>GALERIA DE FOTOS</h1>
				</div>
			</div>

		</div>
	</div>


</section>




<section class="galeria">



	<div class="container container-section">

		<div class="gl-row">






			<?php $galeria = get_field("galeria");  ?>

			<?php foreach($galeria as $g): ?>
			<div class="grid-galeria">
				<div class="galeria-foto">
					<a href="<?php  echo $g['url'] ?>" class="image-link">
						<div class="gradiente"></div>
						<img src="<?php  echo $g['sizes']['thumb_galeria'] ?>" class="img-fluid transition">
					</a>


					<div class="galeria-share">
						<ul>
							<li><span>Compartilhe</span></li>
							<li><a class="botao_sociais" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="botao_sociais" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a class="botao_sociais" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<?php endforeach;?>



		</div>

	</div>


</section>


<?php get_footer(); ?>
