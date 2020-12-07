<?php/*Template Name: iframe[インスタグラム]*/?>
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
		<div class="comp-instagram">
			<ul>
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$wp_query = new WP_Query();
					$param = array(
						'order' => 'desc',
						'posts_per_page' => '6',
						'post_type' => 'instagram',
						'paged' => $paged,
					);
					$wp_query->query($param);
					if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
					?>
			<li>
				<?php
					$thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				;?>
				<span style="background-image: url(<?php echo $thumb_url ;?>)"></span>
			</li>
				<?php endwhile; else: endif;?>
				</ul>
		</div>
	</article>
</body>
</html>
