<{if $slideshow_html}>
  <div class="slider">
    <{$slideshow_html}>
  </div>
  <script type="text/javascript">
  //<![CDATA[
  $(function(){
    $('#slider').bxSlider({
      auto: true,
      pause: 4000,
      speed: 1000,
      controls: false,
      captions: true,
      mode: 'fade',
      pager: false,
      responsive: true
    });
  });
  //]]>
  </script>
<{/if}>
<{if $info != ""}>
  <div class="info_block container_section">
    <h2 class="ttl_h2">お知らせ</h2>
    <div>
      <{$info}>
    </div>
  </div>
<{/if}>
<{if $recommend_num != 0}>
  <div class="prd_recommend_block container_section">
    <h2 class="ttl_h2">オススメ商品</h2>
    <ul class="prd_lst prd_lst_s clearfix">
      <{section name=num loop=$recommend}>
        <li class="prd_lst_unit prd_lst_unit_s">
          <a href="<{$recommend[num].link_url}>" class="prd_lst_link">
            <{if $recommend[num].img_url != ""}>
              <img src="<{$recommend[num].img_url}>" class="prd_lst_img" alt="<{$recommend[num].name}>" />
            <{else}>
              <img src="https://img.shop-pro.jp/tmpl_img/63/prd_lst_noimage.png" class="prd_lst_img" alt="<{$recommend[num].name}>" />
            <{/if}>
          </a>
          <span class="prd_lst_name prd_lst_span">
            <a href="<{$recommend[num].link_url}>"><{$recommend[num].name}></a>
          </span>
          <{if $recommend[num].s_expl != ""}>
            <span class="prd_lst_exp prd_lst_span">
              <{$recommend[num].s_expl}>
            </span>
          <{/if}>
          <{if $members_login_flg == true && $recommend[num].discount_flg == true}>
            <span class="prd_lst_regular prd_lst_span"><{$recommend[num].regular_price}></span>
          <{/if}>
          <{if $recommend[num].soldout_flg == false}>
            <span class="prd_lst_price prd_lst_span"><{$recommend[num].price}></span>
            <{if $members_login_flg == true && $recommend[num].discount_flg == true}>
              <span class="prd_lst_discount prd_lst_span"><{$recommend[num].discount_rate}>OFF!!</span>
            <{/if}>
          <{else}>
            <span class="prd_lst_soldout prd_lst_span">SOLDOUT</span>
          <{/if}>
        </li>
      <{/section}>
    </ul>
  </div>
<{/if}>
<{if $seller_num != 0}>
  <div class="prd_seller_block container_section">
    <h2 class="ttl_h2">売れ筋商品</h2>
    <ul class="prd_lst prd_lst_m clearfix">
      <{section name=num loop=$seller}>
        <li class="prd_lst_unit prd_lst_unit_m">
          <a href="<{$seller[num].link_url}>" class="prd_lst_link">
            <{if $seller[num].img_url != ""}>
              <img src="<{$seller[num].img_url}>" class="prd_lst_img" alt="<{$seller[num].name}>" />
            <{else}>
              <img src="https://img.shop-pro.jp/tmpl_img/63/prd_lst_noimage.png" class="prd_lst_img" alt="<{$seller[num].name}>" />
            <{/if}>
          </a>
          <span class="prd_lst_name prd_lst_span">
            <a href="<{$seller[num].link_url}>"><{$seller[num].name}></a>
          </span>
          <{if $seller[num].s_expl != ""}>
            <span class="prd_lst_exp prd_lst_span">
              <{$seller[num].s_expl}>
            </span>
          <{/if}>
          <{if $members_login_flg == true && $seller[num].discount_flg == true}>
            <span class="prd_lst_regular prd_lst_span"><{$seller[num].regular_price}></span>
          <{/if}>
          <{if $seller[num].soldout_flg == false}>
            <span class="prd_lst_price prd_lst_span"><{$seller[num].price}></span>
            <{if $members_login_flg == true && $seller[num].discount_flg == true}>
              <span class="prd_lst_discount prd_lst_span"><{$seller[num].discount_rate}>OFF!!</span>
            <{/if}>
          <{else}>
            <span class="prd_lst_soldout prd_lst_span">SOLDOUT</span>
          <{/if}>
        </li>
      <{/section}>
    </ul>
  </div>
<{/if}>
<{if $free_space != ""}>
  <div class="free_space_block container_section">
    <{$free_space}>
  </div>
<{/if}>
