<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="https://journal.komons-japan.com/wp-content/themes/komons-theme/img/icon/icon.jpg">
<link href="https://journal.komons-japan.com/wp-content/themes/komons-theme/img/icon/icon.jpg" rel="apple-touch-icon" sizes="200x200">
<link rel="stylesheet" href="https://journal.komons-japan.com/wp-content/themes/komons-theme/css/style.css?ver190208">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500" rel="stylesheet">
<script type="text/javascript" src="https://journal.komons-japan.com/wp-content/themes/komons-theme/js/layout.js?ver181022" charset="UTF-8"></script>
<script type="text/javascript" src="https://journal.komons-japan.com/wp-content/themes/komons-theme/js/instafeed.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120930116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-120930116-1', {
    'linker': {
       'domains': ['www.komons-japan.com', 'journal.komons-japan.com', 'cart.shop-pro.jp', 'shop-pro.jp']
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
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '643672039115143');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=643672039115143&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</script>
