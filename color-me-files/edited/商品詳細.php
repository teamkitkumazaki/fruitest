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
      <div class="flex_left">
        <div id="itemThumb01" class="comp-item-thumb">
          <div class="slide_num">
            <span class="current">1</span><span class="slash">/</span><span class="all">2</span>
          </div>
          <div class="slide_next"></div>
          <div class="slide_prev"></div>
          <ul class="slide_upper">
            <li class="slide1 active_slide">
              <img src="<{$product.ot2_url}>">
            </li>
            <li class="slide2">
              <img src="<{$product.ot3_url}>">
            </li>
          </ul>
        </div><!-- itemThumb01 -->
      </div>
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
              <li class="slide1 active_slide">
                <img src="<{$product.ot2_url}>">
              </li>
              <li class="slide2">
                <img src="<{$product.ot3_url}>">
              </li>
            </ul>
          </div><!-- itemThumb01 -->
        </div>
        <div class="comp-itemdetail">
          <div class="item_upper item">
            <span class="amount">内容量: <{$product.weight}>g</span>
            <span class="state on-sale"></span>
          </div>
          <div class="item">
            <span class="number">個数<input type="number" name="product_num" value="<{$product.init_num}>">個</span>
            <span class="price"><{$product.price}></span>
          </div>
          <div class="button_wrap">
            <button class="comp-cartbutton large"><span>カートに入れる</span></button>
            <input class="product_cart_btn product_addcart_btn" type="submit" value="カートに入れる">
            <{$product.info}>
          </div>
        </div><!-- comp-itemdetail -->
      </div>
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
      <h2 class="ttl_ja">貴陽<span class="en"><{$product.model}></span></h2>
    </div>
    <h2 class="copy"><{$product.simple_explain}></h2>
    <div class="comp-itemdetail">
      <div class="item_upper item">
        <span class="amount">内容量: <{$product.weight}>g</span>
        <span class="state on-sale"></span>
      </div>
      <div class="item">
        <span class="number">個数<input type="number">個</span>
        <span class="price"><{$product.price}></span>
      </div>
      <div class="button_wrap">
        <button class="comp-cartbutton large"><span>カートに入れる</span></button>
        <input class="product_cart_btn product_addcart_btn" type="submit" value="カートに入れる">
      </div>
    </div><!-- comp-itemdetail -->
  </div>
</div>
</div><!-- inner -->
</section><!-- detailLower -->
</form>
<section id="relatedItem">
<div class="inner">
<div class="comp-title">
  <h2 class="ttl_ja">関連商品</h2>
  <span class="en">RELATED ITEMS</span>
</div>
<div class="products">
  <ul class="comp-productlist">
    <li>
      <div class="state on-sale">
      <div class="img_wrap">
        <a href="#aaaa" style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/product_list/product01.jpg)"></a>
      </div>
      <div class="txt_wrap">
        <a class="product_name" href="#aaa">川中島白桃<span>KAWANAKAJIMA PEACH</span></a>
        <p class="copy">農家さんから、一番人気を誇る白桃。</p>
        <div class="detail"><font>\1,200(税抜)</font><span class="stock"></span></div>
        <div class="comp-linkbutton-mini">
          <a href="#aaaa"><span>詳しく知る</span></a>
        </div>
      </div>
      </div>
    </li>
    <li>
      <div class="state on-sale">
      <div class="img_wrap">
        <a href="#aaaa" style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/product_list/product02.jpg)"></a>
      </div>
      <div class="txt_wrap">
        <a class="product_name" href="#aaa">麗王<span>REIOU</span></a>
        <p class="copy">コピーが入ります。</p>
        <div class="detail"><font>\1,200(税抜)</font><span class="stock"></span></div>
        <div class="comp-linkbutton-mini">
          <a href="#aaaa"><span>詳しく知る</span></a>
        </div>
      </div>
      </div>
    </li>
    <li>
      <div class="state on-sale">
        <div class="img_wrap">
          <a href="#aaaa" style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/product_list/product03.jpg)"></a>
        </div>
        <div class="txt_wrap">
        <a class="product_name" href="#aaa">ピオーネ<span>PIONE</span></a>
        <p class="copy">コピーが入ります。コピーが入ります。</p>
        <div class="detail"><font>\1,200(税抜)</font><span class="stock"></span></div>
        <div class="comp-linkbutton-mini">
          <a href="#aaaa"><span>詳しく知る</span></a>
        </div>
      </div>
      </div>
    </li>
    <li>
      <div class="state on-sale">
        <div class="img_wrap">
          <a href="#aaaa" style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/product_list/product04.jpg)"></a>
        </div>
        <div class="txt_wrap">
          <a class="product_name" href="#aaa">シャインマスカット<span>SHINE MASCUT</span></a>
          <p class="copy">コピーが入ります。</p>
          <div class="detail"><font>\1,200(税抜)</font><span class="stock"></span></div>
          <div class="comp-linkbutton-mini">
            <a href="#aaaa"><span>詳しく知る</span></a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</div>
</section><!-- relatedItem -->
<section id="detailJournal" class="comp-journal">
<div class="inner">
  <div class="comp-title">
    <h2 class="ttl_ja">FRUITESTについて<span>もっと知る。</span></h2>
    <span class="ttl_en">JOURNAL</span>
  </div>
  <div class="journal_wrap">
    <div id="slickSlider" class="slick-slider">
      <div class="item_box slick-slide">
        <a
          class="img_wrap"
          href="#aaaa"
          style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/index/journal01.jpg);"
        >
        </a>
        <div class="txt_wrap">
          <span class="date">10月<span>31日</span></span>
          <a class="ttl" href="#aaaa">FRUITESTを作るにあたって</a>
        </div>
      </div>
      <div class="item_box slick-slide">
        <a
          class="img_wrap"
          href="#aaaa"
          style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/index/journal02.jpg);"
        >
        </a>
        <div class="txt_wrap">
          <span class="date">9月<span>4日</span></span>
          <a class="ttl" href="#aaaa">”天空の茶畑”産ティーシードオイルについて</a>
        </div>
      </div>
      <div class="item_box last slick-slide">
        <a
          class="img_wrap"
          href="#aaaa"
          style="background-image: url(https://journal.fruitest.jp/wp-content/themes/fruitest-theme/img/index/journal03.jpg);"
        >
        </a>
        <div class="txt_wrap">
          <span class="date">7月<span>1日</span></span>
          <a class="ttl" href="#aaaa">「Komons」の名前の由来は「江戸小紋」</a>
        </div>
      </div>
    </div>
    <div class="comp-linkbutton">
      <a href="#aaaa"><span>ジャーナル一覧へ<font>VIEW JOURNAL</font></span></a>
    </div>
  </div>
</div>
</section>
</article>
<script>
$('header').addClass('under');
</script>
