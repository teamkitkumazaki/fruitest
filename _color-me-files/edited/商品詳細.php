<script>
$(function() {
  function submitForm(){
    $('#cartIn').submit();
  }
});
</script>
<form id="cartIn" name="product_form" method="post" action="<{$cart_url}>">
<article id="itemDetail">
  <section id="keyVisual">
    <div class="img_wrap" style="background-image: url(<{$product.ot1_url}>)">
    </div>
  </section>
  <section id="basicInfo">
    <div class="inner">
    <div class="comp-title center">
      <h1 class="ttl_ja"><{$product.name}></h1>
      <span id="enName01" class="ttl_en"></span>
    </div>
    <div class="flex_wrap">
      <{if $product.price_disp == true}>
      <div class="flex_left">
        <div id="itemThumb01" class="comp-item-thumb">
          <div class="slide_num">
            <span class="current">1</span><span class="slash">/</span><span class="all">2</span>
          </div>
          <div class="slide_next"></div>
          <div class="slide_prev"></div>
          <ul class="slide_upper">
            <{if $otherimg_num != 0}>
            <{section name=num loop=$otherimg}>
            <{if $otherimg[num].url != ""}>
            <li><img src="<{$otherimg[num].url}>" /></li>
            <{/if}>
            <{/section}>
            <{/if}>
          </ul>
        </div><!-- itemThumb01 -->
      </div>
      <{/if}>
      <{if $product.price_disp == true}>
      <div class="flex_right">
          <h2 class="copy"><{$product.simple_explain}></h2>
          <p id="excerpt" class="detail"></p>
        <div class="sp_img">
          <div id="itemThumb02" class="comp-item-thumb">
            <div class="slide_num">
              <span class="current">1</span><span class="slash">/</span><span class="all">2</span>
            </div>
            <div class="slide_next"></div>
            <div class="slide_prev"></div>
            <ul class="slide_upper">
              <{if $otherimg_num != 0}>
              <{section name=num loop=$otherimg}>
              <{if $otherimg[num].url != ""}>
              <li><img src="<{$otherimg[num].url}>" /></li>
              <{/if}>
              <{/section}>
              <{/if}>
            </ul>
          </div><!-- itemThumb01 -->
        </div>
        <div class="comp-itemdetail">
          <div class="item_upper item">
            <{if $sid_name == "gift"}>
              <span class="amount">セット商品</span>
            <{else}>
              <span class="amount">内容量: <{$product.weight}>個</span>
            <{/if}>
            <{if $product.soldout_flg == false}>
              <!-- 通常 -->
              <span class="state onsale">販売中</span>
            <{else}>
              <!-- 売り切れ -->
              <{if $sid_name != "Upcoming商品"}>
                <span class="state soldout">再販受付中</span>
                <{else}>
                <!-- Upcoming商品 -->
                <span class="upcoming">構想中</span>
                <{/if}>
            <{/if}>
            </div>
          <div class="item">
            <{if $product.price_disp == true}>
              <{if $product.soldout_flg == false}>
              <span class="number">個数<input type="text" name="product_num" value="<{$product.init_num}>">個</span>
              <span class="price"><{$product.price}></span>
              <{else}>
              <span class="number">個数<input type="text" disabled="disabled" class="disabled" name="product_num" value="<{$product.init_num}>">個</span>
              <span class="price"><{$product.price}></span>
              <{/if}>
              <{else}>
              <span class="number">個数<input disabled="disabled" class="disabled" type="number" name="product_num" value="<{$product.init_num}>">個</span>
              <span class="price">価格未定</span>
            <{/if}>
          </div>
          <{if $sid_name == "gift" || $sid_name == "preview"}>
          <div class="product_option_table" style="display: none;">
            <{$option_table}>
          </div>
          <{/if}>
          <div class="button_wrap">
            <{if $product.soldout_flg == false}>
            <{if $sid_name != "gift"}>
            <button class="comp-cartbutton large"><span>カートに入れる</span></button>
            <input class="product_cart_btn product_addcart_btn" type="submit" value="カートに入れる">
            <{else}>
            <a id="optionSelect" class="comp-cartbutton large gift" href="javascript:void(0);"><span>ギフトオプションを選択して購入</span></a>
            <{/if}>
            <{$product.info}>
            <{else}>
            <div class="comp-linkbutton">
              <div class="comp-linkbutton">
                <{if $sid_name != "Upcoming商品"}>
                  <a target="_blank" href="//journal.fruitest.jp/waiting-list/id<{$product.id}>/"><span>再入荷リクエスト<font>REQUEST</font></span></a>
                  <{else}>
                  <a target="_blank" href="//journal.fruitest.jp/waiting-list/id<{$product.id}>/"><span>購入予約<font>WAITING LIST</font></span></a>
                  <!-- Upcoming商品 -->
                <{/if}>
              </div>
            </div>
            <{/if}>
          </div>
        </div><!-- comp-itemdetail -->
      </div>
      <{else}>
      <!-- Upcoming -->
      <div class="flex_right flex_all">
          <span class="tag">構想中</span>
          <h2 class="copy"><{$product.simple_explain}></h2>
          <p id="excerpt" class="detail"></p>
          <div class="comp-linkbutton">
            <a target="_blank" href="//journal.fruitest.jp/waiting-list/id<{$product.id}>/"><span>購入予約<font>WAITING LIST</font></span></a>
          </div>
      </div>
      <{/if}>
    </div><!-- flex_wrap -->
  </div>
