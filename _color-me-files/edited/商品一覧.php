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
            <a class="product_name" href="<{$productlist[num].link_url}>"><{$productlist[num].name}><span class="english_name"></span></a>
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
              <a href="<{$productlist[num].link_url}>"><span>詳しく見る</span></a>
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
</article>

<script>
$('header').addClass('under');
</script>
