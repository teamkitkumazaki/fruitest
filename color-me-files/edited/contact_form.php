<div class="form_wrap">
<label>お問い合わせ内容</label>
[select* category include_blank menu-24 class:form01 "商品について" "ご注文について" "ギフト対応について" "採用/求人について" "取材等について" "その他"]
</div><!-- form_wrap -->

<div class="form_wrap">
<label>お名前(漢字)</label>
<div class="flex_wrap">
[text* yourname class:form02 placeholder akismet:author "姓"]
[text* yourname2 class:form03 akismet:author placeholder "名"]
</div>
</div><!-- form_wrap -->

<div class="form_wrap">
<div class="flex_wrap">
<div class="form_left">
<label>メールアドレス</label>
[email* yourmail class:form04 placeholder "example@fruitest.jp"] </label>
</div>
<div class="form_right">
<label>メールアドレス(確認用)</label>
[email* yourmail_confirm class:form05 placeholder "fruitest.jp"]
</div>
</div>
</div><!-- form_wrap -->

<div class="form_wrap">
<label>お問い合わせ本文</label>
[textarea* content class:form06 placeholder]
</div><!-- form_wrap -->

<div class="form_wrap confirm_wrap">
  <span class="confirmButton comp-linkbutton wpcf7c-elm-step1 sentout">
	<button>
		<span>確認画面へ<font>CONFIRM</font></span>
		[confirm id:confirmButton class:confirm_button "確認画面に進む"]
	</button>
	</span>
<span class="send_wrap wpcf7c-elm-step2 sentout">
[back id:backButton class:back_button "入力をやり直す"][submit "送信"]
</span>
</div><!-- form_wrap -->
