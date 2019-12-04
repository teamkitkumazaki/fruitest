<!doctype html>
<html>
<?php get_template_part("parts/head");?>
<body id="journal" class="fixed-header rolled">
<?php get_template_part("parts/header");?>
<article id="journalArchive" class="journal">
	<section id="archiveUpper">
		<div class="inner">
			<div class="comp-title">
				<h1 class="ttl_ja"><?php single_cat_title() ?>に関する記事</h1>
				<span class="ttl_en">JOURNAL</span>
			</div>
			<div class="comp-taglist">
				<ul>
					<?php get_template_part("parts/taglist");?>
        		</ul>
			</div>
		</div><!-- inner -->
	</section>
	<section id="archiveList">
		<div class="inner">
			<div class="comp-journal-archive">
				<?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();

				get_template_part( 'parts/post/content', '' );
			endwhile;
		else:
			get_template_part( 'parts/post/content', 'none' );
		endif;
	?>
			</div><!-- comp-journal-archive -->
			<div class="comp-pager">
			<?php
				if ($the_query->max_num_pages > 1) {
				echo paginate_links(array(
					'base' => get_pagenum_link(1) . '%_%',
					'format' => 'page/%#%/',
					'current' => max(1, $paged),
					'total' => $the_query->max_num_pages,
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				));
			}
		?>
			</div><!-- comp-pager -->
		</div><!-- inner -->
	</section>
</article>

<?php get_template_part("parts/footer");?>
<?php get_template_part("parts/hummenu");?>
</body>
</html>
