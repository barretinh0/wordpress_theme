<?php get_header(); ?>
	<main id="artigos">
		<div class="artigo">
			<h1>Erro 404</h1>
			<p>Algo de errado não está certo. Acreditamos que esse erro pode estar relacionado com algo da lista abixo:</p>
			<ul>
				<li>A página foi removida.</li>
				<li>A página nunca existiu.</li>
				<li>O dev fez alguma besteira.</li>
			</ul>
			<p>Mas não tenha medo! <a href="javascript:history.back()">Clique aqui</a> para voltar a página anterior, ou <a href="<?php echo get_site_url(); ?>">clique aqui</a> para acessar a home.</p>
		</div>
	</main>
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>