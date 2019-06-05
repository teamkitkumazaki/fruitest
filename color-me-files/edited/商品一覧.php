<article id="itemList">
  <section id="keyVisual">
    <div class="img_wrap">
    </div>
  </section>
  <section id="productList">
    <div class="inner">
      <div class="ttl_wrap">
      <div class="comp-title">
        <h1 class="ttl_ja">商品一覧<span class="en">PRODUCT LIST</span></h1>
      </div>
      <select name="cat" id="cat" class="postform">
       <option class="option-1" value="?mode=cate&amp;csid=0&amp;cbid=2520817">全ての商品</option>
       <option class="option-1" value="?mode=cate&amp;csid=0&amp;cbid=2520817&amp;csid=1">発売中の商品</option>
       <option class="option-1" value="?mode=cate&amp;csid=0&amp;cbid=2520817&amp;csid=2">Upcoming商品</option>
      </select>
    </div><!-- ttl_wrap -->
    <div id="product" class="products">
      <ul class="comp-productlist">
        <{if $productlist_num !=0 }>
          <{section name=num loop=$productlist}>
        <li>
          <{$productlist[num].sub_category}>
            <{if $productlist[num].soldout_flg == false}>
              <{if $productlist[num].teika_disp == true}>
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
              <a href="<{$productlist[num].link_url}>" style="background-image: url(<{$productlist[num].img_url}>)"></a>
              <{if $productlist[num].soldout_flg == false}>
                <{if $productlist[num].teika_disp == true}>
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
            <a class="product_name" href="<{$productlist[num].link_url}>"><{$productlist[num].name}><span><{$productlist[num].model}></span></a>
            <p class="copy"><{$productlist[num].s_expl}></p>
            <div class="detail">
              <{if $productlist[num].soldout_flg == false}>
                <{if $productlist[num].teika_disp == true}>
                <!-- 通常 -->
                <span class="price">
                  <{$productlist[num].price}>
                </span>
                <span class="stock">販売中</span>
              <{else}>
                <!-- Upcoming -->
                <span class="price">発売前</span>
                <span class="upcoming">構想中</span>
              <{/if}>
              <{else}>
                <!-- 売り切れ -->
                <span class="price">
                  <{$productlist[num].price}>
                </span>
                <span class="soldout">再販受付中</span>
              <{/if}>
            </div>
            <div class="comp-linkbutton-mini">
              <a href="<{$productlist[num].link_url}>"><span>詳しく知る</span></a>
            </div>
          </div>
          </div>
        </li>
        <{/section}>
      </ul>
      <{/if}>
    </div>
  </div><!-- inner -->
</section><!-- productList -->
<section class="comp-option">
  <div class="comp-title center">
    <h2 class="ttl_ja">購入オプション</h2>
    <span class="ttl_en">OPTIONS</span>
  </div>
  <div class="lead_txt">
    <p><span>FRUITESTでは、記念日の贈り物向けのギフトセット・ラッピングサービスや</span><span>季節毎に旬の果物をお届けする定期便など、様々なオプションをご用意しております。</span></p>
  </div>
  <div class="flex_wrap">
    <div class="block gift">
      <span class="sp_ttl">ギフト商品一覧</span>
      <a class="img_wrap" href="/?mode=f2"></a>
      <div class="txt_wrap">
        <span class="ttl">ギフト商品一覧</span>
        <div class="comp-linkbutton-mini">
          <a href="/?mode=f2"><span>詳しく知る</span></a>
        </div>
      </div>
    </div>
    <div class="block subscription">
      <span class="sp_ttl">定期便について</span>
      <a class="img_wrap" href="#aaa"></a>
      <div class="txt_wrap">
        <span class="ttl">定期便について</span>
        <div class="comp-linkbutton-mini">
          <a href="#aaaa"><span>詳しく知る</span></a>
        </div>
      </div>
    </div>
  </div>
</section><!-- topOption -->
</article>

<script>
$('header').addClass('under');
</script>
