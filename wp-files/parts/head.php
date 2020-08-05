	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php
	if ( is_home() || is_front_page() ) {
  	$site_title = 'ジャーナル | FRUITEST(フルーテスト) - レアドライフルーツ';
  	$site_permalink = 'https://journal.fruitest.jp/';
		$thumnail = 'https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/ogp.jpg';
		$description = "FRUITEST（フルーテスト）は、日本が誇る最上級の完熟果物だけをつかった、レア・ドライフルーツのブランドです。これまでは、旬の時期に、産地でしか味わうことのできなかった、最上級の風味と香りをできる限りとじ込めてお届けします。";
	} else if( is_category() ){
		$page_title = get_single_cat_title();
		$site_title =  $page_title.' | FRUITEST(フルーテスト) - レアドライフルーツ';
  	$site_permalink = get_the_permalink();
	} else {
  	$site_title =  wp_title('', false, '').' | FRUITEST(フルーテスト) - レアドライフルーツ';
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
	<meta name="google-site-verification" content="usi1_8b0xqBpOlrg8xlRHbelveHpGmnPgNoB1tPnzFc" />
	<link href="<?php echo get_template_directory_uri();?>/img/favicon.png" rel="apple-touch-icon" sizes="180x180">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/slick/slick.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/layout.js"></script>
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>
    <script src="//statics.a8.net/a8sales/a8crossDomain.js "></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142991880-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-142991880-1', {
    'linker': {
       'domains': ['www.fruitest.jp/', 'journal.fruitest.jp/', 'cart.shop-pro.jp', 'shop-pro.jp']
    }
  });
  gtag('config', 'UA-142991880-1');
</script>
<!-- Begin Mieruca Embed Code -->
<script type="text/javascript" id="mierucajs">
window.__fid = window.__fid || [];__fid.push([373175377]);
(function() {
function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
})();
</script>
<!-- End Mieruca Embed Code -->
	<?php wp_head(); ?>
