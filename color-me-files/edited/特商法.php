<article id="trade_law" class="under-page">
  <div class="inner">
    <div class="comp-title">
      <h2 class="ttl_ja">特定商取引法に基づく表記</h2>
      <span class="ttl_en">TRADE RAW</span>
    </div>
    <div class="chart_wrap">
      <{if $shop.shop_name != ""}>
      	<dl class="comp-chart">
          <dt>販売業者</dt>
          <dd><{$shop.shop_name}></dd>
        </dl>
      <{/if}>
      <{if $shop.manager_name != ""}>
      <dl class="comp-chart">
        <dt>運営統括責任者名</dt>
        <dd><{$shop.manager_name}></dd>
      </dl>
      <{/if}>
      <{if $shop.postal != ""}>
      <dl class="comp-chart">
        <dt>郵便番号</dt>
        <dd><{$shop.postal}></dd>
      </dl>
      <{/if}>
      <{if $shop.address != ""}>
      <dl class="comp-chart">
        <dt>住所</dt>
        <dd><{$shop.address}></dd>
      </dl>
      <{/if}>
      <{if $shop.price != ""}>
      <dl class="comp-chart">
        <dt>商品代金以外の料金の説明</dt>
        <dd><{$shop.price}></dd>
      </dl>
      <{/if}>
      <{if $shop.apply_limit != ""}>
      <dl class="comp-chart">
        <dt>申込有効期限</dt>
        <dd><{$shop.apply_limit}></dd>
      </dl>
      <{/if}>
      <{if $shop.bad_product != ""}>
      <dl class="comp-chart">
        <dt>不良品</dt>
        <dd><{$shop.bad_product}></dd>
      </dl>
      <{/if}>
      <{if $shop.sales_num != ""}>
      <dl class="comp-chart">
        <dt>販売数量</dt>
        <dd><{$shop.sales_num}></dd>
      </dl>
      <{/if}>
      <{if $shop.delivery_time != ""}>
      <dl class="comp-chart">
        <dt>引渡し時期</dt>
        <dd><{$shop.delivery_time}></dd>
      </dl>
      <{/if}>
      <{if $shop.payment_way != ""}>
      <dl class="comp-chart">
        <dt>お支払い方法</dt>
        <dd><{$shop.payment_way}></dd>
      </dl>
      <{/if}>
      <{if $shop.payment_limit != ""}>
      <dl class="comp-chart">
        <dt>お支払い期限</dt>
        <dd><{$shop.payment_limit}></dd>
      </dl>
      <{/if}>
      <{if $shop.return_limit != ""}>
      <dl class="comp-chart">
        <dt>返品期限</dt>
        <dd><{$shop.return_limit}></dd>
      </dl>
      <{/if}>
      <{if $shop.return_price != ""}>
      <dl class="comp-chart">
        <dt>返品送料</dt>
        <dd><{$shop.return_price}></dd>
      </dl>
      <{/if}>
      <{if $shop.license != ""}>
      <dl class="comp-chart">
        <dt>資格・免許</dt>
        <dd><{$shop.license}></dd>
      </dl>
      <{/if}>
      <{if $shop.service_name != ""}>
      <dl class="comp-chart">
        <dt>サービス名</dt>
        <dd><{$shop.service_name}></dd>
      </dl>
      <{/if}>
      <{if $shop.tel != ""}>
      <dl class="comp-chart">
        <dt>電話番号</dt>
        <dd><{$shop.tel}></dd>
      </dl>
      <{/if}>
      <{if $shop.email != ""}>
      <dl class="comp-chart">
        <dt>公開メールアドレス</dt>
        <dd><{$shop.email}></dd>
      </dl>
      <{/if}>
      <{if $shop.hp_address != ""}>
      <dl class="comp-chart">
        <dt>ホームページアドレス</dt>
        <dd><{$shop.hp_address}></dd>
      </dl>
      <{/if}>
    </div>
  </div><!-- inner -->
</article>
