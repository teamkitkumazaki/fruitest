<script src="https://img.shop-pro.jp/tmpl_js/63/jquery.tile.js"></script>
<script src="https://img.shop-pro.jp/tmpl_js/63/jquery.masonry.min.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript">
  $(function (){
    $('.layout_wrapper').addClass('ie_wrapper');
  });
</script>
<![endif]-->
<!--[if lt IE 8]>
<script type="text/javascript">
  $(function (){
    $('.icon').each(function () {
      $(this).addClass('ie');
      var classNames = $(this).attr('class').split(' ');
      var spanClassName;
      for (var i = 0; i < classNames.length; i++) {
        if (classNames[i].indexOf('icon_') >= 0 && classNames[i] != 'icon' ) {
          spanClassName = classNames[i];
          break;
        }
      }
      $(this).prepend('<span class="ie_icon ie_'+ spanClassName +'"></span>')
    });
  });
</script>
<![endif]-->
<div id="wrapper" class="layout_wrapper">
  <!-- header -->
  <div id="header" class="layout_header">
    <div class="header_headline_nav clearfix">
      <div class="viewcart_btn header_btn">
        <{assign var="nData" value="0"}>
        <{section name=num loop=$incart}>
          <{math equation="n + add" n=$nData add=$incart[num].product_num assign="nData"}>
        <{/section}>
        <a href="<{$view_cart_url}>" class="icon icon_viewcart">
          <span class="header_btn_txt"><{$nData}>アイテム</span>
        </a>
      </div>
      <ul class="header_member_nav">
        <{if $members_use_flg == true}>
          <{if $members_login_flg == false}>
            <li class="member_login_btn header_btn">
              <a href="<{$members_login_url}>" class="icon icon_login">ログイン</a>
            </li>
            <{if $members_register_flg == true}>
              <li class="member_regist_btn header_btn">
                <a href="<{$members_regi_url}>" class="icon icon_regist">会員登録</a>
              </li>
            <{/if}>
          <{else}>
            <li class="member_logout_btn header_btn">
              <a href="<{$members_login_url}>" class="icon icon_logout">ログアウト</a>
            </li>
          <{/if}>
        <{/if}>
        <li class="member_myaccount_btn header_btn">
          <a href="<{$view_myaccount_url}>" class="icon icon_myaccount">
            マイアカウント
          </a>
        </li>
      </ul>
      <div class="prd_search_block">
        <div class="icon icon_search prd_search_form_btn header_btn">
          <span class="header_btn_txt">ショップ内検索</span>
        </div>
        <form action="<{$product_search_url}>" method="GET" class="prd_search_form">
          <{$product_search_mode}>
          <div class="clearfix">
            <input type="text" name="keyword" class="prd_search_keyword" />
            <input type="submit" class="prd_search_btn" value="検索" />
          </div>
          <div class="prd_search_optioncategory">カテゴリーで絞り込む</div>
          <select class="prd_search_select" name="cid">
            <option value="">カテゴリーを選択</option>
            <{section name=num loop=$category}><option value="<{$category[num].id}>"><{$category[num].name}></option><{/section}>
          </select>
        </form>
      </div>
      <{if $members_login_flg == true}>
        <p class="member_login_name">ようこそ、&nbsp;<{$members_login_name}>&nbsp;様</p>
      <{/if}>
      <{if $incart != "" && $incart_delivery}>
        <ul class="header_delivery_price">
          <{section name=num loop=$incart_delivery}>
            <li>
              <{$incart_delivery[num].delivery_name}>
              <{if $incart_delivery[num].balance > 0}>：
                あと<b><{$incart_delivery[num].balance}>円</b>で<b>送料無料！</b>
              <{else}>
                送料無料です！
              <{/if}>
            </li>
          <{/section}>
        </ul>
      <{/if}>
    </div>
    <div class="shop_name">
      <p><a href="<{$home_url}>"><{$logo}></a></p>
      <{if $logo_type=="image"}>
        <h1 class="sp_hidden"><{$shop_name}></h1>
      <{/if}>
    </div>
    <div class="header_global_nav">
      <ul class="header_nav_lst clearfix">
        <li class="header_nav_menu"><a href="<{$home_url}>">ホーム</a></li>
        <li class="header_nav_menu header_nav_menu_category">
          <span>カテゴリー・検索<img src="https://img.shop-pro.jp/tmpl_img/63/header_category_pulldown.png" /></span>
          <ul class="header_category_lst">
            <{section name=num loop=$category}>
              <li>
                <a href="<{$category[num].link_url}>"><{$category[num].name}></a>
              </li>
            <{/section}>
            <{section name=num loop=$group}>
              <li>
                <a href="<{$group[num].link_url}>"><{$group[num].name}></a>
              </li>
            <{/section}>
          </ul>
        </li>
        <li class="header_nav_menu"><a href="<{$sk_url}>">ショップについて</a></li>
        <{if $manager_url != ""}>
          <li class="header_nav_menu"><a href="<{$manager_url}>">ブログ</a></li>
        <{/if}>
        <li class="header_nav_menu"><a href="<{$view_inq_url}>">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
  <!-- // header -->
  <!-- container -->
  <div id="container" class="layout_container">
    <{include file = $file_name}>
  </div>
  <!-- // container -->
  <!-- footer -->
  <div id="footer" class="layout_footer">
    <div class="footer_nav clearfix">
      <{section name=num loop=$category}>
        <{if $smarty.section.num.first }>
          <div class="category_lst footer_section footer_grid_item">
            <h2 class="ttl_h2 icon icon_category_lst"><span class="clearfix icon icon_down">カテゴリーから探す</span></h2>
            <ul class="footer_lst">
            <{/if}>
            <li class="icon icon_lst">
              <a href="<{$category[num].link_url}>">
                <{if $category[num].img_url != ""}>
                  <img src="<{$category[num].img_url}>" class="footer_category_img" />
                <{/if}>
                <{$category[num].name}>
              </a>
            </li>
            <{if $smarty.section.num.last }>
            </ul>
          </div>
        <{/if}>
      <{/section}>
      <{section name=num loop=$group}>
        <{if $smarty.section.num.first }>
          <div class="category_lst footer_section footer_grid_item">
            <h2 class="ttl_h2 icon icon_category_lst"><span class="clearfix icon icon_down">グループから探す</span></h2>
            <ul class="footer_lst">
            <{/if}>
            <li class="icon icon_lst">
              <a href="<{$group[num].link_url}>">
                <{if $group[num].img_url != ""}>
                  <img src="<{$group[num].img_url}>" class="footer_category_img" />
                <{/if}>
                <{$group[num].name}>
              </a>
            </li>
            <{if $smarty.section.num.last }>
            </ul>
          </div>
        <{/if}>
      <{/section}>
      <{* カテゴリーやグループのリンクを直接テンプレートに設置する場合 *}>
      <!--
      <div class="category_lst footer_section footer_grid_item">
        <h2 class="ttl_h2 icon icon_category_lst"><span class="clearfix icon icon_down">これ以降の商品ジャンルはテンプレを編集する</span></h2>
        <ul class="footer_lst">
          <li class="icon icon_lst">
            <a href="#">999円以下</a>
          </li>
          <li class="icon icon_lst">
            <a href="#">1,000円～2,999円</a>
          </li>
          <li class="icon icon_lst">
            <a href="#">3,000円～4,999円</a>
          </li>
          <li class="icon icon_lst">
            <a href="#">5,000円～9,999円</a>
          </li>
          <li class="icon icon_lst">
            <a href="#">10,000円以上</a>
          </li>
        </ul>
      </div>
      -->
      <{* //カテゴリーやグループのリンクを直接テンプレートに設置する場合 *}>
      <{if $history_num != 0}>
        <div class="category_lst footer_section footer_grid_item">
          <h2 class="ttl_h2 icon icon_category_lst"><span class="clearfix icon icon_down">最近チェックした商品</span></h2>
          <ul class="footer_lst">
            <{section name=num loop=$history max=8}>
              <li class="icon icon_lst">
                <a href="<{$history[num].link_url}>"><{$history[num].name}></a>
              </li>
            <{/section}>
          </ul>
        </div>
      <{/if}>
    </div>
    <div class="footer_nav">
      <{if $manager_name != "" && $manager_memo != ""}>
        <div class="manager_info footer_section footer_grid_item clearfix">
          <h2 class="ttl_h2">ショップについて</h2>
          <{if $manager_img != ""}>
            <div class="manager_img"><img src="<{$manager_img}>" /></div>
          <{/if}>
          <div class="manager_memo">
            <h3 class="ttl_h3"><{$manager_name}></h3>
            <div class="text_block">
              <{$manager_memo}>
            </div>
          </div>
        </div>
      <{/if}>
      <div class="pages_lst footer_section footer_grid_item">
        <ul class="footer_lst">
          <li class="icon icon_lst">
            <a href="<{$home_url}>">ショップホーム</a>
          </li>
          <li class="icon icon_lst">
            <a href="<{$view_inq_url}>">お問い合わせ</a>
          </li>
          <li class="icon icon_lst">
            <a href="<{$sk_url}>#payment">お支払い方法について</a>
          </li>
          <li class="icon icon_lst">
            <a href="<{$sk_url}>#delivery">配送方法・送料について</a>
          </li>
          <{if $mailmaga_url != ""}>
            <li class="icon icon_lst">
              <a href="<{$mailmaga_url}>">メルマガ登録・解除</a>
            </li>
          <{/if}>
          <{if $free_area_flg == true}>
            <{section name=num loop=$freepage}>
              <li class="icon icon_lst">
                <a href="<{$freepage[num].link_url}>"><{$freepage[num].page_title}></a>
              </li>
            <{/section}>
          <{/if}>
          <{if $manager_url != ""}>
            <li class="icon icon_lst"><a href="<{$manager_url}>">ショップブログ</a></li>
          <{/if}>
          <li class="icon icon_lst">
            <a href="<{$sk_url}>">特定商取引法に基づく表記</a>
          </li>
        </ul>
      </div>
      <div class="pages_lst footer_section footer_grid_item">
        <ul class="footer_lst">
          <li class="icon icon_lst">
            <a href="<{$view_myaccount_url}>">マイアカウント</a>
          </li>
          <{if $members_use_flg == true}>
            <{if $members_login_flg == false}>
              <{if $members_register_flg == true}>
                <li class="icon icon_lst">
                  <a href="<{$members_regi_url}>">会員登録</a>
                </li>
              <{/if}>
              <li class="icon icon_lst">
                <a href="<{$members_login_url}>">ログイン</a>
              </li>
            <{else}>
              <li class="icon icon_lst">
                <a href="<{$members_login_url}>">ログアウト</a>
              </li>
            <{/if}>
          <{/if}>
          <li class="icon icon_lst">
            <a href="<{$view_cart_url}>">カートを見る</a>
          </li>
          <li class="icon icon_lst">
            <a href="<{$privacy_url}>">プライバシーポリシー</a>
          </li>
          <li class="icon icon_lst">
            <a href="<{$rss_url}>">RSS</a>&nbsp;/&nbsp;<a href="<{$atom_url}>">ATOM</a>
          </li>
        </ul>
      </div>
      <{if $qrcode_url}>
        <div class="footer_section footer_grid_item clearfix">
          <h2 class="ttl_h2">モバイルショップ</h2>
          <img src="<{$qrcode_url}>" />
        </div>
      <{/if}>

      <{* ソーシャルリンク *}>
      <!--
      <div class="social_lst footer_section footer_grid_item">
        <ul>
          <li>
            <a href="#"><img src="https://img.shop-pro.jp/tmpl_img/63/social_twitter_2x.png" /></a>
          </li>
          <li>
            <a href="#"><img src="https://img.shop-pro.jp/tmpl_img/63/social_instergram_2x.png" /></a>
          </li>
          <li>
            <a href="#"><img src="https://img.shop-pro.jp/tmpl_img/63/social_facebook_2x.png" /></a>
          </li>
        </ul>
      </div>
      -->
      <{* //ソーシャルリンク *}>
    </div>
    <address class="copyright">
      <{$e_copyright}>
      <span class="powered"><a href="https://shop-pro.jp" target="_blank">Powered&nbsp;<img src="https://img.shop-pro.jp/tmpl_img/63/powered.png" alt="カラーミーショップ" /></a></span>
    </address>
  </div>
  <!-- // footer -->
</div>
<script>
$(function () {
  $('.footer_nav').imagesLoaded( function () {
    $('.footer_nav').masonry({
      itemSelector: '.footer_grid_item',
      "gutter": 0
    });
  });
  $('.prd_search_form_btn').click(function () {
    $('.prd_search_block').toggleClass('open');
    $('.prd_search_form').slideToggle();
  });
  $('.header_nav_menu_category span').click(function () {
    $('.header_category_lst').slideToggle('fast');
  });
  $(window).load(function () {
    $('.prd_lst_unit_s').tile();
    $('.prd_lst_unit_m').tile();
    $('.grp_lst_unit').tile();
  });
});
</script>
