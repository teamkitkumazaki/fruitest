<!-- パンくずリスト -->
<div class="topicpath_nav">
  <ul>
    <li><a href="<{$home_url}>">ホーム</a></li>
    <{if $bid_name != ""}>
      <li>&nbsp;&gt;&nbsp;<a href="<{$bid_link}>"><{$bid_name}></a></li>
    <{/if}>
    <{if $sid_name != ""}>
      <li>&nbsp;&gt;&nbsp;<a href="<{$sid_link}>"><{$sid_name}></a></li>
    <{/if}>
  </ul>
  <{section name=cnt loop=$group_breadcrumb_list}>
    <ul>
      <li><a href="<{$home_url}>">ホーム</a></li>
      <{section name=num loop=$group_breadcrumb_list[cnt].group_breadcrumb}>
        <li>&nbsp;&gt;&nbsp;<a href="<{$group_breadcrumb_list[cnt].group_breadcrumb[num].link_url}>"><{$group_breadcrumb_list[cnt].group_breadcrumb[num].name}></a></li>
      <{/section}>
    </ul>
  <{/section}>
</div>
<!-- //パンくずリスト -->

<div class="container_section">
  <{if $product.id != ""}>
    <form name="product_form" method="post" action="<{$cart_url}>">
      <h2 class="ttl_h2"><{$product_name}></h2>

      <!-- 商品画像 -->
      <{if $product.img_url != "" || $otherimg_num != 0}>
        <div class="product_image container_section clearfix">
          <div class="product_image_main">
            <{if $product.img_url != ""}>
              <img src="<{$product.img_url}>" />
            <{else}>
              <{section name=num loop=$otherimg}>
                <{if $smarty.section.num.iteration == 1}>
                  <img src="<{$otherimg[num].url}>" />
                <{/if}>
              <{/section}>
            <{/if}>
          </div>
          <{if $otherimg_num != 0}>
            <div class="product_image_thumb clearfix">
              <ul>
                <{if $product.img_url != ""}>
                  <li><img src="<{$product.img_url}>" /></li>
                <{/if}>
                <{section name=num loop=$otherimg}>
                  <{if $otherimg[num].url != ""}><li><img src="<{$otherimg[num].url}>" /></li><{/if}>
                <{/section}>
              </ul>
            </div>
          <{/if}>
        </div>
      <{/if}>
      <!-- //商品画像 -->

      <!-- 商品説明文 -->
      <div class="product_exp container_section clearfix">
        <{$product.explain}>
      </div>
      <!-- //商品説明文 -->

      <div class="product_info_block">
        <{if $option_output_mode}>
          <div class="product_option_table">
            <{$option_table}>
          </div>
        <{/if}>
        <!-- 商品情報 -->
        <div class="product_spec_block">
          <table class="product_spec_table none_border_table">
            <{if $product.model != ""}>
              <tr>
                <th>型番</th>
                <td><{$product.model}></td>
              </tr>
            <{/if}>
            <{if $product.price_disp && $product.price != $product.sales}>
              <tr>
                <th>定価</th>
                <td><{$product.price}></td>
              </tr>
            <{/if}>
            <{if $members_login_flg == true && $product.discount_flg == true}>
              <tr>
                <th>販売価格</th>
                <td><{$product.regular_price}></td>
              </tr>
            <{/if}>
            <{if $product.stock_disp}>
              <tr>
                <th>在庫状況</th>
                <td><{$product.stock_str}></td>
              </tr>
            <{/if}>
            <{if $product.soldout_flg == 0 }>
              <tr>
                <th><{if $members_login_flg == true && $product.discount_flg == true}>会員価格<{else}>販売価格<{/if}></th>
                <td>
                  <{* 販売価格 *}>
                  <div class="product_sales"><{$product.sales}></div>
                  <{* 割引率 *}>
                  <{if $members_login_flg == true && $product.discount_flg == true}>
                    <div class="product_discount"><{$product.discount_rate}>OFF!!</div>
                  <{/if}>
                </td>
              </tr>
            <{/if}>
            <{if !$option_output_mode}>
              <{section name=num loop=$option}>
                <tr class="product_order_form">
                  <th><{$option[num].name}></th>
                  <td>
                    <select name="<{$option[num].select_name}>">
                      <{html_options values=$option_value[num].id output=$option_value[num].name selected=$key}>
                    </select>
                  </td>
                </tr>
              <{/section}>
            <{/if}>
            <{if $product.product_text_titles}>
              <{foreach from=$product.product_text_titles key=key item=val}>
                <tr class="product_order_form">
                  <th><{$val|escape}></th>
                  <td>
                    <input type="text" name="product_text[<{$key|escape}>]" value="" class="text-titles-list__detail-text" />
                  </td>
                </tr>
              <{/foreach}>
            <{/if}>
            <{if $shop_stop_flg == false}>
              <tr class="product_order_form">
                <th>購入数</th>
                <td>
                  <{if $product.soldout_flg == 0 && $product.login_sale_flg == false}>
                    <input type="text" name="product_num" value="<{$product.init_num}>" class="product_init_num" />
                    <ul class="product_init">
                      <li><a href="<{$num_up_url}>"></a></li>
                      <li><a href="<{$num_dw_url}>"></a></li>
                    </ul>
                    <div class="product_unit"><{$product.unit}></div>
                  <{else}>
                    <{if $product.soldout_flg == 1}>
                      <div class="product_soldout_msg">Soldout</div>
                    <{elseif $product.login_sale_flg == true}>
                      <div class="product_member_sale_msg">会員のみ購入できます</div>
                    <{/if}>
                  <{/if}>
                </td>
              </tr>
            <{/if}>
          </table>
          <!-- //商品情報 -->
          <{if $product.soldout_flg == 0 && $shop_stop_flg == false && $product.login_sale_flg == false}>
            <div class="clearfix">
              <div class="disable_cartin">
                <input class="product_cart_btn product_addcart_btn" type="submit" value=" カートに入れる" />
              </div>
              <{if $easy_order_flg == true}>
                <div class="disable_quick">
                  <a href="<{$easy_order_url}>" class="product_cart_btn product_quick_order_btn">クイック購入</a>
                </div>
              <{/if}>
            </div>
          <{/if}>
          <div class="stock_error">
          </div>
        </div>

        <div class="product_info_lst container_section">
          <{if $review_use_flg == true}>
            <!-- レビュー -->
            <ul class="product_review">
              <li class="icon icon_review"><a href="<{$review_lst_url}>">レビューを見る(<{$review_item_num}>件)</a></li>
              <li class="icon icon_review_post"><a href="<{$review_send_url}>">レビューを投稿</a></li>
            </ul>
            <!-- //レビュー -->
          <{/if}>
          <ul>
            <{if $opt_url != ""}>
              <li class="icon icon_lst"><a href="<{$opt_url}>">オプションの値段詳細</a></li>
            <{/if}>
            <li class="icon icon_lst"><a href="<{$sk_url}>#sk_info">特定商取引法に基づく表記（返品等）</a></li>
            <li class="icon icon_lst"><a href="<{$prod_teach_url}>">この商品を友達に教える</a></li>
            <li class="icon icon_lst"><a href="<{$prod_inq_url}>">この商品について問い合わせる</a></li>
            <li class="icon icon_lst"><a href="<{$keep_shopping_url}>">買い物を続ける</a></li>
          </ul>
          <!-- ソーシャルボタン -->
          <ul class="social_share">
            <li>
              <{* Facebook_like *}><{facebook_like layout="button_count" width=110 action="like"}>
              <{* twitter *}><{twitter_tweet}>
              <{* line *}><{$line_button}>
            </li>
            <{* カラメルお気に入り *}>
            <li><{$calamel_favorite_link_button}></li>
          </ul>
          <!-- //ソーシャルボタン -->
        </div>
      </div>

      <{if $trackback_url != ""}>
        <{$auto_trackback_url}>
        <!-- トラックバック -->
        <div id="trackback" class="trackback_block contents_section">
          <h2 class="ttl_h2">トラックバック</h2>
          <{if $trackback_num != 0}>
            <div class="wrap_product_cmt">
              <ul class="product_cmt_lst product_cmt_lst_trackback">
                <{section name=num loop=$trackback}>
                  <li class="product_cmt_by_user">
                    <div class="product_cmt_date"><a href="<{$trackback[num].url}>" target="_blank" rel="nofollow"><{$trackback[num].title}></a>｜投稿日：<{$trackback[num].make_date}></div>
                    <div class="product_cmt_message">
                      <{$trackback[num].excerpt}>（<{$trackback[num].blog_name}>）
                      <div>
                      </div>
                    </div>
                  </li>
                <{/section}>
              </ul>
            </div>
          <{/if}>
          <h3 class="ttl_h3">この商品のトラックバックURL</h3>
          <input type="txt" value="<{$trackback_url}>" class="trackback_url" onclick="this.select(0,this.value.length)" />
        </div>
        <!-- //トラックバック -->
      <{/if}>

      <{if $together_product_num != 0}>
        <!-- 組合せ購入 -->
        <div class="together_block contents_section">
          <h2 class="ttl_h2">この商品を購入した人は、こんな商品も購入しています</h2>
          <div class="wrap_together">
            <ul class="prd_lst prd_lst_m clearfix">
              <{section name=num loop=$together_product}>
                <li class="prd_lst_unit prd_lst_unit_m">
                  <a href="<{$together_product[num].link_url}>" class="prd_lst_link">
                    <{if $together_product[num].img_url != ""}>
                      <img src="<{$together_product[num].img_url}>" class="prd_lst_img" alt="<{$together_product[num].name}>" />
                    <{else}>
                      <img src="https://img.shop-pro.jp/tmpl_img/63/prd_lst_noimage.png" class="prd_lst_img" alt="<{$together_product[num].name}>" />
                    <{/if}>
                  </a>
                  <span class="prd_lst_name prd_lst_span">
                    <a href="<{$together_product[num].link_url}>"><{$together_product[num].name}></a>
                  </span>
                </li>
              <{/section}>
            </ul>
          </div>
        </div>
        <!-- //組合せ購入 -->
      <{/if}>

      <{$product.info}>
    </form>
  <{else}>
    <{if $product.hide_flg == true}>
      <p class="prd_lst_none">この商品を閲覧するにはログインが必要です。</p>
    <{else}>
      <p class="prd_lst_none">現在、この商品は扱っておりません。</p> <{/if}>
  <{/if}>
</div>
<script type="text/javascript">
  function prd_img_size() {
    var img_size = $('.product_image_thumb li').width();
    $('.product_image_thumb img').css('maxHeight', img_size + 'px');
    $('.product_image_thumb li').css('height', img_size + 'px');
  }
  $(function () {
    prd_img_size();
    $('.product_image_thumb li').click(function () {
      $('.product_image_main img').attr('src', $('img', $(this)).attr('src'));
    });
    $('.product_init_num').change(function(){
      var txt  = $(this).val();
      var han = txt.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
      $(this).val(han);
    });
  });
</script>
