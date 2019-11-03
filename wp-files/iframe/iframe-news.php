<?php/*Template Name: iframe[最新情報]*/?>
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
	<article id="iframeNews">
		<div class="inner">
		<div class="comp-news-section">
			<?php
				$wp_query = new WP_Query();
				$param = array(
					'posts_per_page' => '5',
					'post_type' => 'news',
				);
		$wp_query->query($param);
		if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
		?>
		<div class="news_item">
			<span class="date"><?php echo get_the_date("Y.m.d"); ?></span>
			<a target="_blank" href="<?php echo the_field('link_url');?>"><?php the_title();?></a>
		</div>
		 <?php endwhile; endif; ?>
		</div><!-- news_wrap -->
	</div><!-- inner -->
	</article>
</body>
</html>
