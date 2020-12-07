<article id="trade_law">
<div id="info" class="sk_info_block container_section">
  <h2 class="ttl_h2">特定商取引法に基づく表記</h2>
  <dl class="def_lst">
    <{if $shop.shop_name != ""}>
      <dt class="def_lst_dt">販売業者</dt>
      <dd class="def_lst_dd"><{$shop.shop_name}>&nbsp;</dd>
    <{/if}>
    <{if $shop.manager_name != ""}>
      <dt class="def_lst_dt">運営統括責任者名</dt>
      <dd class="def_lst_dd"><{$shop.manager_name}>&nbsp;</dd>
    <{/if}>
    <{if $shop.postal != ""}>
      <dt class="def_lst_dt">郵便番号</dt>
      <dd class="def_lst_dd"><{$shop.postal}>&nbsp;</dd>
    <{/if}>
    <{if $shop.address != ""}>
      <dt class="def_lst_dt">住所</dt>
      <dd class="def_lst_dd"><{$shop.address}>&nbsp;</dd>
    <{/if}>
    <{if $shop.price != ""}>
      <dt class="def_lst_dt">商品代金以外の料金の説明</dt>
      <dd class="def_lst_dd"><{$shop.price}>&nbsp;</dd>
    <{/if}>
    <{if $shop.apply_limit != ""}>
      <dt class="def_lst_dt">申込有効期限</dt>
      <dd class="def_lst_dd"><{$shop.apply_limit}>&nbsp;</dd>
    <{/if}>
    <{if $shop.bad_product != ""}>
      <dt class="def_lst_dt">不良品</dt>
      <dd class="def_lst_dd"><{$shop.bad_product}>&nbsp;</dd>
    <{/if}>
    <{if $shop.sales_num != ""}>
      <dt class="def_lst_dt">販売数量</dt>
      <dd class="def_lst_dd"><{$shop.sales_num}>&nbsp;</dd>
    <{/if}>
    <{if $shop.delivery_time != ""}>
      <dt class="def_lst_dt">引渡し時期</dt>
      <dd class="def_lst_dd"><{$shop.delivery_time}>&nbsp;</dd>
    <{/if}>
    <{if $shop.payment_way != ""}>
      <dt class="def_lst_dt">お支払い方法</dt>
      <dd class="def_lst_dd"><{$shop.payment_way}>&nbsp;</dd>
    <{/if}>
    <{if $shop.payment_limit != ""}>
      <dt class="def_lst_dt">お支払い期限</dt>
      <dd class="def_lst_dd"><{$shop.payment_limit}>&nbsp;</dd>
    <{/if}>
    <{if $shop.return_limit != ""}>
      <dt class="def_lst_dt">返品期限</dt>
      <dd class="def_lst_dd"><{$shop.return_limit}>&nbsp;</dd>
    <{/if}>
    <{if $shop.return_price != ""}>
      <dt class="def_lst_dt">返品送料</dt>
      <dd class="def_lst_dd"><{$shop.return_price}>&nbsp;</dd>
    <{/if}>
    <{if $shop.license != ""}>
      <dt class="def_lst_dt">資格・免許</dt>
      <dd class="def_lst_dd"><{$shop.license}>&nbsp;</dd>
    <{/if}>
    <{if $shop.service_name != ""}>
      <dt class="def_lst_dt">サービス名</dt>
      <dd class="def_lst_dd"><{$shop.service_name}>&nbsp;</dd>
    <{/if}>
    <{if $shop.tel != ""}>
      <dt class="def_lst_dt">電話番号</dt>
      <dd class="def_lst_dd"><{$shop.tel}>&nbsp;</dd>
    <{/if}>
    <{if $shop.email != ""}>
      <dt class="def_lst_dt">公開メールアドレス</dt>
      <dd class="def_lst_dd"><{$shop.email}>&nbsp;</dd>
    <{/if}>
    <{if $shop.hp_address != ""}>
      <dt class="def_lst_dt">ホームページアドレス</dt>
      <dd class="def_lst_dd"><{$shop.hp_address}>&nbsp;</dd>
    <{/if}>
  </dl>
</div>
<div id="delivery" class="sk_delivery_block container_section">
  <h2 class="ttl_h2">配送・送料について</h2>
  <dl class="def_lst">
    <{section name=num loop=$sk_delivery}>
      <dt class="def_lst_dt"><{$sk_delivery[num].name}></dt>
      <dd class="def_lst_dd">
        <{if $sk_delivery[num].img_url != "" }>
          <img src="<{$sk_delivery[num].img_url}>" /><br />
        <{/if}>
        <{$sk_delivery[num].other}>&nbsp;
      </dd>
    <{/section}>
  </dl>
</div>
<div id="payment" class="sk_payment_block container_section">
  <h2 class="ttl_h2">支払い方法について</h2>
  <dl class="def_lst">
    <{section name=num loop=$sk_payment}>
      <dt class="def_lst_dt"><{$sk_payment[num].name}></dt>
      <dd class="def_lst_dd">
        <{if $sk_payment[num].img_url != "" }>
          <img src="<{$sk_payment[num].img_url}>" /><br />
        <{/if}>
        <{if $sk_payment[num].card_img != "" }>
          <{$sk_payment[num].card_img}><br />
        <{/if}>
        <{$sk_payment[num].other}>&nbsp;
      </dd>
    <{/section}>
  </dl>
</div>
</article>
