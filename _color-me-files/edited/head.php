<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//journal.fruitest.jp/wp-content/themes/fruitest-theme/img/favicon.png" rel="apple-touch-icon" sizes="180x180">
<link rel="shortcut icon" href="//journal.fruitest.jp/wp-content/themes/fruitest-theme/img/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<link rel="stylesheet" href="//journal.fruitest.jp/wp-content/themes/fruitest-theme/css/style.css?ver210216">
<link rel="stylesheet" href="//journal.fruitest.jp/wp-content/themes/fruitest-theme/slick/slick.css">
<script type="text/javascript" src="//journal.fruitest.jp/wp-content/themes/fruitest-theme/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//journal.fruitest.jp/wp-content/themes/fruitest-theme/slick/slick.min.js"></script>
<script type="text/javascript" src="//journal.fruitest.jp/wp-content/themes/fruitest-theme/js/layout.js?ver210216"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142991880-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-142991880-1', {
    'linker': {
       'domains': ['www.fruitest.jp/', 'journal.fruitest.jp/', 'cart.shop-pro.jp', 'shop-pro.jp']
    }
  });
  function gtag_report_conversion() {
  var callback = function () {
       console.log('get')
       $('#cartIn').submit();
  };
  gtag('event', 'submit', {
    'event_category': 'cartIn',
    'event_callback': callback,
  });
  return false;
}
  function gtag_report_conversion2(e) {
  var callback = function () {
       console.log(e);
             $('#form'+ e).submit();
  };
  gtag('event', 'submit', {
    'event_category': 'cartIn',
    'event_callback': callback,
  });
  return false;
  }
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '495777151193816');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=495777151193816&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Begin Mieruca Embed Code -->
<script type="text/javascript" id="mierucajs">
window.__fid = window.__fid || [];__fid.push([373175377]);
(function() {
function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
})();
</script>
<!-- End Mieruca Embed Code -->
