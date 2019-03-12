<article id="privacy" class="under-page">
<div class="inner">
  <div class="comp-title">
    <h2 class="ttl_ja">プライバシーポリシー</h2>
    <span class="ttl_en">PRIVACY POLICY</span>
  </div>
  <p class="policy_lead">
  <{$shop_name}>(以下当ショップ)は、<a href="<{$paperboy_url}>" target="_blank"><{$paperboy_name}></a>(以下サービス提供会社)の提供するショッピングカートASPサービス　<a href="<{$cmsp_url}>" target="_blank"><{$cmsp_name}></a>(当サービス)を利用して当ショップを開設するにあたり<{$paperboy_name}>の定めた<a href="<{$paperboy_privacy_url}>" target="_blank">プライバシー・ポリシー</a>に則った個人情報の取扱いを行います。
  </p>
  <div class="policy_wrap">
    <{section name=num loop=$privacy}>
    	<div class="comp-policy">
        <h3 class="ttl_h3"><{$privacy[num].title }></h3>
        <p><{$privacy[num].note }></p>
      </div>
    <{/section}>
  </div><!-- policy_wrap -->
</div><!-- inner -->
</article>
