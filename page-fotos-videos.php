<?php /* Template name: Fotos */ get_header( 'single-e-pages' ); ?>

<div id="conteudo-single-cpt">

		<div id="esquerda-single-cpt">
		
						    <div id="fotos-videos">
							<div id="btn-fotos">
								<span class="span-btn-fotos"></span>
							</div><!-- #btn-fotos -->
                        
							<div id="btn-videos">
								<a class="a-btn-videos" href="<?php bloginfo( 'url' ); ?>/videos-do-circo-vox"></a>
							</div><!-- #btn-videos -->
							</div><!-- #fotos-videos -->
							
			<div id="post-single-cpt">
			
			<!-- Inicio Loop -->
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( is_front_page() ) { ?>

						<?php } ?>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-content -->
					</div><!-- #post-## -->

					<?php comments_template( '', true ); ?>

			<?php endwhile; ?>
			<!-- Fim Loop -->
</div><!-- #post-single-cpt -->

		</div><!-- #esquerda-single-cpt -->

	<?php get_sidebar( 'single-e-pages' ); ?>

</div><!-- #conteudo-single-cpt -->

	<?php get_footer( 'espetaculos' ); ?>