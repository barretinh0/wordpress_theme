<?php get_header(); ?>
	<main id="artigos">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="artigo">
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
				<p><?php the_content(); ?></p>
			</article>
			
			<?php comments_template(); ?>
				
		<?php endwhile; else: ?>
			<div class="artigo">
				<h2>Nada Encontrado</h2>
				<p>Erro 404</p>
				<p>Lamentamos mas não foram encontrados artigos.</p>
			</div>			
		<?php endif; ?>
		
	</main>
	
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>