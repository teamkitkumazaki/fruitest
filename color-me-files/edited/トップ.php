<script>
(function() {
	function removeScriptTags() {
		var srcs = [];
		var entry = document.getElementsByTagName('script')[0];

		srcs.forEach(function(src) {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = src;
			script.async = false;
			entry.parentNode.insertBefore(script, entry);
		})
	}
	window.addEventListener('load', removeScriptTags, false);
})();
</script>
<script type="text/javascript" src="//journal.fruitest.jp/wp-content/themes/fruitest-theme/js/instafeed.min.js"></script>
<div id="loading" class="comp-loading">
	<div class="load_inner delete">
		<div class="loading_inner">
			<div class="loading_logo"></div>
			<p id="loadingBar"><span></span></p>
		</div>
	</div>
</div><!-- comp-loading -->
<article id="index">
		<section id="main">
			<div id="mainVisual">
				<img id="firstView" src="https://res.cloudinary.com/dj7vewpdn/image/upload/f_auto,q_auto/v1584337926/index/main_qvwzml.jpg">
				<div id="scrollDown" class="scroll_button">
					<a href="javascript:void(0)" jump="#topConcept"><span>SCROLL</span></a>
				</div>
			</div>
		</section><!-- main -->
		<section id="topConcept">
			<div class="inner">
			<div class="comp-title center">
				<h2 class="ttl_ja">はじめまして、FRUITESTです。</h2>
			</div>
			<div class="lead_txt">
				<h1 class="ja">フルーテストは、日本が誇る完熟果物の"新しい楽しみ方"を提案するブランドです。</h1>
				<span class="en">
					<span>“FRUITEST” is a brand that makes a new type of dried fruit called “rare (soft and juicy) dried fruit”.</span>
					<span>We only use fully ripened fruit of the highest grade from Japan.</span>
				</span>
			</div>
			<div class="img_wrap_sp">
				<div class="img_left"></div>
				<div class="img_right"></div>
			</div>
			<div class="img_wrap">
				<div class="img_left"></div>
				<div class="img_right"></div>
			</div>
			<div class="comp-linkbutton">
				<a href="/?mode=f1"><span>FRUITESTとは？<font>VIEW CONCEPT</font></span></a>
			</div>
		</div><!-- inner -->
		</section><!-- topConcept -->
		<section id="topRareDry">
			<div class="inner">
				<div class="flex_wrap">
					<div class="flex_left">
						<div class="comp-title">
							<h2 class="ttl_ja">生でもない。ドライでもない。<br>ここでしか体感できない、<br>味があります。</h2>
						</div>
						<div class="spimg_wrap"></div>
						<div class="txt">
							<p class="ja">
								<span>みずみずしさを出来る限り保ちながら、果物本来のおいしさを凝縮したFRUITESTの「レア・ドライフルーツ」。</span>
								<span>原材料は、品種・作り手・熟度にこだわった最上級の国産果物だけ。素材に自信があるので、果物以外の原料は使いません。</span>
								<span>これまでは、旬の時期に、産地でしか味わうことのできなかった、最上級の風味と香りをできる限りとじ込めてお届けします。</span>
							</p>
							<p class="en">
								<span>FRUITEST’s “rare-dried fruit” is made in a way that brings out the full flavor of the fruit while keeping its freshness as much as possible.</span>
								<span>The only ingredient we use fruit of the highest grade grown in Japan. When selecting fruit for our product, we’re particular about the varieties, the farmers and the degree of ripeness.We don’t add any other ingredients because we’re confident in the quality of our fruit.</span>
								<span>We deliver the dried fruit that is packed with a premium flavor and aroma, which you could only taste in the production areas when the fruit is in season.</span>
							</p>
						</div>
						<div class="comp-linkbutton">
							<a href="/?mode=f1#conceptMethod"><span>詳しく知る<font>READ MORE</font></span></a>
						</div>
					</div><!-- flex_left -->
					<div class="flex_right">
						<span></span>
					</div>
				</div><!-- flex_set -->
			</div>
		</section><!-- topRareDry -->
		<div id="topProduct">
			<div class="inner">
				<div class="comp-title">
					<h2 class="ttl_ja">季節の商品</h2>
					<span class="ttl_en">PRODUCT LINEUP</span>
				</div>
			</div><!-- inner -->
			<!--<section id="kawanaka" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="#aaaa"><span class="caret"></span></a>
					<div class="txt_wrapper right">
						<div class="txt_block">
							<span class="en">KAWANAKAJIMA PEACH</span>
							<h3 class="ja">川中島白桃</h3>
							<a class="prod_link" href="#aaaa"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section> -->
			<section id="pione" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=142898188"><span class="caret"></span></a>
					<div class="txt_wrapper">
						<div class="txt_block">
							<span class="en">PIONE</span>
							<h3 class="ja">ピオーネ</h3>
							<a class="prod_link" href="/?pid=142898188"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section>
			<section id="alex" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=142905193"><span class="caret"></span></a>
					<div class="txt_wrapper right">
						<div class="txt_block">
							<span class="en">MASCUT OR ALEXSANDRIA</span>
							<h3 class="ja">マスカットオブアレキサンドリア</h3>
							<a class="prod_link" href="/?pid=142905193"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section>
			<!--<section id="reiou" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=143288029"><span class="caret"></span></a>
					<div class="txt_wrapper right">
						<div class="txt_block">
							<span class="en">REIOU</span>
							<h3 class="ja">黎王</h3>
							<a class="prod_link" href="/?pid=143288029"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section> -->
			<!--<section id="hyakume" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=142905939"><span class="caret"></span></a>
					<div class="txt_wrapper">
						<div class="txt_block">
							<span class="en">KOSYU HYAKUME</span>
							<h3 class="ja">甲州百目</h3>
							<a class="prod_link" href="/?pid=142905939"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section> -->
			<section id="shine" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=142904277"><span class="caret"></span></a>
					<div class="txt_wrapper">
						<div class="txt_block">
							<span class="en">SHINE MASCUT</span>
							<h3 class="ja">シャインマスカット</h3>
							<a class="prod_link" href="/?pid=142904277"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section>
			<section id="kyohou" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=142903040"><span class="caret"></span></a>
					<div class="txt_wrapper right">
						<div class="txt_block">
							<span class="en">KYOHOU</span>
							<h3 class="ja">巨峰</h3>
							<a class="prod_link" href="/?pid=142903040"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section>
			<section id="kiyou" class="prod_section">
				<div class="productBg">
					<a class="product_caret" href="/?pid=141554730"><span class="caret"></span></a>
					<div class="txt_wrapper">
						<div class="txt_block">
							<span class="en">KIYOU</span>
							<h3 class="ja">貴陽</h3>
							<a class="prod_link" href="/?pid=141554730"><span>VIEW MORE</span></a>
						</div>
						<div class="height_adjuster"></div>
					</div>
				</div>
			</section>
			<div class="product_all">
				<a href="/?mode=cate&csid=0&cbid=2520817">
					<span class="txt">商品一覧へ<font>VIEW PRODUCTS</font></span><span class="obj"></span>
					<span class="txt_sp"><font>VIEW PRODUCTS</font><span>商品一覧へ</span></span>
				</a>
			</div>
		</div><!-- topProduct -->
		<section id="topOption" class="comp-option">
			<div class="inner">
				<div class="comp-title center">
					<h2 class="ttl_ja">FRUITESTのギフトセット</h2>
					<span class="ttl_en">GIFT SET</span>
				</div>
				<div class="spimg_wrap"><a href="/?mode=f2"></a></div>
				<div class="txt_wrap">
					<p class="text">
						<span>手土産や特別な日のプレゼントに。</span>
						<span>旬のレア・ドライフルーツを、ギフトボックスに入れてお届けします。</span>
					</p>
				</div>
				<div class="img_wrap"></div>
				<div class="comp-linkbutton">
					<a href="/?mode=f2">
						<span>ギフトセット一覧<font>GIFT SET</font></span></a>
				</div>
			</div><!-- inner -->
		</section><!-- topOption -->
		<section class="news-section">
			<div class="inner">
			<div class="comp-title">
				<h2 class="ttl_ja">最新情報</h2>
				<span class="ttl_en">NEWS</span>
			</div>
			<div class="iframe_wrap">
			<iframe src="https://journal.fruitest.jp/iframe-news/" scrolling="no" frameborder="0"></iframe>
		</div>
		</div><!-- inner -->
		</section>
		<section class="comp-journal">
			<div class="inner">
				<div class="comp-title">
					<h2 class="ttl_ja">FRUITESTについて<span>もっと知る。</span></h2>
					<span class="ttl_en">JOURNAL</span>
				</div>
					<iframe class="autoHeight" src="https://journal.fruitest.jp/iframe-all/" scrolling="no" frameborder="0"></iframe>
					<div class="journal_wrap">
						<div class="comp-linkbutton">
							<a href="https://journal.fruitest.jp/"><span>ジャーナル一覧へ<font>VIEW JOURNAL</font></span></a>
						</div>
					</div>
			</div><!-- inner -->
		</section>
		<section id="topInstagram">
			<div class="comp-title center">
				<h2 class="ttl_ja">#FRUITEST</h2>
			</div>
			<div id="instaFeed" class="insta_feed">
				<iframe class="autoHeight" src="https://journal.fruitest.jp/iframe-instagram/" scrolling="no" frameborder="0"></iframe>
				<div class="ig_link">
					<a href="https://www.instagram.com/fruitest.jp/" target="_blank">
						<span>@fruitest.jp</span>
					</a>
				</div>
			</div>
		</section>
	</article>