</section><!-- basicInfo -->
<{$product.explain}>
<section id="detailLower">
<div class="inner">
<div class="flex_wrap">
  <div class="flex_img">
    <img src="<{$product.ot2_url}>">
  </div>
  <div class="flex_txt">
    <div class="comp-title">
      <h2 class="ttl_ja">
        <span class="ja"><{$product.name}></span>
        <span id="enName02" class="en"></span>
      </h2>
    </div>
    <h2 class="copy"><{$product.simple_explain}></h2>
    <div class="comp-itemdetail">
      <div class="item_upper item">
        <{if $sid_name == "gift"}>
          <span class="amount">セット商品</span>
        <{else}>
          <span class="amount">内容量: <{$product.weight}>個</span>
        <{/if}>
        <{if $product.soldout_flg == false}>
          <!-- 通常 -->
          <span class="state onsale">販売中</span>
        <{else}>
          <!-- 売り切れ -->
          <{if $sid_name != "Upcoming商品"}>
            <span class="state soldout">再販受付中</span>
            <{else}>
            <!-- Upcoming商品 -->
            <span class="upcoming">構想中</span>
            <{/if}>
        <{/if}>
      </div>
      <div class="item">
        <{if $product.price_disp == true}>
          <{if $product.soldout_flg == false}>
          <span class="number">個数<input type="text" name="product_num" value="<{$product.init_num}>">個</span>
          <span class="price"><{$product.price}></span>
          <{else}>
          <span class="number">個数<input type="text" disabled="disabled" class="disabled" name="product_num" value="<{$product.init_num}>">個</span>
          <span class="price"><{$product.price}></span>
          <{/if}>
          <{else}>
          <span class="number">個数<input disabled="disabled" class="disabled" type="number" name="product_num" value="<{$product.init_num}>">個</span>
          <span class="price">価格未定</span>
        <{/if}>
      </div>
      <div class="button_wrap">
        <{if $product.soldout_flg == false}>
        <{if $sid_name != "gift"}>
          <button class="comp-cartbutton large"><span>カートに入れる</span></button>
          <input class="product_cart_btn product_addcart_btn" type="submit" value="カートに入れる">
        <{else}>
          <a id="optionSelect02" class="comp-cartbutton large gift" href="javascript:void(0);"><span>ギフトオプションを選択して購入</span></a>
        <{/if}>
        <{$product.info}>
        <{else}>
        <div class="comp-linkbutton">
          <{if $sid_name != "Upcoming商品"}>
            <a target="_blank" href="//journal.fruitest.jp/waiting-list/id<{$product.id}>/"><span>再入荷リクエスト<font>REQUEST</font></span></a>
            <{else}>
            <a target="_blank" href="//journal.fruitest.jp/waiting-list/id<{$product.id}>/"><span>購入予約<font>WAITING LIST</font></span></a>
            <!-- Upcoming商品 -->
          <{/if}>
        </div>
        <{/if}>
      </div>
    </div><!-- comp-itemdetail -->
  </div>
</div>
</div><!-- inner -->
</section><!-- detailLower -->
<{if $together_product_num != 0}>
<section id="relatedItem">
<div class="inner">
<div class="comp-title">
  <h2 class="ttl_ja">関連商品</h2>
  <span class="en">RELATED ITEMS</span>
