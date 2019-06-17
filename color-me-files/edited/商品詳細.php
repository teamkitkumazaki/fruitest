<article id="itemDetail">
  <section id="keyVisual">
    <div class="img_wrap" style="background-image: url(<{$product.ot1_url}>)">
    </div>
  </section>
  <form id="cartIn" name="product_form" method="post" action="<{$cart_url}>">
  <section id="basicInfo">
    <div class="inner">
    <div class="comp-title center">
      <h1 class="ttl_ja"><{$product.name}></h1>
      <span class="ttl_en"><{$product.model}></span>
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
            <li class="slide1 active_slide"><img draggable="false" src="<{$product.ot2_url}>"></li>
            <{if $product.ot3_url != null }>
            <li class="slide2"><img draggable="false" src="<{$product.ot3_url}>"></li>
            <{/if}>
            <{if $product.ot4_url != null }>
            <li class="slide3"><img draggable="false" src="<{$product.ot4_url}>"></li>
            <{/if}>
            <{if $product.ot5_url != null }>
            <li class="slide4"><img draggable="false" src="<{$product.ot5_url}>"></li>
            <{/if}>
            <{if $product.ot6_url != null }>
            <li class="slide5"><img draggable="false" src="<{$product.ot6_url}>"></li>
            <{/if}>
            <{if $product.ot7_url != null }>
            <li class="slide6"><img draggable="false" src="<{$product.ot7_url}>"></li>
            <{/if}>
            <{if $product.ot8_url != null }>
            <li class="slide7"><img draggable="false" src="<{$product.ot8_url}>"></li>
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
              <li class="slide1 active_slide"><img src="<{$product.ot2_url}>"></li>
              <{if $product.ot3_url != null }>
              <li class="slide2"><img src="<{$product.ot3_url}>"></li>
              <{/if}>
              <{if $product.ot4_url != null }>
              <li class="slide3"><img src="<{$product.ot4_url}>"></li>
              <{/if}>
              <{if $product.ot5_url != null }>
              <li class="slide4"><img src="<{$product.ot5_url}>"></li>
              <{/if}>
              <{if $product.ot6_url != null }>
              <li class="slide5"><img src="<{$product.ot6_url}>"></li>
              <{/if}>
              <{if $product.ot7_url != null }>
              <li class="slide6"><img src="<{$product.ot7_url}>"></li>
              <{/if}>
              <{if $product.ot8_url != null }>
              <li class="slide7"><img src="<{$product.ot8_url}>"></li>
              <{/if}>
            </ul>
          </div><!-- itemThumb01 -->
        </div>
        <div class="comp-itemdetail">
          <div class="item_upper item">
            <{if $product.soldout_flg == false}>
            <!-- 通常 -->
            <span class="amount">内容量: <{$product.weight}>個</span>
            <span class="state onsale">販売中</span>
            <{else}>
            <!-- 売り切れ -->
            <span class="amount">内容量: <{$product.weight}>個</span>
              <span class="state soldout">再販受付中</span>
            <{/if}>
          </div>
          <div class="item">
            <{if $product.price_disp == true}>
              <{if $product.soldout_flg == false}>
              <span class="number">個数<input type="number" name="product_num" value="<{$product.init_num}>">個</span>
              <span class="price"><{$product.price}></span>
              <{else}>
              <span class="number">個数<input type="number" disabled="disabled" class="disabled" name="product_num" value="<{$product.init_num}>">個</span>
              <span class="price"><{$product.price}></span>
              <{/if}>
              <{else}>
              <span class="number">個数<input disabled="disabled" class="disabled" type="number" name="product_num" value="<{$product.init_num}>">個</span>
              <span class="price">価格未定</span>
            <{/if}>
          </div>
          <div class="button_wrap">
            <{if $product.soldout_flg == false}>
            <button class="comp-cartbutton large"><span>カートに入れる</span></button>
            <input class="product_cart_btn product_addcart_btn" type="submit" value="カートに入れる">
            <{$product.info}>
            <{else}>
            <div class="comp-linkbutton">
              <a href="#aaaa"><span>再入荷リクエスト<font>REQUEST</font></span></a>
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
            <a href="#aaaa"><span>購入予約<font>WAITING LIST</font></span></a>
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
      <h2 class="ttl_ja"><{$product.name}><span class="en"><{$product.model}></span></h2>
    </div>
    <h2 class="copy"><{$product.simple_explain}></h2>
    <div class="comp-itemdetail">
      <div class="item_upper item">
        <{if $product.soldout_flg == false}>
        <!-- 通常 -->
        <span class="amount">内容量: <{$product.weight}>個</span>
        <span class="state onsale">販売中</span>
        <{else}>
        <!-- 売り切れ -->
        <span class="amount">内容量: <{$product.weight}>個</span>
          <span class="state soldout">再販受付中</span>
        <{/if}>
      </div>
      <div class="item">
        <{if $product.price_disp == true}>
          <{if $product.soldout_flg == false}>
          <span class="number">個数<input type="number" name="product_num" value="<{$product.init_num}>">個</span>
          <span class="price"><{$product.price}></span>
          <{else}>
          <span class="number">個数<input type="number" disabled="disabled" class="disabled" name="product_num" value="<{$product.init_num}>">個</span>
          <span class="price"><{$product.price}></span>
          <{/if}>
          <{else}>
          <span class="number">個数<input disabled="disabled" class="disabled" type="number" name="product_num" value="<{$product.init_num}>">個</span>
          <span class="price">価格未定</span>
        <{/if}>
      </div>
      <div class="button_wrap">
        <{if $product.soldout_flg == false}>
        <button class="comp-cartbutton large"><span>カートに入れる</span></button>
        <input class="product_cart_btn product_addcart_btn" type="submit" value="カートに入れる">
        <{$product.info}>
        <{else}>
        <div class="comp-linkbutton">
          <a href="#aaaa"><span>再入荷リクエスト<font>REQUEST</font></span></a>
        </div>
        <{/if}>
      </div>
    </div><!-- comp-itemdetail -->
  </div>
