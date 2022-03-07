<?php get_header(); ?>
		<main id="artigos">		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section class="artigo">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?></p>
				</section>
			<?php endwhile; else: ?>
				<article class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</article>			
			<?php endif; ?>
		</main>
		<?php //get_sidebar(); ?>
<?php get_footer(); ?>