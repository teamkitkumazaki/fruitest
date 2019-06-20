<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php
	if ( is_home() || is_front_page() ) {
  	$site_title = 'ジャーナル一覧 | レア・ドライフルーツ - FRUITEST';
  	$site_permalink = 'https://journal.fruitest.jp/';
		$thumnail = 'https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/ogp.jpg';
		$description = "限りなく生に近いFRUITESTの「レア・ドライフルーツ」みずみずしさを出来る限り保ちながら、おいしさを凝縮しました。原料は、国産果物だけ。砂糖や保存料などの添加物は一切入れず、低温でゆっくり乾燥させています。それによって、それぞれの果物が持つ風味や香りを残しながら、果物そのもののおいしさを最大限引き出すことに成功しました。";
	} else {
  	$site_title =  wp_title('', false, '').' | レア・ドライフルーツ - FRUITEST';
  	$site_permalink = get_the_permalink();
  	$post_id = get_the_id();
  	$description = "";
  	if (!empty($post_id)) {
  		$description = get_the_content($post_id);
			$thumbnail_id = get_post_thumbnail_id($post_id);
			$image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
			$thumnail = $image[0];
  		if(mb_strlen($content) > 90){
    		$description = mb_substr(strip_tags($description),0,90).'...';
  		}
  	}

  	if (empty($description)) {
  		$description = "限りなく生に近いFRUITESTの「レア・ドライフルーツ」みずみずしさを出来る限り保ちながら、おいしさを凝縮しました。原料は、国産果物だけ。砂糖や保存料などの添加物は一切入れず、低温でゆっくり乾燥させています。それによって、それぞれの果物が持つ風味や香りを残しながら、果物そのもののおいしさを最大限引き出すことに成功しました。";
  	}

  	$site_image = "";
  	$thumbnail_id = get_post_thumbnail_id($post_id);
  	$site_image_attach = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
  	if (!empty($site_image_attach)) {
  		$site_image = $site_image_attach[0];
  	}
	}
	?>
	<title><?php echo $site_title; ?></title>
	<meta property="og:title" content="<?php echo $site_title; ?>">
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php echo $site_permalink; ?>">
	<meta property="og:image" content="<?php echo $thumnail; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php echo $site_title; ?>">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:url" content="<?php echo $site_permalink; ?>">
	<meta property="og:site_name" content="FRUITEST.JP">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:title" content="<?php echo $site_title; ?>">
	<meta name="twitter:image" content="<?php echo $thumnail; ?>">
	<link href="<?php echo get_template_directory_uri();?>/img/favicon.png" rel="apple-touch-icon" sizes="180x180">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/slick/slick.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/layout.js"></script>
	<?php wp_head(); ?>
</head>