</div>
</div><!-- inner -->
</section><!-- detailLower -->
</form>
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
         <a class="product_name" href="<{$together_product[num].link_url}>"><{$together_product[num].name}><span><{$together_product[num].model}></span></a>
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
<section class="comp-journal">
  <div class="inner">
    <div class="comp-title">
      <h2 class="ttl_ja">FRUITESTについて<span>もっと知る。</span></h2>
      <span class="ttl_en">JOURNAL</span>
    </div>
    <div class="journal_wrap">
      <div id="slickSlider" class="slick-slider">
        <div class="item_box slick-slide">
          <div class="img_wrap">
            <a href="aaaa" style="background-image:url(//journal.fruitest.jp/wp-content/themes/fruitest-theme//img/journal/journal_img01.jpg)"></a>
          </div>
          <div class="txt_wrap">
            <a class="title" href="https://journal.fruitest.jp/core-concept/">FRUITESTの素材について</a>
            <div class="tag_wrap">
              <a href="#aaaa">#素材/果物</a>
            </div>
            <div class="link_wrap">
              <a class="prod_link" href="https://journal.fruitest.jp/core-concept/"><span>記事を読む</span></a>
            </div>
          </div><!-- txt_wrap -->
        </div><!-- item_box -->
        <div class="item_box slick-slide">
          <div class="img_wrap">
            <a href="aaaa" style="background-image:url(//journal.fruitest.jp/wp-content/themes/fruitest-theme//img/journal/journal_img02.jpg)"></a>
          </div>
          <div class="txt_wrap">
            <a class="title" href="https://journal.fruitest.jp/core-concept/">FRUITESTが作られる風景(作業場、種取り）</a>
            <div class="tag_wrap">
              <a href="#aaaa">#製法</a>
            </div>
            <div class="link_wrap">
              <a class="prod_link" href="https://journal.fruitest.jp/core-concept/"><span>記事を読む</span></a>
            </div>
          </div><!-- txt_wrap -->
        </div><!-- item_box -->
        <div class="item_box slick-slide">
          <div class="img_wrap">
            <a href="aaaa" style="background-image:url(//journal.fruitest.jp/wp-content/themes/fruitest-theme//img/journal/journal_img03.jpg)"></a>
          </div>
          <div class="txt_wrap">
            <a class="title" href="https://journal.fruitest.jp/core-concept/">樋口さんのシャインマスカットは香りのレベルが違います</a>
            <div class="tag_wrap">
              <a href="#aaaa">#素材/果物</a>
              <a href="#aaaa">#作り手</a>
              <a href="#aaaa">#産地</a>
            </div>
            <div class="link_wrap">
              <a class="prod_link" href="https://journal.fruitest.jp/core-concept/"><span>記事を読む</span></a>
            </div>
          </div><!-- txt_wrap -->
        </div><!-- item_box -->
      </div>
      <div class="comp-linkbutton">
        <a href="https://journal.fruitest.jp/"><span>ジャーナル一覧へ<font>VIEW JOURNAL</font></span></a>
      </div>
    </div>
  </div>
</section>
</article>
<script>
$('header').addClass('under');
</script>
