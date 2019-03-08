<!-- パンくずリスト -->
<ul class="topicpath_nav">
  <li><a href="<{$home_url}>">ホーム</a></li>
  <{if $smarty.get.mode != "grp"}>
    <{if $bid_name != ""}>
      <li>&nbsp;&gt;&nbsp;<a href="<{$bid_link}>"><{$bid_name}></a></li>
    <{/if}>
    <{if $sid_name != ""}><li>&nbsp;&gt;&nbsp;<a href="<{$sid_link}>"><{$sid_name}></a></li><{/if}>
  <{else}>
    <{section name=num loop=$group_breadcrumb}><li>&nbsp;&gt;&nbsp;<a href="<{$group_breadcrumb[num].link_url}>"><{$group_breadcrumb[num].name}></a></li><{/section}>
  <{/if}>
</ul>
<!-- //パンくずリスト -->

<div class="prd_lst_block container_section">

  <{if $category_desc_1 != "" || $subcategory_desc_1 != "" || $group_desc_1 != ""}>
    <!-- カテゴリー・グループ 説明文 1 -->
    <div class="category_desc_1 category_desc container_section clearfix">
      <{$category_desc_1}><{$subcategory_desc_1}><{$group_desc_1}>
    </div>
    <!-- //カテゴリー・グループ 説明文 1 -->
  <{/if}>

  <h2 class="ttl_h2"><{if $sid_name != ""}><{$sid_name}><{elseif $bid_name != ""}><{$bid_name}><{else}>該当のカテゴリーがありません<{/if}></h2>

  <{if $subcategory_num != 0}>
    <!-- カテゴリー（小）一覧 -->
    <ul class="grp_lst clearfix">
      <{section name=num loop=$sub_category}>
        <li class="grp_lst_unit">
          <a href="<{$sub_category[num].link_url}>">
            <{if $sub_category[num].img_url != "" }>
              <img src="<{$sub_category[num].img_url}>" class="grp_lst_img" />
            <{/if}>
            <{$sub_category[num].name}>
          </a>
        </li>
      <{/section}>
    </ul>
    <!-- //カテゴリー（小）一覧 -->
  <{/if}>

  <{if $subgroup_num != 0}>
    <!-- グループ（小）一覧 -->
    <ul class="grp_lst clearfix">
      <{section name=num loop=$sub_group}>
        <li class="grp_lst_unit">
          <a href="<{$sub_group[num].link_url}>">
            <{if $sub_group[num].img_url != "" }>
              <img src="<{$sub_group[num].img_url}>" class="grp_lst_img" />
            <{/if}>
            <span class="grp_lst_name">
              <{$sub_group[num].name}>
            </span>
          </a>
        </li>
      <{/section}>
    </ul>
    <!-- //グループ（小）一覧 -->
  <{/if}>

  <{if $productlist_num != 0}>
    <div class="prd_lst_sort icon icon_sort">
      <{if $productlist_sort_now != ""}>
        <a href="<{$productlist_sort_def}>">おすすめ順</a>
      <{else}>
        <strong>おすすめ順</strong>
      <{/if}>
      &nbsp;|&nbsp;
      <{if $productlist_sort_now != "p"}>
        <a href="<{$productlist_sort_price}>">価格順</a>
      <{else}>
        <strong>価格順</strong>
      <{/if}>
      &nbsp;|&nbsp;
      <{if $productlist_sort_now != "n"}>
        <a href="<{$productlist_sort_new}>">新着順</a>
      <{else}>
        <strong>新着順</strong>
      <{/if}>
    </div>
    <ul class="prd_lst prd_lst_s clearfix">
      <{section name=num loop=$productlist}>
        <li class="prd_lst_unit prd_lst_unit_s">
          <a href="<{$productlist[num].link_url}>" class="prd_lst_link">
            <{if $productlist[num].img_url != ""}>
              <img src="<{$productlist[num].img_url}>" class="prd_lst_img" alt="<{$productlist[num].name}>" />
            <{else}>
              <img src="https://img.shop-pro.jp/tmpl_img/63/prd_lst_noimage.png" class="prd_lst_img" alt="<{$productlist[num].name}>" />
            <{/if}>
          </a>
          <span class="prd_lst_name prd_lst_span">
            <a href="<{$productlist[num].link_url}>"><{$productlist[num].name}></a>
          </span>
          <{if $productlist[num].s_expl != ""}>
            <span class="prd_lst_exp prd_lst_span">
              <{$productlist[num].s_expl}>
            </span>
          <{/if}>
          <{if $members_login_flg == true && $productlist[num].discount_flg == true}>
            <span class="prd_lst_regular prd_lst_span"><{$productlist[num].regular_price}></span>
          <{/if}>
          <{if $productlist[num].soldout_flg == false}>
            <span class="prd_lst_price prd_lst_span"><{$productlist[num].price}></span>
            <{if $members_login_flg == true && $productlist[num].discount_flg == true}>
              <span class="prd_lst_discount prd_lst_span"><{$productlist[num].discount_rate}>OFF!!</span>
            <{/if}>
          <{else}>
            <span class="prd_lst_soldout prd_lst_span">SOLDOUT</span>
          <{/if}>
        </li>
      <{/section}>
    </ul>
    <div class="prd_lst_pager">
      <ul>
        <li class="prd_lst_pager_prev">
          <{if $productlist_prev_page == ""}>
            <span class="icon icon_prev_dis">前のページ</span>
          <{else}>
            <a href="<{$productlist_prev_page}>" class="icon icon_prev">前のページ</a>
          <{/if}>
        </li>
        <li class="prd_lst_pos">
          <b><{$productlist_num}></b><span>商品中</span>&nbsp;<b><{$productlist_snum}>-<{$productlist_enum}></b><span>商品</span>
        </li>
        <li class="prd_lst_pager_next">
          <{if $productlist_next_page == ""}>
            <span class="icon icon_next_dis">次のページ</span>
          <{else}>
            <a href="<{$productlist_next_page}>" class="icon icon_next">次のページ</a>
          <{/if}>
        </li>
      </ul>
    </div>
  <{else}>
    <{if $subcategory_num == 0 && $subgroup_num == 0}>
      <p class="prd_lst_none">該当する商品がありません</p>
    <{/if}>
  <{/if}>

  <{if $category_desc_2 != "" || $subcategory_desc_2 != "" || $group_desc_2 != ""}>
    <!-- カテゴリー・グループ 説明文 2 -->
    <div class="category_desc_2 category_desc container_section clearfix">
      <{$category_desc_2}><{$subcategory_desc_2}><{$group_desc_2}>
    </div>
    <!-- //カテゴリー・グループ 説明文 2 -->
  <{/if}>

</div>