</div>
<div class="products">
  <div id="relatedSlider" class="comp-related-product">
     <{section name=num loop=$together_product}>
     <div class="item_box slick-slide">
         <{if $together_product[num].soldout_flg == false}>
           <{if $together_product[num].teika_disp == true}>
           <!-- 通常 -->
           <div class="state">
           <{else}>
           <!-- Upcoming -->
           <div class="state upcoming">
           <{/if}>
           <{else}>
           <div class="state soldout">
         <{/if}>
         <div class="img_wrap">
           <a href="<{$together_product[num].link_url}>" style="background-image: url(<{$together_product[num].img_url}>)"></a>
           <{if $together_product[num].soldout_flg == false}>
             <{if $together_product[num].teika_disp == true}>
             <!-- 通常 -->
             <span class="stock">販売中</span>
             <{else}>
             <!-- Upcoming -->
             <span class="upcoming">構想中</span>
             <{/if}>
             <{else}>
               <!-- 売り切れ -->
               <span class="soldout">再販受付中</span>
             <{/if}>
       </div>
       <div class="txt_wrap">
         <a class="product_name" href="<{$together_product[num].link_url}>"><{$together_product[num].name}><span class="english_name"></span></a>
         <p class="copy"><{$together_product[num].s_expl}></p>
         <div class="detail">
           <span class="price"><{$together_product[num].price}></span>
           <{if $together_product[num].soldout_flg == false}>
             <{if $together_product[num].teika_disp == true}>
             <!-- 通常 -->
             <span class="stock">販売中</span>
           <{else}>
             <!-- Upcoming -->
             <span class="upcoming">構想中</span>
           <{/if}>
           <{else}>
             <!-- 売り切れ -->
             <span class="soldout">再販受付中</span>
           <{/if}>
         </div>
         <div class="comp-linkbutton-mini">
           <a href="<{$together_product[num].link_url}>"><span>詳しく知る</span></a>
         </div>
       </div>
       </div>
     </div>
     <{/section}>
  </div>
</div>
</div>
</section><!-- relatedItem -->
<{/if}>
<section class="comp-option">
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
</article>
<{if $sid_name == "gift"}>
<div id="optionPop" class="comp-gift-option-pop">
<div id="popBg" class="pop_bg"></div>
<div class="pop_flex">
  <div class="height_adjust"></div>
  <div class="pop_contents">
    <div id="popClose" class="pop_close"></div>
    <div class="contents_inner">
      <div class="item_thumb">
        <span class="pc_thumb" style="background-image: url(<{$product.ot1_url}>);"></span>
      </div>
        <p class="prod_name">
          <span class="ja"><{$product.name}></span>
          <span id="enName03" class="en"></span>
        </p>
      <p class="pop_title">下記よりオプションを<span>お選びいただけます</span></p>
              <div class="option_select">
        <div class="option_item tesage">
          <label>
            <div class="img_wrap" style="background-image:url(https://res.cloudinary.com/dj7vewpdn/image/upload/f_auto,q_auto/v1611221777/gift_service/gift_service03_yrwugo.jpg)"></div>
            <div class="input_wrap">
              <input type="checkbox" name="tesage" value="tesage">
              <span class="radio_checker"></span>
              <div class="option_name">
                <span class="name">手提げ紙袋</span>
                <span class="price">無料</span>
              </div>
            </div>
          </label>
        </div>
        <div class="option_item nosi">
          <label>
            <div class="img_wrap" style="background-image:url(https://res.cloudinary.com/dj7vewpdn/image/upload/f_auto,q_auto/v1611221777/gift_service/gift_service01_r4ctym.jpg)"></div>
            <div class="input_wrap">
              <input type="checkbox" name="mizuhiki" value="mizuhiki">
              <span class="radio_checker"></span>
              <div class="option_name">
                <span class="name">熨斗(のし)</span>
                <span class="price">+100円(税抜)</span>
              </div>
            </div>
          </label>
          <p class="mizuhiki_desc">※水引の種類は、どのシーンのお祝い事にもお使いいただける「紅白梅結び」になります。</p>
          <p class="mizuhiki_desc">※熨斗に「表書き（御祝/内祝/御結婚祝など）」「お名前」の印字をご希望のお客様は、購入手続き画面最下部の「備考欄」にその内容をご記入ください。ご記入のない場合は、「無地熨斗」にて対応させていただきます。</p>
        </div>
      </div>
    </div>
    <div class="fix_wrapper">
      <div class="option_fix">
        <button id="optionFix" class="option_fix_button" href="javascript:void(0);" onclick="gtag_report_conversion(); return false;"><span>購入する</span></button>
        <input class="product_cart_btn product_addcart_btn" type="submit" value=" カートに入れる" onclick="gtag_report_conversion(); return false;">
      </div>
    </div>
  </div>
</div>
</div>
</form>
<{/if}>
<script>
$('header').addClass('under');
</script>
