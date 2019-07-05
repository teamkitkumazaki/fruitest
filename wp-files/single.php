<!doctype html>
<html>
<?php get_template_part("parts/head");?>
<body id="journal" class="fixed-header rolled">
<?php get_template_part("parts/header");?>
<?php // Start of the loop.
	while ( have_posts() ) : the_post();
?>
<?php
$id = get_the_ID();
$tags = get_the_tags($id);
$thumbnail_id = get_post_thumbnail_id($id);
$image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
$src = $image[0];
?>
<article id="journalArticle" class="journal">
	<section id="articleTitle">
		<div class="main_visual" style="background-image: url(<?php echo the_field('page_thumbnail');?>)"></div>
		<div class="title_wrap">
			<h1 class="title"><?= the_title(); ?></h1>
			<div class="flex_wrap">
				<div class="tag_list">
					<?php foreach ($tags as $key => $tag): ?>
						<a href="/tag/<?php echo $tag->slug; ?>"><span>#</span><?php echo $tag->name; ?></a>
					<?php endforeach; ?>
				</div>
				<div class="sns_wrap">
					<span class="sns_title">SHARE</span>
					<?php get_template_part("parts/share");?>
				</div>
			</div>
		</div>
	</section>
	<section id="articleContents">
		<div class="contents_inner">
			<?= the_content(); ?>
		</div>
		<div class="footer_sns">
			<span class="sns_title">この記事をシェアする</span>
			<div class="sns_wrap">
				<?php get_template_part("parts/share");?>
			</div><!-- sns_wrap -->
		</div><!-- footer_sns -->
		<div class="tag_list">
			<div class="comp-title">
				<h1 class="ttl_ja">タグ一覧</h1>
				<span class="ttl_en">TAGS</span>
			</div>
			<div class="comp-taglist">
				<ul>
					<?php
						$all_tags = get_tags(array('hide_empty' => false));
						$current_tag_id = ((isset($_GET['tag']) && !empty($_GET['tag']))) ? $_GET['tag'] : '';
					?>
					<li<?php if (empty($current_tag_id)): ?><?php endif; ?>><a href="/">すべて</a></li>
					<?php foreach ($all_tags as $key => $tag): ?>
						<li<?php if ($current_tag_id == $tag->term_id): ?> class="current"<?php endif; ?>><a href="?tag=<?php echo $tag->term_id; ?>"><span>#</span><?php echo $tag->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php endwhile;
		// End of the loop.
	?>
	<section class="comp-journal">
		<div class="inner">
			<div class="comp-title">
				<h2 class="ttl_ja">FRUITESTについて<span>もっと知る。</span></h2>
				<span class="ttl_en">JOURNAL</span>
			</div>
			<div class="journal_wrap">
				<div id="slickSlider" class="slick-slider">
					<?php
	$args = array(
		'posts_per_page'    => 3,
		'orderby'           => 'post_date',
		'order'             => 'DESC',
		'post_type' => 'post',
		'post_status'       => 'publish',
		'post__not_in' => array($id)
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$r_id = get_the_ID();
			$r_title = get_the_title($post_id);
			$r_thumbnail_id = get_post_thumbnail_id($r_id);
			$r_image = wp_get_attachment_image_src( $r_thumbnail_id, 'medium' );
			$r_src = $r_image[0];
			$r_permalink = get_permalink($r_id);

			?>
			<div class="item_box slick-slide">
				<div class="img_wrap">
					<a href="<?php echo $r_permalink; ?>" style="background-image:url(<?php echo $r_src; ?>)"></a>
				</div>
				<div class="txt_wrap">
					<a class="title" href="<?php echo $r_permalink; ?>"><?php echo $r_title; ?></a>
					<div class="tag_wrap">
						<?php foreach($tags as $key => $tag): ?>
						<a href="/?tag=<?php echo $tag->term_id; ?>">#<?php echo $tag->name; ?></a>
						<?php endforeach; ?>
					</div>
					<div class="link_wrap">
						<a class="prod_link" href="<?php echo $r_permalink; ?>"><span>記事を読む</span></a>
					</div>
				</div><!-- txt_wrap -->
			</div><!-- item_box -->
			<?php endwhile; else: endif;?>
				</div>
				<div class="comp-linkbutton">
					<a href="/"><span>ジャーナルトップへ<font>JOURNAL TOP</font></span></a>
				</div>
			</div>
		</div>
	</section>
</article>
<?php get_template_part("parts/footer");?>
<?php get_template_part("parts/hummenu");?>
</body>
<script>
$('header').addClass('under');
</script>
</html>
