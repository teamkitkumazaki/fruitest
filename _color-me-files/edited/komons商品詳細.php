<script>
$(function() {
  function convSet(target){
    target.find('input[type="submit"]').each(function(index) {
      $(this).attr('onclick', 'gtag_report_conversion(); return false;');
    });
  }
  convSet($('article'));
});
</script>
<article id="itemDetail" class="dishwash">
  <section class="main" style="background-image: url(<{$product.ot1_url}>);">
    <div class="fil"></div>
  </section>
  <section class="cart_wrap01">
      <form id="cartIn" name="product_form" method="post" action="<{$cart_url}>">
    <div class="product_ex">
      <h2 class="product_cat"><{$sid_name}></h2>
      <h1 class="prodcut_name"><{$product_name}></h1>
      <div id="excerpt" class="excerpt"></div>
    </div>
    <!-- product_ex -->
    <div class="product_detail">
      <div class="detail_block detail01">
        <span class="left_txt">内容量：<span class="weight"><{$product.weight}></span>ml</span>
				<span class="right_txt stock"><{$product.stock_str}></span>
      </div>
      <div class="detail_block detail02">
        <span class="left_txt"><span>数量</span>：<input type="text" name="product_num" value="<{$product.init_num}>" class="product_init_num" /><span>個</span></span>
        <span class="right_txt">合計：<{$product.price}></span>
      </div>
    </div>
    <!-- product_detail -->
    <div class="cart_button">
      <div class="cart_wrap">
				<span class="txt">カートに入れる</span>
        <input class="product_cart_btn product_addcart_btn" type="submit" value=" カートに入れる" />
        <{$product.info}>
      </div>
			<span class="souryou">5,000円以上のお買い上げで送料無料</span>
    </div>
      </form>
  </section>
  <!-- cart_wrap01 -->
<{$product.explain}>
<section class="cart_wrap02">
  <div class="img_wrap">
    <img src="<{$product.ot2_url}>">
  </div>
  <div class="txt_wrap">
      <form name="product_form" method="post" action="<{$cart_url}>">
    <h3><{$sid_name}></h3>
    <h2><{$product_name}></h2>
    <div class="product_detail">
      <div class="detail_block detail01">
				<span class="left_txt">内容量：<span class="weight"><{$product.weight}></span>ml</span>
        <span  class="right_txt stock"><{$product.stock_str}></span>
      </div>
      <div class="detail_block detail02">
        <span class="left_txt"><span>数量</span>：<input type="text" name="product_num" value="<{$product.init_num}>" class="product_init_num" /><span>個</span></span>
        <span class="right_txt">合計：<{$product.price}></span>
      </div>
    </div>
    <!-- product_detail -->
    <div class="cart_button">
      <div class="cart_wrap">
        <span class="txt">カートに入れる</span>
        <input class="product_cart_btn product_addcart_btn" type="submit" value=" カートに入れる" />
        <{$product.info}>
      </div>
			<span class="souryou">5,000円以上のお買い上げで送料無料</span>
    </div>
    </form>
  </div>
</section>
<!-- cart_wrap02 -->
<section class="journal_wrap item_detail">
   <div class="detail_ttl">
     <h3><span class="en_ttl">Related Journal</span><span class="jp_ttl">製品についてもっと知る</span></h3>
   </div>
   <div class="article_wrap">
		<iframe class="autoHeight" src="https://journal.komons-japan.com/iframe-all" scrolling="no" frameborder="0"></iframe>
   </div>
 </section>
 <!-- journal_wrap -->
 <section class="related_item item_detail">
   <div class="detail_ttl">
     <h3><span class="en_ttl">Related Items</span><span class="jp_ttl">関連商品一覧</span></h3>
   </div>
   <div class="products">
     <{if $together_product_num != 0}>
     <ul>
       <{section name=num loop=$together_product}>
       <li>
         <h4 class="cat_ttl"><{$together_product[num].s_expl}></h4>
         <div class="img_wrap">
           <a href="<{$together_product[num].link_url}>">
             <img src="<{$together_product[num].img_url}>">
           </a>
         </div>
         <div class="txt_wrap">
           <h3><a href="<{$together_product[num].link_url}>"><{$together_product[num].name}></a></h3>
           <span class="product_detail"><{$together_product[num].teika}></span>
           <a class="arrow_link" href="<{$together_product[num].link_url}>"><span class="link_wrap">詳しく見る<span class="arrow"></span></span></a>
         </div>
       </li>
       <{/section}>
     </ul>
     <{/if}>
   </div>
 </section><!-- related_item -->
</article>
