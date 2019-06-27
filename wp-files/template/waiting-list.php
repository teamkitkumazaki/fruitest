<?php/*Template Name: WAINTING LIST*/?>
<!doctype html>
<html>
<?php get_template_part("parts/head");?>
<body id="journal" class="fixed-header rolled">
<?php get_template_part("parts/header");?>
<?php if(have_posts()):while(have_posts()): the_post();?>
	<?php
	$id = get_the_ID();
	$tags = get_the_tags($id);
	$thumbnail_id = get_post_thumbnail_id($id);
	$image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
	$src = $image[0];
	?>
<article id="waitingList">
	<div class="inner">
	<div
		class="img_wrap"
		style="background-image: url(<?php echo the_field('page_thumbnail');?>)"
	></div>
		<div class="comp-title center">
			<h1 class="ttl_ja"><?php the_title();?></h1>
			<span class="ttl_en">WAITING LIST</span>
		</div>
		<div class="description">
			<h2 class="title">販売開始情報を受け取る</h2>
			<p>下記よりメールアドレスをご登録頂くと、<?php the_title();?>の販売開始情報をお受け取り頂けます。</p>
		</div>
		<?php the_content(); ?>
	</div>
</article>
<?php endwhile; endif; ?>
<?php get_template_part("parts/footer");?>
<?php get_template_part("parts/hummenu");?>
</body>
</html>
