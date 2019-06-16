<?php/*Template Name: お問い合わせ*/?>
<!doctype html>
<html>
<?php get_template_part("parts/head");?>
<body id="journal" class="fixed-header rolled">
<?php get_template_part("parts/header");?>
<article id="contact" class="under-page">
	<div class="inner">
		<div class="comp-title">
			<h2 class="ttl_ja">お問い合わせ</h2>
			<span class="ttl_en">CONTACT</span>
		</div>
	<div class="contact_lead">
		<p>ご不明のことがあればお気軽にお問い合わせください。<span>なお、お客様から多く寄せられるご質問は、下記でご案内しています。併せてご参照ください。</span></p>
		<div id="guideNav">
			<div class="item_wrap">
				<h3 class="ttl_h3">ご利用ガイド</h3>
				<ul id="guideNav">
					<li><a href="http://fruitest.jp/?mode=f3#fqProduct">FRUITESTの商品について</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqPurchase">ご購入について</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqGift">ギフト対応について</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqDelivery">配送について</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqCancel">キャンセル・変更・返品について</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqBusiness">法人でご購入のお客様</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqWholesaler">流通業者（卸・小売等）のお客様</a></li>
					<li><a href="http://fruitest.jp/?mode=f3#fqContact">お問い合わせについて</a></li>
				</ul>
			</div>
		</div>
		<p>※少人数で運営しているため、お電話でのお問い合わせは承っておりません。予めご了承頂けますと幸いです。</p>
	</div>
	<div id="form_wrap">
		<?php echo do_shortcode( '[contact-form-7 id="8" title="contact"]' ); ?>
	</div>
		</div><!-- inner --> 
</article>
<?php get_template_part("parts/footer");?>
<?php get_template_part("parts/hummenu");?>
</body>
</html>