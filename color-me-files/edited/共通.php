<header>
  <div class="header_inner">
    <div id="hummenu">
      <a id="humButton"></a>
    </div>
    <div class="header_logo">
      <a href="<{$home_url}>"></a>
    </div>
    <div class="header_nav">
          <a class="nav_login" href="<{$view_myaccount_url}>">
          <{if $members_login_flg != true}>
            <span><font>ログイン</font></span>
           <{else}>
            <span><font>マイページ</font></span>
         <{/if}>
        </a>
      <a class="nav_cart" href="<{$view_cart_url}>"><span><font>カート</font></span></a>
    </div>
  </div><!-- header_inner -->
</header>
<{include file = $file_name}>
<footer>
  <div class="footer_inner">
    <div class="footer_upper">
      <a class="footer_logo" href="/"></a>
      <div class="sns_wrap">
        <ul>
          <li><a class="tw" href="#aaaa"></a></li>
          <li><a class="fb" href="#aaaa"></a></li>
          <li><a class="ig" href="#aaaa"></a></li>
        </ul>
      </div>
    </div><!-- footer_upper -->
    <div class="footer_middle">
      <nav>
        <ul>
          <li><a href="<{$home_url}>"><span>TOP</span>トップページへ</a></li>
          <li><a href="/?mode=f1"><span>CONCEPT</span>コンセプト</a></li>
          <li><a href="/?mode=cate&csid=0&cbid=2520817"><span>PRODUCTS</span>商品一覧</a></li>
          <li><a href="/?mode=f2"><span>GIFT</span>ギフト商品一覧</a></li>
          <li><a href="#aaaa"><span>JOURNAL</span>ジャーナル</a></li>
          <li><a href="https://fruitest.sakura.ne.jp/journal/contact/"><span>CONTACT</span>お問い合わせ</a></li>
        </ul>
      </nav>
					<div class="guide">
						<span class="ttl">ご利用ガイド</span>
						<div class="guide_nav">
							<a href="/?mode=f3#fqProduct" jump="#fqProduct">製品について</a>
							<a href="/?mode=f3#fqPurchase" jump="#fqPurchase">ご購入に際して</a>
							<a href="/?mode=f3#fqGift" jump="#fqGift">ギフトについて</a><br>
							<a href="/?mode=f3#fqDelivery" jump="#fqDelivery">配送について</a>
							<a href="/?mode=f3#fqCancel" jump="#fqCancel">キャンセルポリシー</a>
						</div>
					</div>
    </div><!-- footer_middle -->
    <div class="footer_lower">
      <div class="lower_nav">
        <nav>
          <{if $members_login_flg != true}>
          <a href="<{$view_myaccount_url}>">ログイン</a>
           <{else}>
          <a href="<{$view_myaccount_url}>">マイページ</a>
          <a href="<{$members_login_url}>">ログアウト</a>
         <{/if}>
        <a href="<{$view_cart_url}>">カートを見る</a>
        <a href="<{$privacy_url}>">プライバシーポリシー</a>
        <br class="sp_reline">
        <a href="/?mode=f3">FAQ</a>
        <br class="pc_reline">
        <a href="<{$sk_url}>">特定商取引法に基づく表記</a>
        <br class="sp_reline">
        <a href="https://unsungs-web.com/" target="_blank">運営会社</a>
        <a href="https://fruitest.sakura.ne.jp/journal/contact/">お問い合わせ</a>
        </ul>
        <p class="copyright">&#169; 2018 Fruitest.</p>
      </div>
    </div>
  </div>
</footer>
<div id="slideMenu">
  <div id="menuBg"></div>
  <div class="menu_wrap">
    <div id="closeBtn"><a href="javascript:void(0);"></a></div>
    <div class="menu_inner">
      <div class="hum_navi">
        <nav>
        <ul>
          <li><a href="<{$home_url}>"><span>TOP</span><font>トップページ</font></a></li>
          <li><a href="/?mode=f1"><span>CONCEPT</span><font>コンセプト</font></a></li>
          <li><a href="/?mode=cate&csid=0&cbid=2520817"><span>PRODUCTS</span><font>商品一覧</font></a></li>
          <li><a href="/?mode=f2"><span>GIFT</span><font>ギフト商品一覧</font></a></li>
          <li><a href="#aaaa"><span>JOURNAL</span><font>ジャーナル</font></a></li>
          <li><a href="/?mode=f3"><span>FAQ</span><font>よくある質問</font></a></li>
          <li><a href="https://fruitest.sakura.ne.jp/journal/contact/"><span>CONTACT</span><font>お問い合わせ</font></a></li>
        </ul>
      </nav>
      </div>
      <div class="menu_sns">
        <ul>
          <li><a class="tw" href="#aaaa"></a></li>
          <li><a class="fb" href="#aaaa"></a></li>
          <li><a class="ig" href="#aaaa"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div><!-- slideMenu -->
