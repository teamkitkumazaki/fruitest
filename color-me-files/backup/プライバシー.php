<div id="policy" class="container_section">
  <h2 class="ttl_h2">プライバシーポリシー</h2>
  <p class="policy_lead">
  <{$shop_name}>(以下当ショップ)は、<a href="<{$paperboy_url}>" target="_blank"><{$paperboy_name}></a>(以下サービス提供会社)の提供するショッピングカートASPサービス　<a href="<{$cmsp_url}>" target="_blank"><{$cmsp_name}></a>(当サービス)を利用して当ショップを開設するにあたり<{$paperboy_name}>の定めた<a href="<{$paperboy_privacy_url}>" target="_blank">プライバシー・ポリシー</a>に則った個人情報の取扱いを行います。
  </p>
  <{section name=num loop=$privacy}>
    <h3 class="ttl_h3"><{$privacy[num].title }></h3>
    <p><{$privacy[num].note }></p>
  <{/section}>
</div>
