<?php/*Template Name: iframe[全記事]*/?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/slick/slick.css">
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/layout.js"></script>
</head>
<body>
	<article id="iframe">
		<section class="comp-journal">
			<div class="inner">
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
						<a target="_top" href="<?php echo $r_permalink; ?>" style="background-image:url(<?php echo $r_src; ?>)"></a>
					</div>
					<div class="txt_wrap">
						<a target="_top" class="title" href="<?php echo $r_permalink; ?>"><?php echo $r_title; ?></a>
						<div class="tag_wrap">
							<?php foreach($tags as $key => $tag): ?>
							<a target="_top" href="?tag=<?php echo $tag->term_id; ?>">#<?php echo $tag->name; ?></a>
							<?php endforeach; ?>
						</div>
						<div class="link_wrap">
							<a class="prod_link" target="_top" href="<?php echo $r_permalink; ?>"><span>記事を読む</span></a>
						</div>
					</div><!-- txt_wrap -->
				</div><!-- item_box -->
				<?php endwhile; else: endif;?>
					</div>
					<div class="comp-linkbutton">
						<a href="//journal.fruitest.jp/" target="_top">
							<span>ジャーナルトップへ<font>JOURNAL TOP</font></span>
						</a>
					</div>
				</div>
			</div>
		</section>
	</article>
</body>
</html>
